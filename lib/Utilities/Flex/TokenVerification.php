<?php

namespace CyberSource\Utilities\Flex;

class TokenVerification
{
	public function verifyToken($publicKey, $postParam)
	{
		$dataString = "";
		$arraySting = explode(",", $postParam[0]['signedFields']);
		$lastElement = end($arraySting);
		$postParam = json_decode($postParam[0]);
		foreach ($arraySting as $value) {
			$dataString .= $postParam->$value;
			if($lastElement != $value){
				$dataString .= ",";
			}

		}
		$signature = base64_decode($postParam->signature);
		$signatureVerify = openssl_verify($dataString, $signature, $publicKey, "sha512");
		if ($signatureVerify == 1) {
			return "true";
		} elseif ($signatureVerify == 0) {
			return "false";
		} else {
			echo "Error in checking signature\n";
		}
	}
}

?>