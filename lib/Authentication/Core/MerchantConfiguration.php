<?php
/*
*Purpose: Merchant Config contains credentials and8 keys for Authentication and API Information
*/
namespace CyberSource\Authentication\Core;
use CyberSource\Authentication\Log\Logger as Logger;
use CyberSource\Authentication\Core\AuthException as AuthException;
use CyberSource\Authentication\Util\GlobalParameter as GlobalParameter;

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
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = true;

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $logSize = 0;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = '';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;
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
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();

        if(self::$logger === null){
            self::$logger = new Logger(MerchantConfiguration::class);
        }
    }

    

    /**
     * Sets the access token for OAuth
     *
     * @param string $authenticationType Token for OAuth
     *
     * @return $this
     */
    public function setAuthenticationType($authenticationType)
    {
        $this->authenticationType = $authenticationType;
        return $this;
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
     * @return $this
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
     * @return $this
     */
    public function setSolutionId($solutionId)
    {
        $this->solutionId = $solutionId;
        
        return $this;
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
     * @return $this
     */
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;
        return $this;
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
     * @return $this
     */
    public function setKeyAlias($keyAlias)
    {
        $this->keyAlias = $keyAlias;
        return $this;
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
     * @return $this
     */
    public function setKeyFileName($keyFilename)
    {
        $this->keyFilename = $keyFilename;
        return $this;
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
     * @return $this
     */
    public function setLogFileName($logFilename)
    {
        $this->logFilename = $logFilename;
        return $this;
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
     * @return $this
     */
    public function setKeysDirectory($keysDirectory)
    {
        $this->keysDirectory = $keysDirectory;
        return $this;
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
     * @return $this
     */
    public function setKeyPassword($password)
    {
        $this->password = $password;
        return $this;
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
     * @return $this
     */
    public function setApiKeyID($apiKeyID)
    {
        $this->apiKeyID = $apiKeyID;
        return $this;
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
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
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
     * @return $this
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
        return $this;
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
     * @return $this
     */
    public function setPortfolioID($portfolioID)
    {
        $this->portfolioID = $portfolioID;
        return $this;
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
        return $this;
    }

    /**
     * Gets the flag for Client Cert
     *
     * @return bool flag for Client Cert
     */
    public function getEnableClientCert()
    {
        return $this->enableClientCert;
    }

    /**
     * Sets the Directory for Client Cert
     *
     * @param string Directory for Client Cert
     *
     * @return $this
     */
    public function setClientCertDirectory($clientCertDirectory)
    {
        $this->clientCertDirectory = $clientCertDirectory;
        return $this;
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
     * @return $this
     */
    public function setClientCertFile($clientCertFile)
    {
        $this->clientCertFile = $clientCertFile;
        return $this;
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
     * @return $this
     */
    public function setClientCertPassword($clientCertPassword)
    {
        $this->clientCertPassword = $clientCertPassword;
        return $this;
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
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
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
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
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
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
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
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
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
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
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
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
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
     * @return $this
     */
    public function setCurlProxyHost($proxyHost)
    {
        $this->proxyHost = "$proxyHost";
        return $this;
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
     * @return $this
     */
    public function setCurlProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
        return $this;
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
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets logSize
     *
     * @param string $logSize 
     *
     * @return $this
     */
    public function setLogSize($logSize)
    {
        $this->logSize = $logSize;
        return $this;
    }

    /**
     * Gets the logSize 
     *
     * @return string
     */
    public function getLogSize()
    {
        return $this->logSize;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
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
        //var_dump($connectionDet);die;
        if(is_bool($connectionDet->enableLog)){
            $config = $config->setDebug($connectionDet->enableLog);
            
        }
        else if(empty($connectionDet->enableLog)){
            $config = $config->setDebug(true);
            $warning_message .= GlobalParameter::ENBLOGFIELD;
        }
        else{
            $config = $config->setDebug(false);
            $warning_message .= GlobalParameter::ENBLOGFIELD;
        }

        if(isset($connectionDet->logSize))
            $config = $config->setLogSize($connectionDet->logSize);
        else
            $warning_message .= GlobalParameter::LOGSIZE;

        if(isset($connectionDet->logDirectory))
            $config = $config->setDebugFile($connectionDet->logDirectory);
        else
            $warning_message .= GlobalParameter::LOGDIR;

        if(isset($connectionDet->logFilename))
            $config = $config->setLogFileName($connectionDet->logFilename);
        else
            $warning_message .= GlobalParameter::LOGFILENAME;

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
       
        $config->validateMerchantData($config);
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

    public function validateMerchantData($config)
    {
        $error_message = "";
        $warning_message = "";
        if(empty($config->getMerchantID())){

            $error_message .= GlobalParameter::MERCHANTID_REQ;
        }

        if(empty($config->getAuthenticationType())){
            $error_message .= GlobalParameter::AUTHENTICATION_REQ;
        }

        if(empty($config->getRunEnvironment())){
            $error_message .= GlobalParameter::RUNENV_REQ;
        }

        if(!is_bool($config->getDebug())){
            $warning_message .= GlobalParameter::REFER_LOG;
            
        }

        if($config->getDebug() == true && empty($config->getDebugFile()))
        {
            if(empty($config->getDebugFile())){
                $warning_message .= GlobalParameter::KEY_LOG_DIR_NULL.GlobalParameter::DEFAULT_LOG_DIR;
                $config = $config->setDebugFile(GlobalParameter::DEFAULT_LOG_DIR);
            }

            
        }else if($config->getDebug() == true && !empty($config->getDebugFile())){
            if(empty($config->getLogFileName())){
                $warning_message .= GlobalParameter::KEY_LOG_FILE_NULL.GlobalParameter::DEFAULT_LOG_FILE;
                $config = $config->setLogFileName(GlobalParameter::DEFAULT_LOG_FILE);
            }
            $path = $config->getDebugFile(). DIRECTORY_SEPARATOR .$config->getLogFileName();
             if(!file_exists($path)){
                $warning_message .= GlobalParameter::KEY_LOG_DIR_INVALID.GlobalParameter::DEFAULT_LOG_DIR;
                $config = $config->setDebugFile(GlobalParameter::DEFAULT_LOG_DIR);
             }
        }
        
        if($config->getDebug() == true && empty($config->getLogSize()))
        {

            if(empty($config->getLogSize())){
                $warning_message .= GlobalParameter::KEY_LOG_FILE_SIZE.GlobalParameter::DEFAULT_LOG_FILE_SIZE;
                $config = $config->setLogFileName(GlobalParameter::DEFAULT_LOG_FILE_SIZE);
            }
        }


        if(empty($config->getKeyAlias()) && $config->getAuthenticationType() == GlobalParameter::JWT){

            $warning_message .= GlobalParameter::KEY_ALIAS_NULL_EMPTY;
        }

        if(empty($config->getKeyFileName()) && $config->getAuthenticationType() == GlobalParameter::JWT){

            $warning_message .= GlobalParameter::KEY_FILE_NULL_EMPTY;
        }

        if(empty($config->getKeyPassword()) && $config->getAuthenticationType() == GlobalParameter::JWT){

            $warning_message .= GlobalParameter::KEY_PASSWORD_EMPTY;
        }
        if(empty($config->getKeysDirectory()) && $config->getAuthenticationType() == GlobalParameter::JWT){
            $warning_message .= GlobalParameter::KEY_DIRECTORY_EMPTY;
        }

        if(empty($config->getApiKeyID()) && $config->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE ){
            $error_message .= GlobalParameter::MERCHANT_KEY_ID_REQ;
        }

        if(empty($config->getSecretKey()) && $config->getAuthenticationType() == GlobalParameter::HTTP_SIGNATURE ){
            $error_message .= GlobalParameter::MERCHANT_SECRET_KEY_REQ;
        }

        if(is_bool($config->getUseMetaKey()) && $config->getUseMetaKey() && empty($config->getPortfolioID()))
        {
            $error_message .= GlobalParameter::PORTFOLIO_ID_REQ;
        }

        if(is_bool($config->getEnableClientCert()) && $config->getEnableClientCert())
        { 
            if(empty($config->getClientCertDirectory()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_DIR_REQ;
            }
            if(empty($config->getClientCertFile()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_FILE_REQ;
            }
            if(empty($config->getClientCertPassword()))
            {
                $error_message .= GlobalParameter::CLIENT_CERT_PASSWORD_REQ;
            }
        }

        if($config->getAuthenticationType() == GlobalParameter::MUTUAL_AUTH)
        {
            if(empty($config->getClientId()))
            {
                $error_message .= GlobalParameter::CLIENT_ID_REQ;
            }
            if(empty($config->getClientSecret()))
            {
                $error_message .= GlobalParameter::CLIENT_SECRET_REQ;
            }
        }

        if($config->getAuthenticationType() == GlobalParameter::OAUTH)
        {
            if(empty($config->getAccessToken()))
            {
                $error_message .= GlobalParameter::ACCESS_TOKEN_REQ;
            }
            if(empty($config->getRefreshToken()))
            {
                $error_message .= GlobalParameter::REFRESH_TOKEN_REQ;
            }
        }

        self::$logger->log($config, GlobalParameter::LOG_START_MSG);
        $printData = array(GlobalParameter::AUTHTYPE=>$config->getAuthenticationType(),GlobalParameter::ENBLOGFIELD=>$config->getDebug(), GlobalParameter::LOGDIR => $config->getDebugFile(), GlobalParameter::RUNENVFIELD=>$config->getRunEnvironment(), GlobalParameter::LOGSIZE=>$config->getLogSize(), GlobalParameter::PROXYPORTFIELD=>$config->getCurlProxyPort(), GlobalParameter::KEYFILEFIELDDIR=>$config->getKeysDirectory(), GlobalParameter::KEYFILEFIELD=>$config->getKeyFileName(), GlobalParameter::LOGFILENAME=>$config->getLogFileName());
        self::$logger->log($config, $printData);
        $messageAuthType = GlobalParameter::AUTHTYPE ."=>".$config->getAuthenticationType();
        self::$logger->log($config, $messageAuthType);
        if(!empty($error_message)){
            $exception = new AuthException($error_message, 0);
            self::$logger->log($config, $error_message);
            throw $exception;
        }
        if($warning_message != ""){
            trigger_error($warning_message, E_USER_WARNING);
            self::$logger->log($config, $warning_message); 
        }
        return $config;
        
    }


}

?>