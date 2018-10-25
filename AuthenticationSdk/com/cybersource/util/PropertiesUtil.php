<?php
/*
Purpose : Reading Input Config Json File
*/
namespace CyberSource;
require_once '../cybersource-rest-client-php/AuthenticationSdk/com/cybersource/core/MerchantConfiguration.php';
class PropertiesUtil
{
	
	public function readConfig($fileName)
	{
		 if(file_exists($fileName)){
		 	$configConst = file_get_contents($fileName);
		 	return json_decode($configConst);
		 }else{
		 	return null;
		 }

	}
	
}

?>