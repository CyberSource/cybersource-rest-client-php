<?php

namespace CyberSource\Api;

use Exception;
use CyberSource\Utilities\PGP\BatchUpload\PgpEncryptionUtility;
use CyberSource\Utilities\PGP\BatchUpload\MutualAuthUploadUtility;
use CyberSource\Logging\LogFactory;


class BatchUploadApi
{
    private static $logger = null;

    /**
     * BatchUploadApi constructor.
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
     * @param string $inputFile Path to the file to be uploaded.
     * @param string $environmentHostname The environment hostname.
     * @param string $pgpEncryptionCertPath Path to the PGP encryption certificate.
     * @param string $clientCertP12FilePath Path to the PKCS#12 client certificate file (.p12 or .pfx).
     * @param string $clientCertP12Password Password for the PKCS#12 client certificate.
     * @param string|null $serverTrustCertPath Path to the server trust certificate(s) in PEM format. Optional.
     * @return array [responseBody, statusCode, headers]
     * @throws Exception
     */
    public function uploadBatchWithP12(
        $inputFile,
        $environmentHostname,
        $pgpEncryptionCertPath,
        $clientCertP12FilePath,
        $clientCertP12Password,
        $serverTrustCertPath = null,
        $verify_ssl = true
    ) {
        $this->logInfo("Starting batch upload with P12/PFX for file: $inputFile");
        $endpointUrl = $this->getEndpointUrl($environmentHostname, "/pts/v1/transaction-batch-upload");

        $encryptedPgpBytes = PgpEncryptionUtility::encryptFileToBytes($inputFile, $pgpEncryptionCertPath);

        return MutualAuthUploadUtility::uploadWithP12(
            $encryptedPgpBytes,
            $endpointUrl,
            basename($inputFile) . ".pgp",
            $clientCertP12FilePath,
            $clientCertP12Password,
            $serverTrustCertPath,
            $verify_ssl,
            $logger = null
        );
    }

    /**
     * Uploads a batch file using mutual TLS authentication with client private key and certificate.
     *
     * @param string $inputFile Path to the file to be uploaded.
     * @param string $environmentHostname The environment hostname (e.g., api.cybersource.com).
     * @param string $pgpEncryptionCertPath Path to the PGP encryption certificate.
     * @param string $clientCertPath Path to the client certificate (PEM).
     * @param string $clientKeyPath Path to the client private key (PEM).
     * @param string|null $serverTrustCertPath Path to the server trust certificate(s) in PEM format. Optional.
     * @param string|null $clientKeyPassword Password for the client private key. Optional.
     * @return array [responseBody, statusCode, headers]
     * @throws Exception
     */
    public function uploadBatchWithKeyAndCert(
        $inputFile,
        $environmentHostname,
        $pgpEncryptionCertPath,
        $clientCertPath,
        $clientKeyPath,
        $serverTrustCertPath = null,
        $clientKeyPassword = null,
        $verify_ssl = true
    ) {
        $this->logInfo("Starting batch upload with client key/cert for file: $inputFile");
        $endpointUrl = $this->getEndpointUrl($environmentHostname, "/pts/v1/transaction-batch-upload");

        $encryptedPgpBytes = PgpEncryptionUtility::encryptFileToBytes($inputFile, $pgpEncryptionCertPath);

        return MutualAuthUploadUtility::uploadWithKeyAndCert(
            $encryptedPgpBytes,
            $endpointUrl,
            basename($inputFile) . ".pgp",
            $clientCertPath,
            $clientKeyPath,
            $serverTrustCertPath,
            $clientKeyPassword,
            $verify_ssl,
            $logger = null
        );
    }

    private function getEndpointUrl($hostname, $endpoint)
    {
        $url = rtrim($hostname, "/") . $endpoint;
        $this->logDebug("Resolved endpoint URL: $url");
        return $url;
    }

    private function logInfo($msg)
    {
        if (self::$logger) {
            self::$logger->info($msg);
        } else {
            error_log("[INFO] $msg");
        }
    }

    private function logDebug($msg)
    {
        if (self::$logger) {
            self::$logger->debug($msg);
        } else {
            error_log("[DEBUG] $msg");
        }
    }
}