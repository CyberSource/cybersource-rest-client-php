<?php
/*
*Purpose: Merchant Config contains credentials and8 keys for Authentication and API Information
*/
namespace CyberSource\Authentication\Core;

use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Logging\LogConfiguration as LogConfiguration;
use \InvalidArgumentException;

class MerchantConfiguration
{
  
    private static $defaultMerchantConfiguration;
    private static $logger = null;

    /**
     * authenticationType for OAuth
     *
     * @var string
     */
    protected $authenticationType = '';

    /**
     * merchantID for HTTP basic authentication
     *
     * @var string
     */
    protected $merchantID = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * keyAlias for HTTP basic authentication
     *
     * @var string
     */
    protected $keyAlias = '';

    /**
     * keyFilename for HTTP basic authentication
     *
     * @var string
     */
    protected $keyFilename = '';

    /**
     * logFilename for HTTP basic authentication
     *
     * @var string
     */
    protected $logFilename = '';

    /**
     * apiKeyID for HTTP basic authentication
     *
     * @var string
     */
    protected $apiKeyID = '';
    /**
     * keysDirectory for HTTP basic authentication
     *
     * @var string
     */
    protected $keysDirectory = '';

    /**
     * secretKey for HTTP basic authentication
     *
     * @var string
     */
    protected $secretKey = '';

    /**
     * flag for MetaKey authentication
     *
     * @var bool
     */
    protected $useMetaKey = false;

    /**
     * portfolioID for MetaKey authentication
     *
     * @var string
     */
    protected $portfolioID = '';

    /**
     * flag for Enabling Client Cert
     *
     * @var bool
     */
    protected $enableClientCert = false;

    /**
     * Directory of Client Cert
     *
     * @var string
     */
    protected $clientCertDirectory = '';

    /**
     * Name of Client Cert
     *
     * @var string
     */
    protected $clientCertFile = '';

    /**
     * Password for Client Cert file
     *
     * @var string
     */
    protected $clientCertPassword = '';

    /**
     * Client Id for OAuth
     *
     * @var string
     */
    protected $clientId = '';

    /**
     * Client Secret for OAuth
     *
     * @var string
     */
    protected $clientSecret = '';

    /**
     * OAuth Access Token
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * OAuth Refresh Token
     *
     * @var string
     */
    protected $refreshToken = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = '';

    /**
     * The method
     *
     * @var string
     */
    protected $method = '';

    /**
     * Indicates if SSL verification should be enabled or disabled.
     *
     * This is useful if the host uses a self-signed SSL certificate.
     *
     * @var boolean True if the certificate should be validated, false otherwise.
     */
    protected $sslVerification = false;

    /**
     * Curl proxy host
     *
     * @var string
     */
    protected $proxyHost="";

    /**
     * Curl proxy port
     *
     * @var integer
     */
    protected $proxyPort;

    /**
     * Curl RUN Environment
     *
     * @var string
     */
    protected $runEnvironment="";

    /**
     * Curl IntermediateHost
     *
     * @var string
     */
    protected $IntermediateHost="";

    /**
     * Curl useMLEGlobally
     *
     * @var bool
     */
    protected $useMLEGlobally=null;

    /**
     * Enable MLE for optional APIs globally (alias for useMLEGlobally)
     *
     * @var bool
     */
    protected $enableRequestMLEForOptionalApisGlobally = null;

    /**
     * Disable MLE for mandatory APIs globally
     *
     * @var bool
     */
    protected $disableRequestMLEForMandatoryApisGlobally = false;

    /**
     * Curl mapToControlMLEonAPI
     *
     * Expected values (strings or booleans):
     *  "apiFunctionName1" => "true::true"
     *  "apiFunctionName2" => "false::false"
     *  "apiFunctionName3" => "true::false"
     *  "apiFunctionName4" => "false::true"
     *  "apiFunctionName5" => "true"      (request only; response uses global flag)
     *  "apiFunctionName6" => "false"     (request only; response uses global flag)
     *  "apiFunctionName7" => "::true"    (response only; request uses global flag)
     *  "apiFunctionName8" => "true::"    (request true; response uses global flag)
     *
     * A bare boolean (true/false) acts like "true"/"false" string (request only).
     *
     * @var array<string, string|bool>
     */ 
    protected $mapToControlMLEonAPI = [];

    /**
     * Internal parsed per-API Request MLE flags.
     * @var array<string,bool>
     */
    protected $internalMapToControlRequestMLEonAPI = [];

    /**
     * Internal parsed per-API Response MLE flags.
     * @var array<string,bool>
     */
    protected $internalMapToControlResponseMLEonAPI = [];

    /**
     * @deprecated Use requestMleKeyAlias instead. Retained for backward compatibility.
     *
     * @var string
     */
    protected $mleKeyAlias = GlobalParameter::DEFAULT_MLE_ALIAS_FOR_CERT;

    /**
     * Optional parameter. User can pass a custom requestMleKeyAlias to fetch from the certificate.
     *
     * @var string
     */
    protected $requestMleKeyAlias = GlobalParameter::DEFAULT_MLE_ALIAS_FOR_CERT;

    /**
     * Curl DefaultDeveloperId
     * 
     * @var string
     */
    protected $defaultDeveloperId="";

    /**
     * Solution ID
     *
     * @var string
     */
    protected $solutionId="";

    /**
     * Logging configuration
     *
     * @var LogConfiguration
     */
    protected $logConfig;


    /**
     * NetworkToken Cert file directory
     *
     * @var string
     */
    protected $jwePEMFileDirectory;

    /**
     * tempFolderPath directory
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * MLE Cert file path
     * @var string
     */
    protected $mleForRequestPublicCertPath;

    /**
     * Enable Response (Outbound) MLE globally (encrypted responses if API supports it)
     *
     * @var bool
     */
    protected $enableResponseMleGlobally = false;

    /**
     * KID value for the Response MLE public certificate (returned by CyberSource portal)
     *
     * @var string
     */
    protected $responseMleKID = '';

    /**
     * Private key file path used to decrypt Response MLE payloads (e.g. .p12 / .pem)
     *
     * @var string
     */
    protected $responseMlePrivateKeyFilePath = '';

