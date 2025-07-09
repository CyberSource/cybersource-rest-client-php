<?php

namespace CyberSource\Utilities\PGP\BatchUpload;

class BatchuploadUtility
{
    const MAX_FILE_SIZE_BYTES = 75 * 1024 * 1024; // 75MB

    /**
     * Validates the input parameters for batch API using P12 client certificate.
     *
     * @param string $inputFile Path to the input CSV file for batch upload.
     * @param string $environmentHostname
     * @param string $pgpEncryptionCertPath Path to the PGP public key file (.asc).
     * @param string $clientCertP12FilePath Path to the client P12 certificate file.
     * @param string|null $serverTrustCertPath Path to the server trust certificate file (PEM, optional).
     * @throws \InvalidArgumentException
     */
    public static function validateBatchApiP12Inputs($inputFile, $environmentHostname, $pgpEncryptionCertPath, $clientCertP12FilePath, $serverTrustCertPath = null)
    {
        self::validateInputFile($inputFile);
        if (empty(trim($environmentHostname))) {
            throw new \InvalidArgumentException('Environment Host Name for Batch Upload API cannot be null or empty.');
        }
        self::validatePathAndFile($pgpEncryptionCertPath, 'PGP Encryption Cert Path');
        self::validatePathAndFile($clientCertP12FilePath, 'Client Cert P12 File Path');
        if (!empty($serverTrustCertPath)) {
            self::validatePathAndFile($serverTrustCertPath, 'Server Trust Cert Path');
        }
    }

    /**
     * Validates the input parameters for batch API using direct key and certificate file paths.
     *
     * @param string $inputFile Path to the input CSV file for batch upload.
     * @param string $environmentHostname
     * @param string $pgpPublicKeyPath Path to the PGP public key file (.asc).
     * @param string $clientPrivateKeyPath Path to the client private key file (PEM).
     * @param string $clientCertPath Path to the client certificate file (PEM).
     * @param string|null $serverTrustCertPath Path to the server trust certificate file (PEM, optional).
     * @throws \InvalidArgumentException
     */
    public static function validateBatchApiKeysInputs($inputFile, $environmentHostname, $pgpPublicKeyPath, $clientPrivateKeyPath, $clientCertPath, $serverTrustCertPath = null)
    {
        self::validateInputFile($inputFile);
        if (empty(trim($environmentHostname))) {
            throw new \InvalidArgumentException('Environment Host Name for Batch Upload API cannot be null or empty.');
        }
        self::validatePathAndFile($pgpPublicKeyPath, 'PGP Public Key Path');
        self::validatePathAndFile($clientPrivateKeyPath, 'Client Private Key Path');
        self::validatePathAndFile($clientCertPath, 'Client Certificate Path');
        if (!empty($serverTrustCertPath)) {
            self::validatePathAndFile($serverTrustCertPath, 'Server Trust Certificate Path');
        }
    }

    /**
     * Validates the input file for batch upload.
     * Checks for existence, file type (CSV), and maximum file size (75MB).
     *
     * @param string $inputFile Path to the input file to validate.
     * @throws \InvalidArgumentException
     */
    public static function validateInputFile($inputFile)
    {
        if (empty($inputFile) || !file_exists($inputFile) || !is_file($inputFile)) {
            throw new \InvalidArgumentException("Input file is invalid or does not exist: $inputFile");
        }
        // Only CSV files are allowed for batch API
        if (strtolower(pathinfo($inputFile, PATHINFO_EXTENSION)) !== 'csv') {
            throw new \InvalidArgumentException("Only CSV file type is allowed: " . basename($inputFile));
        }
        // Max file size allowed is 75MB
        $fileSize = filesize($inputFile);
        if ($fileSize > self::MAX_FILE_SIZE_BYTES) {
            throw new \InvalidArgumentException("Input file size exceeds the maximum allowed size of 75MB: $fileSize");
        }
    }

    /**
     * Validates that the given file path exists and is not empty.
     *
     * @param string $filePath The file path to validate.
     * @param string $pathType A description of the path type (e.g., "Input file").
     * @throws \InvalidArgumentException
     */
    public static function validatePathAndFile($filePath, $pathType)
    {
        if (empty($filePath) || !is_string($filePath) || !trim($filePath)) {
            throw new \InvalidArgumentException("$pathType path cannot be null or empty");
        }

        $normalizedPath = trim($filePath);

        if (!file_exists($normalizedPath)) {
            throw new \InvalidArgumentException("$pathType does not exist: $normalizedPath");
        }
        if (!is_file($normalizedPath)) {
            throw new \InvalidArgumentException("$pathType does not have valid file: $normalizedPath");
        }
        if (!is_readable($normalizedPath)) {
            throw new \InvalidArgumentException("$pathType is not readable: $normalizedPath");
        }
    }

}
