<?php

namespace CyberSource\Api;

use CyberSource\ApiException;
use CyberSource\Utilities\PGP\BatchUpload\PgpEncryptionUtility;
use CyberSource\Utilities\PGP\BatchUpload\MutualAuthUploadUtility;
use CyberSource\Utilities\PGP\BatchUpload\BatchuploadUtility;
use CyberSource\Logging\LogFactory;
use CyberSource\Logging\LogConfiguration;

class BatchUploadApi
{
    private static $logger = null;

    /**
     * BatchUploadApi constructor.
     *
     * Example usage with custom log configuration:
     * ```php
     * $logConfig = new \CyberSource\Logging\LogConfiguration();
     * $logConfig->enableLogging(true);
     * $logConfig->setDebugLogFile(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "debugTest.log");
     * $logConfig->setErrorLogFile(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "Log" . DIRECTORY_SEPARATOR . "errorTest.log");
     * $logConfig->setLogDateFormat("Y-m-d\TH:i:s");
     * $logConfig->setLogFormat("[%datetime%] [%level_name%] [%channel%] : %message%\n");
     * $logConfig->setLogMaxFiles(3);
     * $logConfig->setLogLevel("debug");
     * $logConfig->enableMasking(true);
     * $api = new \CyberSource\Api\BatchUploadApi($logConfig);
     * ```
     *
     * @param LogConfiguration|null $logConfig
     */
    public function __construct($logConfig = null)
    {
        // If no log config provided, create one with logging disabled
        if ($logConfig === null) {
            $logConfig = new LogConfiguration();
            $logConfig->enableLogging(false);
        }
        // Use LogFactory to get a logger for this class
        self::$logger = (new LogFactory())->getLogger(
            \CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)),
            $logConfig
        );
    }

    /**
     * Uploads a batch file using mutual TLS authentication with a PKCS#12 (.p12/.pfx) client certificate file.
     *
     * @param string $inputFilePath Path to the file to be uploaded.
     * @param string $environmentHostname The environment hostname.
     * @param string $pgpEncryptionCertPath Path to the PGP encryption certificate.
     * @param string $clientCertP12FilePath Path to the PKCS#12 client certificate file (.p12 or .pfx).
     * @param string $clientCertP12Password Password for the PKCS#12 client certificate.
     * @param string|null $serverTrustCertPath Path to the server trust certificate(s) in PEM format. Optional.
     * @param bool $verify_ssl Whether to verify the server's SSL certificate. Optional. Set to false to disable verification (not recommended). Default is true.
     * @return array [responseBody, statusCode, headers]
     * @throws ApiException
     */
    public function uploadBatchWithP12(
        $inputFilePath,
        $environmentHostname,
        $pgpEncryptionCertPath,
        $clientCertP12FilePath,
        $clientCertP12Password,
        $serverTrustCertPath = null,
        $verify_ssl = true
    ) {
        if (self::$logger) {
            self::$logger->info("Starting batch upload with P12/PFX for file: $inputFilePath");
            if ($verify_ssl === false) {
                self::$logger->warning("SSL verification is DISABLED for this batch upload. This is insecure and should not be used in production.");
            }
        }
        BatchuploadUtility::validateBatchApiP12Inputs(
            $inputFilePath, $environmentHostname, $pgpEncryptionCertPath, $clientCertP12FilePath, $serverTrustCertPath
        );

        $endpointUrl = $this->getEndpointUrl($environmentHostname, "/pts/v1/transaction-batch-upload");

        $encryptedPgpBytes = PgpEncryptionUtility::encryptFileToBytes($inputFilePath, $pgpEncryptionCertPath);

        $pgpFileName = basename($inputFilePath);
        if (empty($pgpFileName) || $pgpFileName === '.' || $pgpFileName === '..') {
            $pgpFileName = 'file.pgp';
        } else {
            $pgpFileName = pathinfo($pgpFileName, PATHINFO_FILENAME) . '.pgp';
        }

        return MutualAuthUploadUtility::uploadWithP12(
            $encryptedPgpBytes,
            $endpointUrl,
            $pgpFileName,
            $clientCertP12FilePath,
            $clientCertP12Password,
            $serverTrustCertPath,
            $verify_ssl,
            self::$logger
        );
    }

    /**
     * Uploads a batch file using mutual TLS authentication with client private key and certificate.
     *
     * @param string $inputFilePath Path to the file to be uploaded.
     * @param string $environmentHostname The environment hostname (e.g., api.cybersource.com).
     * @param string $pgpEncryptionCertPath Path to the PGP encryption certificate.
     * @param string $clientCertPath Path to the client certificate (PEM).
     * @param string $clientKeyPath Path to the client private key (PEM).
     * @param string|null $serverTrustCertPath Path to the server trust certificate(s) in PEM format. Optional.
     * @param string|null $clientKeyPassword Password for the client private key. Optional.
     * @param bool $verify_ssl Whether to verify the server's SSL certificate. Optional. Set to false to disable verification (not recommended). Default is true.
     * @return array [responseBody, statusCode, headers]
     * @throws ApiException
     */
    public function uploadBatchWithKeyAndCert(
        $inputFilePath,
        $environmentHostname,
        $pgpEncryptionCertPath,
        $clientCertPath,
        $clientKeyPath,
        $serverTrustCertPath = null,
        $clientKeyPassword = null,
        $verify_ssl = true
    ) {
        if (self::$logger) {
            self::$logger->info("Starting batch upload with client key/cert for file: $inputFilePath");
            if ($verify_ssl === false) {
                self::$logger->warning("SSL verification is DISABLED for this batch upload. This is insecure and should not be used in production.");
            }
        }
        
        BatchuploadUtility::validateBatchApiKeysInputs($inputFilePath, $environmentHostname, $pgpEncryptionCertPath, $clientKeyPath, $clientCertPath, $serverTrustCertPath);
        
        $endpointUrl = $this->getEndpointUrl($environmentHostname, "/pts/v1/transaction-batch-upload");

        $encryptedPgpBytes = PgpEncryptionUtility::encryptFileToBytes($inputFilePath, $pgpEncryptionCertPath);

        $pgpFileName = basename($inputFilePath);
        if (empty($pgpFileName) || $pgpFileName === '.' || $pgpFileName === '..') {
            $pgpFileName = 'file.pgp';
        } else {
            $pgpFileName = pathinfo($pgpFileName, PATHINFO_FILENAME) . '.pgp';
        }

        return MutualAuthUploadUtility::uploadWithKeyAndCert(
            $encryptedPgpBytes,
            $endpointUrl,
            $pgpFileName,
            $clientCertPath,
            $clientKeyPath,
            $serverTrustCertPath,
            $clientKeyPassword,
            $verify_ssl,
            self::$logger
        );
    }

    /**
     * Constructs the full endpoint URL for the given environment hostname and endpoint path.
     *
     * @param string $environmentHostname The environment hostname (with or without protocol prefix).
     * @param string $endpoint The endpoint path to append.
     * @return string The full endpoint URL.
     */
    private function getEndpointUrl($environmentHostname, $endpoint)
    {
        $URL_PREFIX = 'https://';
        $baseUrl = (stripos(trim($environmentHostname), $URL_PREFIX) === 0)
            ? trim($environmentHostname)
            : $URL_PREFIX . trim($environmentHostname);
        return $baseUrl . $endpoint;
    }

}
