<?php

namespace CyberSource\Utilities\PGP\BatchUpload;

use Exception;

class PgpEncryptionUtility
{
    /**
     * Encrypt a file using a PGP public key and return the encrypted bytes.
     *
     * @param string $inputFile Path to the file to encrypt
     * @param string $publicKeyFile Path to the ASCII-armored public key file
     * @return string Encrypted file bytes
     * @throws Exception on failure
     */
    public static function encryptFileToBytes($inputFile, $publicKeyFile)
    {
        if (!file_exists($inputFile)) {
            throw new Exception("Input file not found: $inputFile");
        }
        if (!file_exists($publicKeyFile)) {
            throw new Exception("Public key file not found: $publicKeyFile");
        }
    
        $data = file_get_contents($inputFile);
        $pubKeyData = file_get_contents($publicKeyFile);
    
        $keyMsg = \OpenPGP_Message::parse(\OpenPGP::unarmor($pubKeyData, 'PGP PUBLIC KEY BLOCK'));
        $pubKeyPacket = null;
        foreach ($keyMsg as $packet) {
            if ($packet instanceof \OpenPGP_PublicKeyPacket) {
                $pubKeyPacket = $packet;
                break;
            }
        }
        if (!$pubKeyPacket) {
            throw new Exception("No public key found in $publicKeyFile");
        }
    
        $literal = new \OpenPGP_LiteralDataPacket($data, ['format' => 'b', 'filename' => basename($inputFile)]);
    
        $encrypted = \OpenPGP_Crypt_Symmetric::encrypt([$pubKeyPacket], new \OpenPGP_Message([$literal]));
    //also works without converting to string
        return (string)$encrypted->to_bytes();
    }
}
