<?php
/*
*Purpose: Merchant Config contains credentials and8 keys for Authentication and API Information
*/
namespace CyberSource\Authentication\Core;

use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;
use CyberSource\Logging\LogFactory as LogFactory;
use CyberSource\Logging\LogConfiguration as LogConfiguration;

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
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
        $this->logConfig = new LogConfiguration();

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $this->logConfig);
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
            $config = $config->setAuthenticationType(strtoupper(trim($connectionDet->authenticationType)));
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
            $warning_message .= GlobalParameter::KEY_PASSWORD_EMPTY . PHP_EOL;
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
		
        self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $this->getLogConfiguration());
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

        if(!empty($warning_message)){
            self::$logger->warning($warning_message); 
        }

        self::$logger->close();
    }
}
?>