    /**
     * Private key (OpenSSL resource/object) used to decrypt Response MLE payloads.
     * Provide the OpenSSLAsymmetricKey object (PHP 8+) or OpenSSL key resource (PHP 7).
     * Mutually exclusive with responseMlePrivateKeyFilePath.
     *
     * @var \OpenSSLAsymmetricKey|resource|null
     */
    protected $responseMlePrivateKey = null;

    /**
     * Password for the private key file (e.g. .p12 or encrypted .pem) used for Response MLE decryption.
     * Optional. Required only when the key file is password-protected.
     *
     * @var string
     */
    protected $responseMlePrivateKeyFilePassword = '';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
        $this->logConfig = new LogConfiguration();

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $this->logConfig);
        }
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $authenticationType Token for OAuth
     *
     * @return void
     */
    public function setAuthenticationType($authenticationType)
    {
        $this->authenticationType = $authenticationType;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAuthenticationType()
    {
        return $this->authenticationType;
    }

    /**
     * Sets the run environment for connection api
     *
     * @param string $runEnvironment Token for OAuth
     *
     * @return void
     */
    public function setRunEnvironment($runEnvironment)
    {
        $this->runEnvironment = $runEnvironment;

        if (in_array($this->runEnvironment, GlobalParameter::OLD_RUN_ENVIRONMENT_CONSTANTS))
        {
            throw new \Exception(GlobalParameter::DEPRECATED_RUN_ENVIRONMENT);
        }

        $this->host =$this->runEnvironment;
        return $this;
    }

    /**
     * Gets the run environment for connection api
     * @return string Access token for OAuth
     */
    public function getRunEnvironment()
    {
        if (in_array(strtoupper($this->runEnvironment), GlobalParameter::OLD_RUN_ENVIRONMENT_CONSTANTS))
        {
            throw new \Exception(GlobalParameter::DEPRECATED_RUN_ENVIRONMENT);
        } else {
            return $this->runEnvironment;
        }
    }

    /**
     * Sets the IntermediateHost for axa intermediate feature
     *
     * @param string $IntermediateHost url for intermediate host
     *
     * @return void
     */
    public function setIntermediateHost($IntermediateHost)
    {
        $this->IntermediateHost = $IntermediateHost;
        return $this;
    }

    /**
     * Gets the IntermediateHost for intermediate url
     * @return string $IntermediateHost
     */
    public function getIntermediateHost()
    {
        return $this->IntermediateHost;
    }

    /**
     * Sets the DefaultDeveloperId for axa intermediate feature
     *
     * @param string $defaultDeveloperId url for intermediate host
     *
     * @return void
     */
    public function setDefaultDeveloperId($defaultDeveloperId)
    {
        $this->defaultDeveloperId = $defaultDeveloperId;
        return $this;
    }

    /**
     * Gets the DefaultDeveloperId for intermediate url
     * @return string $DefaultDeveloperId
     */
    public function getDefaultDeveloperId()
    {
        return $this->defaultDeveloperId;
    }


    /**
     * Sets the Solution ID
     *
     * @param string $solutionId
     *
     * @return void
     */
    public function setSolutionId($solutionId)
    {
        $this->solutionId = $solutionId;
    }

    /**
     * Gets the Solution ID
     * @return string 
     */
    public function getSolutionId()
    {
        return $this->solutionId;
    }

    /**
     * Sets the merchantID for HTTP basic authentication
     *
     * @param string $merchantID merchantID for HTTP basic authentication
     *
     * @return void
     */
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;
    }

    /**
     * Gets the merchantID for HTTP basic authentication
     *
     * @return string merchantID for HTTP basic authentication
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Sets the keyAlias for HTTP basic authentication
     *
     * @param string $keyAlias merchantID for HTTP basic authentication
     *
     * @return void
     */
    public function setKeyAlias($keyAlias)
    {
        $this->keyAlias = $keyAlias;
    }

    /**
     * Gets the keyAlias for HTTP basic authentication
     *
     * @return string keyAlias for HTTP basic authentication
     */
    public function getKeyAlias()
    {
        return $this->keyAlias;
    }

    /**
     * Sets the keyAlias for HTTP basic authentication
     *
     * @param string $keyFilename merchantID for HTTP basic authentication
     *
     * @return void
     */
    public function setKeyFileName($keyFilename)
    {
        $this->keyFilename = $keyFilename;
    }

    /**
     * Gets the keyFilename for HTTP basic authentication
     *
     * @return string keyFilename for HTTP basic authentication
     */
    public function getKeyFileName()
    {
        return $this->keyFilename;
    }

    /**
     * Sets the logFilename for HTTP basic authentication
     *
     * @param string $logFilename merchantID for HTTP basic authentication
     *
     * @return void
     */
    public function setLogFileName($logFilename)
    {
        $this->logFilename = $logFilename;
    }

    /**
     * Gets the logFilename for HTTP basic authentication
     *
     * @return string logFilename for HTTP basic authentication
     */
    public function getLogFileName()
    {
        return $this->logFilename;
    }

    /**
     * Sets the keysDirectory for HTTP basic authentication
     *
     * @param string $keysDirectory merchantID for HTTP basic authentication
     *
     * @return void
     */
    public function setKeysDirectory($keysDirectory)
    {
        $this->keysDirectory = $keysDirectory;
    }

    /**
     * Gets the keysDirectory for HTTP basic authentication
     *
     * @return string keysDirectory for HTTP basic authentication
     */
    public function getKeysDirectory()
    {
        return $this->keysDirectory;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return void
     */
    public function setKeyPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getKeyPassword()
    {
        return $this->password;
    }

    /**
     * Sets the apiKeyID for HTTP basic authentication
     *
     * @param string $apiKeyID Password for HTTP basic authentication
     *
     * @return void
     */
    public function setApiKeyID($apiKeyID)
    {
        $this->apiKeyID = $apiKeyID;
    }

    /**
     * Gets the apiKeyID for HTTP basic authentication
     *
     * @return string apiKeyID for HTTP basic authentication
     */
    public function getApiKeyID()
    {
        return $this->apiKeyID;
    }

    /**
     * Sets the secretKey for HTTP basic authentication
     *
     * @param string secretKey for HTTP basic authentication
     *
     * @return void
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * Gets the secretKey for HTTP basic authentication
     *
     * @return string secretKey for HTTP basic authentication
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Sets the flag for metakey authentication
     *
     * @param bool flag for metakey authentication
     *
     * @return void
     */
    public function setUseMetaKey($useMetaKey)
    {
        if(!is_null($useMetaKey) && is_bool($useMetaKey))
        {
            $this->useMetaKey = $useMetaKey;
        }
        else
        {
            $this->useMetaKey = false;
        }
    }

    /**
     * Gets the flag for metakey authentication
     *
     * @return bool flag for metakey authentication
     */
    public function getUseMetaKey()
    {
        return $this->useMetaKey;
    }

    /**
     * Sets the portfolioID for metakey authentication
     *
     * @param string portfolioID for metakey authentication
     *
     * @return void
     */
    public function setPortfolioID($portfolioID)
    {
        $this->portfolioID = $portfolioID;
    }

    /**
     * Gets the portfolioID for metakey authentication
     *
     * @return string portfolioID for metakey authentication
     */
    public function getPortfolioID()
    {
        return $this->portfolioID;
    }
	
    /**
     * Sets the flag for Client Cert
     *
     * @param bool flag for Client Cert
     *
     * @return $this
     */
    public function setEnableClientCert($enableClientCert)
    {
        if(!is_null($enableClientCert) && is_bool($enableClientCert))
        {
            $this->enableClientCert = $enableClientCert;
        }
        else
        {
            $this->enableClientCert = false;
        }
    }

    /**
     * Gets the flag for Client Cert
     *
     * @return bool flag for Client Cert
     */
    public function isEnableClientCert()
    {
        return $this->enableClientCert;
    }

    /**
     * Sets the Directory for Client Cert
     *
     * @param string Directory for Client Cert
     *
     * @return void
     */
    public function setClientCertDirectory($clientCertDirectory)
    {
        $this->clientCertDirectory = $clientCertDirectory;
    }

    /**
     * Gets the Directory for Client Cert
     *
     * @return string Directory for Client Cert
     */
    public function getClientCertDirectory()
    {
        return $this->clientCertDirectory;
    }

    /**
     * Sets the name of Client Cert file
     *
     * @param string Name of Client Cert file
     *
     * @return void
     */
    public function setClientCertFile($clientCertFile)
    {
        $this->clientCertFile = $clientCertFile;
    }

    /**
     * Gets the name of Client Cert file
     *
     * @return string Name of Client Cert file
     */
    public function getClientCertFile()
    {
        return $this->clientCertFile;
    }

    /**
     * Sets the Password for Client Cert file
     *
     * @param string Password for Client Cert file
     *
     * @return void
     */
    public function setClientCertPassword($clientCertPassword)
    {
        $this->clientCertPassword = $clientCertPassword;
    }

    /**
     * Gets the Password for Client Cert file
     *
     * @return string Password for Client Cert file
     */
    public function getClientCertPassword()
    {
        return $this->clientCertPassword;
    }

    /**
     * Sets the ClientID for OAuth
     *
     * @param string ClientID for OAuth
     *
     * @return void
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * Gets the ClientID for OAuth
     *
     * @return string ClientID for OAuth
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Sets the Client Secret for OAuth
     *
     * @param string Client Secret for OAuth
     *
     * @return void
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * Gets the Client Secret for OAuth
     *
     * @return string Client Secret for OAuth
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Sets the Access Token
     *
     * @param string OAuth Access Token
     *
     * @return void
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Gets the OAuth Access Token
     *
     * @return string OAuth Access Token
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the OAuth Refresh Token
     *
     * @param string OAuth Refresh Token
     *
     * @return void
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * Gets the OAuth Refresh Token
     *
     * @return string OAuth Refresh Token
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }
	
    /**
     * Sets the Method for HTTP basic connection
     *
     * @param string $Method Password for HTTP basic connection
     *
     * @return void
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Gets the method for HTTP basic connection
     *
     * @return string method for HTTP basic connection
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return void
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the HTTP Proxy Host
     *
     * @param string $proxyHost HTTP Proxy URL
     *
     * @return void
     */
    public function setCurlProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
    }

    /**
     * Gets the HTTP Proxy Host
     *
     * @return string
     */
    public function getCurlProxyHost()
    {
        return $this->proxyHost;
    }

    /**
     * Sets the HTTP Proxy Port
     *
     * @param integer $proxyPort HTTP Proxy Port
     *
     * @return void
     */
    public function setCurlProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
    }

    /**
     * Gets the HTTP Proxy Port
     *
     * @return integer
     */
    public function getCurlProxyPort()
    {
        return $this->proxyPort;
    }

    /**
     * Sets the logging configuration
     *
     * @param LogConfiguration $logConfig Logging Configuration
     *
     * @return void
     */
    public function setLogConfiguration($logConfig)
    {
        $this->logConfig = $logConfig;
    }

    /**
     * Gets the logging configuration
     *
     * @return LogConfiguration
     */
    public function getLogConfiguration()
    {
        return $this->logConfig;
    }

    /**
     * Gets the default MerchantConfiguration instance
     *
     * @return MerchantConfiguration
     */
    public static function getDefaultMerchantConfiguration()
    {
        if (self::$defaultMerchantConfiguration === null) {
            self::$defaultMerchantConfiguration = new MerchantConfiguration();
        }

        return self::$defaultMerchantConfiguration;
    }

    /**
     * Sets the detault MerchantConfiguration instance
     *
     * @param MerchantConfiguration $config An instance of the MerchantConfiguration Object
     *
     * @return void
     */
    public static function setDefaultMerchantConfiguration(MerchantConfiguration $config)
    {
        self::$defaultMerchantConfiguration = $config;
    }

    /**
     * @return string
     */
    public function getJwePEMFileDirectory()
    {
        return $this->jwePEMFileDirectory;
    }

    /**
     * @param string $jwePEMFileDirectory
     */
    public function setJwePEMFileDirectory(string $jwePEMFileDirectory)
    {
        $this->jwePEMFileDirectory = $jwePEMFileDirectory;
    }

    /**
     * Get the value of enableRequestMLEForOptionalApisGlobally
     *
     * @return bool
     */
    public function getEnableRequestMLEForOptionalApisGlobally()
    {
        return $this->enableRequestMLEForOptionalApisGlobally;
    }


    /**
     * Set the value of useMLEGlobally
     *
     * @param bool $useMLEGlobally
     */
    public function setUseMLEGlobally($useMLEGlobally)
    {   
        $this->useMLEGlobally = (bool)$useMLEGlobally;
        // If useMLEGlobally is true, enableRequestMLEForOptionalApisGlobally should also be true
        if (
            isset($this->useMLEGlobally) && isset($this->enableRequestMLEForOptionalApisGlobally)
            && ($this->useMLEGlobally !== $this->enableRequestMLEForOptionalApisGlobally)
        ) {
            $error_message = "useMLEGlobally and enableRequestMLEForOptionalApisGlobally must have the same value if both are set.";
            $exception = new AuthException($error_message, 0);
            self::$logger->error($error_message);
            throw $exception;
        }
        if ($this->useMLEGlobally) {
            $this->enableRequestMLEForOptionalApisGlobally = true;
        }
    }

    public function setEnableRequestMLEForOptionalApisGlobally($enableRequestMLEForOptionalApisGlobally)
    {
        $this->enableRequestMLEForOptionalApisGlobally = (bool)$enableRequestMLEForOptionalApisGlobally || (bool)$this->useMLEGlobally;
    }

    /**
     * Get the value of disableRequestMLEForMandatoryApisGlobally
     *
     * @return bool
     */
    public function getDisableRequestMLEForMandatoryApisGlobally()
    {
        return $this->disableRequestMLEForMandatoryApisGlobally;
    }

    /**
     * Set the value of disableRequestMLEForMandatoryApisGlobally
     *
     * @param bool $value
     */
    public function setDisableRequestMLEForMandatoryApisGlobally($disableRequestMLEForMandatoryApisGlobally)
    {
        $this->disableRequestMLEForMandatoryApisGlobally = (bool)$disableRequestMLEForMandatoryApisGlobally;
    }

    /**
     * Get the value of mapToControlMLEonAPI (raw user-supplied)
     *
     * @return array<string,string|bool>
     */
    public function getMapToControlMLEonAPI()
    {
        return $this->mapToControlMLEonAPI;
    }

    /**
     * Set the value of mapToControlMLEonAPI.
     * Accepts associative array or stdClass whose values are string|bool.
     *
     * Parsing to internal request/response maps happens immediately.
     *
     * @param array<string,string|bool>|object $mapToControlMLEonAPI
     * @return void
     */
    public function setMapToControlMLEonAPI($mapToControlMLEonAPI)
    {
        if ($mapToControlMLEonAPI === null) {
            return;
        }

        // Allow stdClass (from json_decode without assoc)
        if (is_object($mapToControlMLEonAPI)) { ////
            $mapToControlMLEonAPI = get_object_vars($mapToControlMLEonAPI);
        }

        if (!is_array($mapToControlMLEonAPI)) {
            throw new InvalidArgumentException("mapToControlMLEonAPI must be an associative array or object.");
        }

        foreach ($mapToControlMLEonAPI as $k => $v) {///
            if (!is_string($k)) {
                throw new InvalidArgumentException("mapToControlMLEonAPI keys must be strings.");
            }
            if (!is_string($v) && !is_bool($v)) {
                throw new InvalidArgumentException("mapToControlMLEonAPI values must be string or bool.");
            }
        }

        $this->mapToControlMLEonAPI = $mapToControlMLEonAPI;
        $this->parseMapToControlMLEonAPI(); // build internal maps
    }

    /**
     * Internal helper: canonical boolean token?
     * @param string $v
     * @return bool
     */
    private function isBooleanToken($v)///
    {
        return $v === 'true' || $v === 'false';
    }

    /**
     * Parse one raw entry into request/response booleans.
     *
     * @param string|bool $raw
     * @param bool $defaultRequest
     * @param bool $defaultResponse
     * @return array{0:bool,1:bool}
     */
    private function parseMleEntry($raw, $defaultRequest, $defaultResponse) ////
    {
        // Direct boolean -> request only
        if (is_bool($raw)) {
            return [$raw, $defaultResponse];
        }

        $raw = trim((string)$raw);

        // Plain string true/false (request only)
        if ($this->isBooleanToken($raw)) {
            return [$raw === 'true', $defaultResponse];
        }

        // Pattern with '::'
        if (strpos($raw, '::') !== false) {
            $parts = explode('::', $raw);
            if (count($parts) !== 2) {
                // Invalid pattern -> defaults
                if (self::$logger) {
                    self::$logger->warning("Invalid MLE map value '$raw' (too many separators). Using defaults.");
                }
                return [$defaultRequest, $defaultResponse];
            }
            $reqPart = trim($parts[0]);
            $respPart = trim($parts[1]);

            $reqFlag = $defaultRequest;
            $respFlag = $defaultResponse;

            if ($reqPart !== '') {
                if ($this->isBooleanToken($reqPart)) {
                    $reqFlag = ($reqPart === 'true');
                } else {
                    if (self::$logger) {
                        self::$logger->warning("Invalid request MLE token '$reqPart' in '$raw'. Using default.");
                    }
                }
            }
            if ($respPart !== '') {
                if ($this->isBooleanToken($respPart)) {
                    $respFlag = ($respPart === 'true');
                } else {
                    if (self::$logger) {
                        self::$logger->warning("Invalid response MLE token '$respPart' in '$raw'. Using default.");
                    }
                }
            }

            return [$reqFlag, $respFlag];
        }

        // Unrecognized format -> defaults
        if (self::$logger) {
            self::$logger->warning("Unrecognized MLE map value '$raw'. Using defaults.");
        }
        return [$defaultRequest, $defaultResponse];
    }

    /**
     * Build internal request/response MLE control maps from raw map.
     *
     * @return void
     */
    private function parseMapToControlMLEonAPI() /////////
    {
        $this->internalMapToControlRequestMLEonAPI = [];
        $this->internalMapToControlResponseMLEonAPI = [];

        $defaultRequest = (bool)$this->enableRequestMLEForOptionalApisGlobally;
        $defaultResponse = (bool)$this->enableResponseMleGlobally;

        foreach ($this->mapToControlMLEonAPI as $apiFunc => $rawVal) {
            list($reqFlag, $respFlag) = $this->parseMleEntry($rawVal, $defaultRequest, $defaultResponse);
            $this->internalMapToControlRequestMLEonAPI[$apiFunc] = $reqFlag;
            $this->internalMapToControlResponseMLEonAPI[$apiFunc] = $respFlag;
        }
    }

    /**
     * (Optional) expose parsed request MLE map.
     * @return array<string,bool>
     */
    public function getInternalMapToControlRequestMLEonAPI()
    {
        return $this->internalMapToControlRequestMLEonAPI;
    }

    /**
     * (Optional) expose parsed response MLE map.
     * @return array<string,bool>
     */
    public function getInternalMapToControlResponseMLEonAPI()
    {
        return $this->internalMapToControlResponseMLEonAPI;
    }

    /**
     * Set the value of mleForRequestPublicCertPath
     *
     * @param string $mleForRequestPublicCertPath
     */
    public function setMleForRequestPublicCertPath($mleForRequestPublicCertPath)
    {
        $this->mleForRequestPublicCertPath = $mleForRequestPublicCertPath;
    }
    /**
     * Get the value of mleForRequestPublicCertPath
     *
     * @return string
     */
    public function getMleForRequestPublicCertPath()
    {
        return $this->mleForRequestPublicCertPath;
    }

    /**
     * Set enableResponseMleGlobally
     *
     * @param bool $enableResponseMleGlobally
     * @return void
     */
    public function setEnableResponseMleGlobally($enableResponseMleGlobally)
    {
        $this->enableResponseMleGlobally = (bool)$enableResponseMleGlobally;
    }

    /**
     * Get enableResponseMleGlobally
     *
     * @return bool
     */
    public function getEnableResponseMleGlobally()
    {
        return $this->enableResponseMleGlobally;
    }

    /**
     * Set responseMleKID
     *
     * @param string $responseMleKID
     * @return void
     */
    public function setResponseMleKID($responseMleKID)
    {
        $this->responseMleKID = is_string($responseMleKID) ? trim($responseMleKID) : '';
    }

    /**
     * Get responseMleKID
     *
     * @return string
     */
    public function getResponseMleKID()
    {
        return $this->responseMleKID;
    }

    /**
     * Set responseMlePrivateKeyFilePath
     *
     * @param string $responseMlePrivateKeyFilePath
     * @return void
     */
    public function setResponseMlePrivateKeyFilePath($responseMlePrivateKeyFilePath)
    {
        $this->responseMlePrivateKeyFilePath = is_string($responseMlePrivateKeyFilePath) ? trim($responseMlePrivateKeyFilePath) : '';
    }

    /**
     * Get responseMlePrivateKeyFilePath
     *
     * @return string
     */
    public function getResponseMlePrivateKeyFilePath()
    {
        return $this->responseMlePrivateKeyFilePath;
    }

    public function setResponseMlePrivateKey($responseMlePrivateKey)
    {
        if (is_object($responseMlePrivateKey) && get_class($responseMlePrivateKey) === 'OpenSSLAsymmetricKey') {
            $this->responseMlePrivateKey = $responseMlePrivateKey;
        } else {
            throw new \InvalidArgumentException("responseMlePrivateKey must be OpenSSLAsymmetricKey");
        } 
    }

    public function getResponseMlePrivateKey()
    {
        return $this->responseMlePrivateKey;
    }

    public function setResponseMlePrivateKeyFilePassword($responseMlePrivateKeyFilePassword)
    {
        $this->responseMlePrivateKeyFilePassword = is_string($responseMlePrivateKeyFilePassword) ? $responseMlePrivateKeyFilePassword : '';
    }

    public function getResponseMlePrivateKeyFilePassword()
    {
        return $this->responseMlePrivateKeyFilePassword;
    }
    
    private function isAssocArrayOfStringBool($array) {
        foreach ($array as $key => $value) {
            if (!is_string($key) || !is_bool($value)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the value of mleKeyAlias (legacy)
     * @deprecated Use getRequestMleKeyAlias()
     * @return string
     */
    public function getMleKeyAlias()
    {
        return $this->mleKeyAlias;
    }

    /**
     * Get requestMleKeyAlias (authoritative in codebase).
     * Fallback order:
     *   1. requestMleKeyAlias if non-empty
     *   2. mleKeyAlias (legacy) if non-empty
     *   3. assign default to requestMleKeyAlias and return it
     *
     * @return string
     */
    public function getRequestMleKeyAlias()
    {
        // if (isset($this->requestMleKeyAlias) && trim($this->requestMleKeyAlias) !== '') {
        //     return $this->requestMleKeyAlias;
        // }
        // if (isset($this->mleKeyAlias) && trim($this->mleKeyAlias) !== '') {
        //     return $this->mleKeyAlias;
        // }
        // Neither provided; set default only for requestMleKeyAlias
        return $this->requestMleKeyAlias;
    }

    /**
     * Set requestMleKeyAlias.
     * If legacy mleKeyAlias already set with a different value -> error. //to do
     *
     * Empty/blank input is treated as "not set" (kept empty for fallback/default logic).
     *
     * @param string $requestMleKeyAlias
     * @return $this
     */
    public function setRequestMleKeyAlias($requestMleKeyAlias)
    {
        // $alias = trim((string)$requestMleKeyAlias);

        // if ($alias === '') {
        //     // Leave empty; fallback will occur in getter
        //     $this->requestMleKeyAlias = '';
        //     return $this;
        // }

        // if (isset($this->mleKeyAlias) && trim($this->mleKeyAlias) !== '' && $this->mleKeyAlias !== $alias) {
        //     $msg = "mleKeyAlias and requestMleKeyAlias must be the same value when both are set.";
        //     if (self::$logger) { self::$logger->error($msg); }
        //     throw new \InvalidArgumentException($msg);
        // }
        $alias = trim((string) $requestMleKeyAlias);

        if ($alias !== '') {
            $this->requestMleKeyAlias = $alias;
        }
        return $this;

        // // 2. Else if legacy mleKeyAlias set, promote it to requestMleKeyAlias
        // if (isset($this->mleKeyAlias) && trim($this->mleKeyAlias) !== '') {
        //     $this->requestMleKeyAlias = trim($this->mleKeyAlias);
        //     return $this;
        // }

        // // 3. Else assign default constant
        // $this->requestMleKeyAlias = GlobalParameter::DEFAULT_MLE_ALIAS_FOR_CERT;
        // return $this;
    }

    /**
     * Legacy setter for mleKeyAlias.
     * If requestMleKeyAlias already set with a different value -> error. //to do
     *
     * Empty/blank input is treated as "not set".
     *
     * @param string $mleKeyAlias
     * @return $this
     */
    public function setMleKeyAlias($mleKeyAlias)
    {
        $alias = trim((string)$mleKeyAlias);
        if ($alias === '') {
            return $this;
        }

        // if ($alias === '') {
        //     $this->mleKeyAlias = '';
        //     return $this;
        // }

        // if (isset($this->requestMleKeyAlias) && trim($this->requestMleKeyAlias) !== '' && $this->requestMleKeyAlias !== $alias) {
        //     $msg = "mleKeyAlias and requestMleKeyAlias must be the same value when both are set.";
        //     if (self::$logger) { self::$logger->error($msg); }
        //     throw new \InvalidArgumentException($msg);
        // }
        if (
            $this->mleKeyAlias === GlobalParameter::DEFAULT_MLE_ALIAS_FOR_CERT
            || $this->mleKeyAlias === ''
            || $this->mleKeyAlias === null
        ) {
            $this->mleKeyAlias = $alias;
        }
        if (
            $this->requestMleKeyAlias === GlobalParameter::DEFAULT_MLE_ALIAS_FOR_CERT
            || $this->requestMleKeyAlias === ''
            || $this->requestMleKeyAlias === null
        ) {
            $this->requestMleKeyAlias = $alias;
        }
        return $this;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (CyberSource) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 2.0.0' . PHP_EOL;

        return $report;
    }

    /**
     * Gets the essential information for External Configuration
     *
     * @return string The report for External config
     */
    public static function setMerchantCredentials($connectionDet)
    {
        $warning_message =""; $error_message ="";
        $config = new MerchantConfiguration();

        if(isset($connectionDet->authenticationType))
            $config = $config->setAuthenticationType(strtoupper(trim($connectionDet->authenticationType ?? '')));
        else
            $error_message .= GlobalParameter::AUTHTYPE;

        if(isset($connectionDet->merchantID))
            $config = $config->setMerchantID($connectionDet->merchantID);
        else
            $error_message .= GlobalParameter::MERCID;
            
        if(isset($connectionDet->merchantKeyId))
            $config = $config->setApiKeyID($connectionDet->merchantKeyId);
        else
            $error_message .= GlobalParameter::MERCKEYID;

        if(isset($connectionDet->merchantsecretKey))
            $config = $config->setSecretKey($connectionDet->merchantsecretKey);
        else
            $error_message .= GlobalParameter::MERCSECKEY;

        if(isset($connectionDet->keyAlias))
            $config = $config->setKeyAlias($connectionDet->keyAlias);
        else
            $warning_message .= GlobalParameter::KEYALIASFIELD;

        if(isset($connectionDet->keyFilename))
            $config = $config->setKeyFileName($connectionDet->keyFilename);
        else
            $warning_message .= GlobalParameter::KEYFILEFIELD;

        if(isset($connectionDet->keyPass))
            $config = $config->setKeyPassword($connectionDet->keyPass);
        else
            $warning_message .= GlobalParameter::KEYPWDFIELD;

        if(isset($connectionDet->useMetaKey))
            $config = $config->setUseMetaKey($connectionDet->useMetaKey);
        else
            $warning_message .= GlobalParameter::USE_METAKEY_EMPTY;

        if(isset($connectionDet->portfolioID))
            $config = $config->setPortfolioID($connectionDet->portfolioID);
        else
            $warning_message .= GlobalParameter::PORTFOLIO_ID_EMPTY;

        if(isset($connectionDet->enableClientCert))
            $config = $config->setEnableClientCert($connectionDet->enableClientCert);
        else
            $warning_message .= GlobalParameter::ENABLE_CLIENT_CERT_EMPTY;

        if(isset($connectionDet->clientCertDirectory))
            $config = $config->setClientCertDirectory($connectionDet->clientCertDirectory);

        if(isset($connectionDet->clientCertFile))
            $config = $config->setClientCertFile($connectionDet->clientCertFile);

        if(isset($connectionDet->clientCertPassword))
            $config = $config->setClientCertPassword($connectionDet->clientCertPassword);

        if(isset($connectionDet->clientId))
            $config = $config->setClientId($connectionDet->clientId);

        if(isset($connectionDet->clientSecret))
            $config = $config->setClientSecret($connectionDet->clientSecret);

        if(isset($connectionDet->keysDirectory))
            $config = $config->setKeysDirectory($connectionDet->keysDirectory);
        else
            $warning_message .= GlobalParameter::KEYDIRFIELD;

        if(isset($connectionDet->runEnvironment))
            $config = $config->setRunEnvironment($connectionDet->runEnvironment);
        else
            $error_message .= GlobalParameter::RUNENVFIELD;

        if(isset($connectionDet->solutionId))
            $config = $config->setSolutionId($connectionDet->solutionId);

        if (isset($connectionDet->jwePEMFileDirectory)) {
            $config = $config->setJwePEMFileDirectory($connectionDet->jwePEMFileDirectory);
        }
        
        if (isset($connectionDet->useMLEGlobally) || isset($connectionDet->enableRequestMLEForOptionalApisGlobally)) {
            $useMLE = isset($connectionDet->useMLEGlobally) ? $connectionDet->useMLEGlobally : null;
            $enableMLE = isset($connectionDet->enableRequestMLEForOptionalApisGlobally) ? $connectionDet->enableRequestMLEForOptionalApisGlobally : null;
        
            // If both are set, they must be equal
            if ($useMLE !== null && $enableMLE !== null && $useMLE !== $enableMLE) {
                throw new InvalidArgumentException(
                    "useMLEGlobally and enableRequestMLEForOptionalApisGlobally must have the same value if both are set."
                );
            }
        
            $finalMLE = $enableMLE || $useMLE;
            $config = $config->setEnableRequestMLEForOptionalApisGlobally($finalMLE);
            $config = $config->setUseMLEGlobally($finalMLE);
        }

        if (isset($connectionDet->mapToControlMLEonAPI)) {
            $config = $config->setMapToControlMLEonAPI($connectionDet->mapToControlMLEonAPI);
        }

        if (isset($connectionDet->mleForRequestPublicCertPath)) {
            $config = $config->setMleForRequestPublicCertPath($connectionDet->mleForRequestPublicCertPath);
        }

        // Prefer new field; fall back to legacy mleKeyAlias for backward compatibility.
        $rawAlias = null;
        if (isset($connectionDet->requestMleKeyAlias) && trim((string) $connectionDet->requestMleKeyAlias) !== '') {
            $rawAlias = $connectionDet->requestMleKeyAlias;
        } elseif (isset($connectionDet->mleKeyAlias) && trim((string) $connectionDet->mleKeyAlias) !== '') {
            $rawAlias = $connectionDet->mleKeyAlias;
            $config = $config->setMleKeyAlias($rawAlias); // keep legacy field in sync
        }
        if ($rawAlias !== null) {
            $config=$config->setRequestMleKeyAlias($rawAlias);
        }

        // Response MLE (outbound) new fields
        if (isset($connectionDet->enableResponseMleGlobally)) {
            $config = $config->setEnableResponseMleGlobally($connectionDet->enableResponseMleGlobally);
        }
        if (isset($connectionDet->responseMleKID)) {
            $config = $config->setResponseMleKID($connectionDet->responseMleKID);
        }
        if (isset($connectionDet->responseMlePrivateKeyFilePath)) {
            $config = $config->setResponseMlePrivateKeyFilePath($connectionDet->responseMlePrivateKeyFilePath);
        }
        if (isset($connectionDet->responseMlePrivateKeyFilePassword)) {
            $config = $config->setResponseMlePrivateKeyFilePassword($connectionDet->responseMlePrivateKeyFilePassword);
        }
        // if (isset($connectionDet->responseMlePrivateKey)) {
        //     $config = $config->setResponseMlePrivateKey($connectionDet->responseMlePrivateKey);
        // }

        $config->validateMerchantData();
        if($error_message != null){
            $error_message = GlobalParameter::NOT_ENTERED. $error_message;
            $exception = new AuthException($error_message, 0);
        }
        if($warning_message != null){
            $warning_message = GlobalParameter::NOT_ENTERED. $warning_message;
            trigger_error($warning_message, E_USER_WARNING);
            return $config;
        }
        return $config;
    }

    public function validateMerchantData()
    {
        $error_message = "";
        $warning_message = "";

        if(empty($this->getAuthenticationType())){
            $error_message .= GlobalParameter::AUTHENTICATION_REQ . PHP_EOL;
        }

        if(empty($this->getRunEnvironment())){
            $error_message .= GlobalParameter::RUNENV_REQ . PHP_EOL;
        }

        $logConfig = $this->getLogConfiguration();
        if(!is_bool($logConfig->getEnableLogging())){
            $warning_message .= GlobalParameter::REFER_LOG . PHP_EOL;
        }
        
        if ($logConfig->isLoggingEnabled()) {
            if (empty($logConfig->getDebugLogFile())) {
                $warning_message .= GlobalParameter::DEBUG_LOG_FILE_NULL . GlobalParameter::DEFAULT_DEBUG_LOG_FILE . PHP_EOL;
                $logConfig->setDebugLogFile(GlobalParameter::DEFAULT_DEBUG_LOG_FILE);
            }
            
            if (empty($logConfig->getErrorLogFile())) {
                $warning_message .= GlobalParameter::ERROR_LOG_FILE_NULL . GlobalParameter::DEFAULT_ERROR_LOG_FILE . PHP_EOL;
                $logConfig->setErrorLogFile(GlobalParameter::DEFAULT_ERROR_LOG_FILE);
            }
            
            if (empty($logConfig->getLogDateFormat())) {
                $logConfig->setLogDateFormat(GlobalParameter::DEFAULT_LOG_DATE_FORMAT);
            }
            
            if (empty($logConfig->getLogFormat())) {
                $logConfig->setLogFormat(GlobalParameter::DEFAULT_LOG_FORMAT);
            }
            
            if ($logConfig->getLogMaxFiles() == 0) {
                $logConfig->setLogMaxFiles(GlobalParameter::DEFAULT_LOG_MAX_FILES);
            }
            
            if (empty($logConfig->getLogLevel())) {
                $logConfig->setLogLevel(GlobalParameter::DEFAULT_LOG_LEVEL);
            }

            $this->setLogConfiguration($logConfig);
        }

        if(empty($this->getMerchantID()) && $this->getAuthenticationType() == GlobalParameter::JWT){
            $error_message .= GlobalParameter::MERCHANTID_REQ . PHP_EOL;
        }

        if(empty($this->getKeyAlias()) && $this->getAuthenticationType() == GlobalParameter::JWT){
            $warning_message .= GlobalParameter::KEY_ALIAS_NULL_EMPTY . PHP_EOL;
        }

        if(empty($this->getKeyFileName()) && $this->getAuthenticationType() == GlobalParameter::JWT){
            $warning_message .= GlobalParameter::KEY_FILE_NULL_EMPTY . PHP_EOL;
        }

        if(empty($this->getKeyPassword()) && $this->getAuthenticationType() == GlobalParameter::JWT){
            $error_message .= GlobalParameter::KEY_PASSWORD_EMPTY . PHP_EOL;
        }
        
        if(empty($this->getKeysDirectory()) && $this->getAuthenticationType() == GlobalParameter::JWT){
            $warning_message .= GlobalParameter::KEY_DIRECTORY_EMPTY . PHP_EOL;
        }

        if(empty($this->getMerchantID()) && $this->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE){
            $error_message .= GlobalParameter::MERCHANTID_REQ . PHP_EOL;
        }

        if(empty($this->getApiKeyID()) && $this->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE ){
            $error_message .= GlobalParameter::MERCHANT_KEY_ID_REQ . PHP_EOL;
        }

        if(empty($this->getSecretKey()) && $this->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE ){
            $error_message .= GlobalParameter::MERCHANT_SECRET_KEY_REQ . PHP_EOL;
        }

        if(is_bool($this->getUseMetaKey()) && $this->getUseMetaKey() && empty($this->getPortfolioID())){
            $error_message .= GlobalParameter::PORTFOLIO_ID_REQ . PHP_EOL;
        }
		
        if(is_bool($this->isEnableClientCert()) && $this->isEnableClientCert())
        { 
            if(empty($this->getClientCertDirectory()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_DIR_REQ . PHP_EOL;
            }
            if(empty($this->getClientCertFile()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_FILE_REQ . PHP_EOL;
            }
            if(empty($this->getClientCertPassword()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_PASSWORD_REQ . PHP_EOL;
            }
        }

        if($this->getAuthenticationType() == GlobalParameter::MUTUAL_AUTH)
        {
            if(empty($this->getClientId()))
            {
                $error_message .= GlobalParameter::CLIENT_ID_REQ . PHP_EOL;
            }
            if(empty($this->getClientSecret()))
            {
                $error_message .= GlobalParameter::CLIENT_SECRET_REQ . PHP_EOL;
            }
        }

        if($this->getAuthenticationType() == GlobalParameter::OAUTH)
        {
            if(empty($this->getAccessToken()))
            {
                $error_message .= GlobalParameter::ACCESS_TOKEN_REQ . PHP_EOL;
            }
            if(empty($this->getRefreshToken()))
            {
                $error_message .= GlobalParameter::REFRESH_TOKEN_REQ . PHP_EOL;
            }
        }
		
        self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $this->getLogConfiguration());
        self::$logger->info(GlobalParameter::LOG_START_MSG);
        $logConfig = $this->getLogConfiguration();
        $configurationData = array(
                                    GlobalParameter::AUTHTYPE => $this->getAuthenticationType(),
                                    GlobalParameter::ENBLOGFIELD => $logConfig->getEnableLogging(),
                                    GlobalParameter::DEBUGLOGFILEPATH => $logConfig->getDebugLogFile(),
                                    GlobalParameter::ERRORLOGFILEPATH => $logConfig->getErrorLogFile(),
                                    GlobalParameter::RUNENVFIELD => $this->getRunEnvironment()
                                );

        $output = \CyberSource\Utilities\Helpers\ListHelper::toString($configurationData);

        self::$logger->info("CONFIGURATION INFORMATION :\n" . $output);
		
        if(!empty($error_message)){
            $exception = new AuthException($error_message, 0);
            self::$logger->error($error_message);
            throw $exception;
        }

        $this->validateMLEConfiguration();

        if(!empty($warning_message)){
            self::$logger->warning($warning_message); 
        }

        self::$logger->close();
    }

    private function validateMLEConfiguration(){
        // Re-parse in case global flags changed since last parse
        $this->parseMapToControlMLEonAPI();////

        /*
         * REQUEST MLE VALIDATION
         */
        $requestMleConfigured = (bool)$this->enableRequestMLEForOptionalApisGlobally;
        foreach ($this->internalMapToControlRequestMLEonAPI as $flag) {
            if ($flag) { $requestMleConfigured = true; break; }
        }

        if ($requestMleConfigured && strcasecmp($this->authenticationType, GlobalParameter::JWT) !== 0) {
            $error_message = GlobalParameter::REQUEST_MLE_AUTH_ERROR;
            $exception = new AuthException($error_message, 0);
            self::$logger->error($error_message);
            throw $exception;
        }

        if (isset($this->mleForRequestPublicCertPath)) {
            $certPath = $this->mleForRequestPublicCertPath;
            
            // Validate the MLE certificate path
            if (!file_exists($certPath) || !is_readable($certPath) || !is_file($certPath)) {
                $error_message = "MLE request public certificate file not found or not readable at " . $certPath;
                $exception = new AuthException($error_message, 0);
                self::$logger->error($error_message);
                throw $exception;
            }
        }

        /*
         * RESPONSE (OUTBOUND) MLE VALIDATION
         * Trigger if global flag OR any per-API response flag is true.
         */
        $responseMleConfigured = (bool)$this->enableResponseMleGlobally; ////
        foreach ($this->internalMapToControlResponseMLEonAPI as $flag) {
            if ($flag) { $responseMleConfigured = true; break; }
        }

        if ($responseMleConfigured) {
            if (strcasecmp($this->authenticationType, GlobalParameter::JWT) !== 0) {
                $error_message = "Response MLE is only supported for JWT authentication type.";
                $exception = new AuthException($error_message, 0);
                self::$logger->error($error_message);
                throw $exception;
            }

            $hasFilePath = !empty($this->responseMlePrivateKeyFilePath);
            // $hasInMemoryKey = !empty($this->responseMlePrivateKey);

            // if (!$hasFilePath && !$hasInMemoryKey) {
            //     $error_message = "Response MLE enabled but neither responseMlePrivateKeyFilePath nor responseMlePrivateKey provided. Provide exactly one.";
            //     $exception = new AuthException($error_message, 0);
            //     self::$logger->error($error_message);
            //     throw $exception;
            // }

            // if ($hasFilePath && $hasInMemoryKey) {
            //     $error_message = "Both responseMlePrivateKeyFilePath and responseMlePrivateKey supplied. Provide only one.";
            //     $exception = new AuthException($error_message, 0);
            //     self::$logger->error($error_message);
            //     throw $exception;
            // }

            if ($hasFilePath) {
                if (
                    !file_exists($this->responseMlePrivateKeyFilePath) ||
                    !is_readable($this->responseMlePrivateKeyFilePath) ||
                    !is_file($this->responseMlePrivateKeyFilePath)
                ) {
                    $error_message = "Response MLE private key file not found or not readable at " . $this->responseMlePrivateKeyFilePath;
                    $exception = new AuthException($error_message, 0);
                    self::$logger->error($error_message);
                    throw $exception;
                }
            }
                // Password (if any) is optional; no strict validation here.
            // } else {
            //     // Basic sanity check for in-memory key: must contain typical PEM header or be non-trivial length.
            //     if (strlen($this->responseMlePrivateKey) < 32) {
            //         $error_message = "responseMlePrivateKey appears invalid (too short).";
            //         $exception = new AuthException($error_message, 0);
            //         self::$logger->error($error_message);
            //         throw $exception;
            //     }
            // }

            if (empty($this->responseMleKID)) {
                $error_message = "Response MLE enabled but responseMleKID not provided.";
                $exception = new AuthException($error_message, 0);
                self::$logger->error($error_message);
                throw $exception;
            }
        }
    }

}
?>
