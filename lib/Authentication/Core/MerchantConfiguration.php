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
        if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::RUNENVIRONMENT))
        {
            $this->host = GlobalParameter::SANDBOXURL;
            
        } 
        else if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::RUNPRODENVIRONMENT)) 
        {
           $this->host = GlobalParameter::PRODUCTIONURL;
        }
        else if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::BOARUNENVIRONMENT)) 
        {
           $this->host = GlobalParameter::BOASANDBOXURL;
        }
        else if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::BOARUNPRODENVIRONMENT)) 
        {
           $this->host = GlobalParameter::BOAPRODUCTIONURL;
        }
        else if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::IDCRUNENVIRONMENT)) 
        {
           $this->host = GlobalParameter::IDCSANDBOXURL;
        }
        else if(strtoupper($this->runEnvironment) == strtoupper(GlobalParameter::IDCRUNPRODENVIRONMENT)) 
        {
           $this->host = GlobalParameter::IDCPRODUCTIONURL;
        }
        else
        {
            $this->host =$this->runEnvironment;
        }
        return $this;
    }

    /**
     * Gets the run environment for connection api
     * @return string Access token for OAuth
     */
    public function getRunEnvironment()
    {
        return $this->runEnvironment;
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