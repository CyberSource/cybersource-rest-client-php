<?php
namespace CyberSource\Authentication\Util;

class GlobalParameter
{
	const POST = "POST";
	const GET = "GET";
	const PUT = "PUT";
	const DELETE = "DELETE";
	const PATCH = "PATCH";
	const HEAD = "HEAD";
	const OPTIONS = "OPTIONS";	
	const HTTP_SIGNATURE ="HTTP_SIGNATURE"; 
	const JWT ="JWT";
	const GMT ="GMT";
	const HMACSHA256 = "HmacSHA256"; 
	const DEFAULT_LOG_FILE = "Cybs.log";
	const DEFAULT_LOG_DIR = "Log"; 
	const DEFAULT_LOG_FILE_SIZE = "1048576";
	const DEFAULT_DEBUG_LOG_FILE = "./Log/debug.log";
	const DEFAULT_ERROR_LOG_FILE = "./Log/error.log";
	const DEFAULT_LOG_DATE_FORMAT = "Y-m-d\TH:i:s";
	const DEFAULT_LOG_FORMAT = "[%datetime%] [%level_name%] [%channel%] : %message%\n";
	const DEFAULT_LOG_MAX_FILES = 3;
	const DEFAULT_LOG_LEVEL = "info";
	const SHA256 = "sha256";
	const SHA256DIGEST = "SHA-256=";
	const POSTHTTPDIGEST = "Digest: SHA-256=";
	const PRODUCTIONURL = "api.cybersource.com";
	const SANDBOXURL = "apitest.cybersource.com";
	const RUNENVIRONMENT = "cyberSource.environment.SANDBOX";
	const RUNPRODENVIRONMENT = "cyberSource.environment.PRODUCTION";
	const BOAPRODUCTIONURL = "api.merchant-services.bankofamerica.com";
	const BOASANDBOXURL = "apitest.merchant-services.bankofamerica.com";
	const BOARUNENVIRONMENT = "bankofamerica.environment.SANDBOX";
	const BOARUNPRODENVIRONMENT = "bankofamerica.environment.PRODUCTION";
	const IDCPRODUCTIONURL = "api.in.cybersource.com";
	const IDCSANDBOXURL = "apitest.cybersource.com";
	const IDCRUNENVIRONMENT = "cybersource.in.environment.SANDBOX";
	const IDCRUNPRODENVIRONMENT = "cybersource.in.environment.PRODUCTION";
	const KEY_DIR_PATH_DEFAULT = "Resources/";
	const HTTPS_PREFIX = "https://"; 
	const SIGNATURE = "Signature:";
	const POSTALGOHEADER = "host date (request-target) digest v-c-merchant-id";
	const GETALGOHEADER = "host date (request-target) v-c-merchant-id";
	const RS256 = "RS256";
	const FILE_NOT_FOUND = "File not found, Re-Enter path/file name, Entered path/file name : ";
	const MISSING_REQUEST = "Request Not Found.";
	const MERCHANTCONFIGERR = "Merchant Configuration Object is empty!";
	const AUTH_ERROR = "Check Authentication Type (HTTP_Signature/JWT) in Cybs.json.\n";
	const KEY_LOG_FILE_NULL = "Log File name is Empty/Null, Default taking: ";
	const KEY_LOG_FILE_SIZE = "Log File SIZE is Empty/Null, Default taking: ";
	const KEY_LOG_DIR_NULL = "Log Directory is Empty/Null, Default taking: ";
	const KEY_LOG_DIR_INVALID = "Log Directory is Invalid, Default taking: ";
	const DEBUG_LOG_FILE_NULL = "Debug Log File path is null or empty. Defaulting to : ";
	const ERROR_LOG_FILE_NULL = "Error Log File path is null or empty. Defaulting to : ";
	const KEY_ALIAS_NULL_EMPTY = "KeyAlias Empty/Null. Assigining merchantID value\n";
	const KEY_ALIAS_INCORRECT = "KeyAlias is Incorrect. Assigining merchantID value\n";
	const KEY_FILE_NULL_EMPTY = "KeyFileName Empty/Null. Assigining merchantID value\n";
	const REQUEST_JSON_ERROR = "Request Json File missing. So, Static payload data have been taking from PayloadData.php";
	const KEY_FILE_INCORRECT = "KeyFileName/Directory is Incorrect! Unable to read the Certificate!\n";
	const REFER_LOG = "enableLogging is Invalid. Default value will be true.\n";
	const MERCHANTID_REQ = "MerchantID is mandatory\n";
	const NOT_ENTERED = "The Following Parameter is Missing in Cybs.json::";
	const INCORRECT_KEY_PASSWORD = "The Entered key_password is Incorrect\n";
	const JWT_TOKEN_FAILS = " Unable to generate JWT Token";
	const AUTHENTICATION_REQ = "AuthenticationType is Mandatory\n";
	const MERCHANT_KEY_ID_REQ = "Merchant ApikeyId is Mandatory\n";
	const PORTFOLIO_ID_REQ = "Portfolio ID is Mandatory\n";
	const PORTFOLIO_ID_EMPTY = "Portfolio ID is Empty\n";
	const USE_METAKEY_EMPTY = "UseMetaKey value is empty\n";
	const INVALID_PROXY_URL = "Proxy URL is Invalid! Assigining default proxy url: ";
	const INVALID_PROXY_PORT = "Proxy URL is Invalid! Assigining default proxy port: ";
	const DEFAULT_PROXY_URL = "userproxy.visa.com";
	const DEFAULT_PROXY_PORT = 443;

	const MERCHANT_SECRET_KEY_REQ = " MerchantSecretKey is Mandatory\n";
	const KEY_PASSWORD_EMPTY = "KeyPassword Empty/Null. Assigining merchantID value\n";
	const KEY_DIRECTORY_EMPTY = "KeysDirectory is Empty/Null. Using Default Path: Resources/ \n";
	const REQUEST_JSON_EMPTY = "RequestJsonPath not provided\n";
	const INPUTDIGESTERR = "Unable to access the Input Json file!\n";
	const INVALIDMETHOD = "Invalid Method name!\n";
	const INVALID_REQUEST_TYPE_METHOD="Entered Request Type should be GET / POST / PUT / DELETE / PATCH\n";
	const LOG_END_MSG = PHP_EOL."APPLICATION LOGGING END.".PHP_EOL;
	const LOG_START_MSG = "APPLICATION LOGGING START:" . PHP_EOL;
	const RUNENV_REQ = "RunEnvironment is mandatory!\n";
	const LOGDIR = "logDirectory ";
	const DEBUGLOGFILEPATH = "debugLogFile ";
	const ERRORLOGFILEPATH = "errorLogFile ";
	const LOGSIZE = "logSize ";
	const ENBLOGFIELD = "enableLogging ";
	const MERCID = "merchantID ";
	const MERCKEYID = "merchantKeyId ";
	const MERCSECKEY = "merchantSecretKey ";
	const RUNENVFIELD = "RunEnvironment ";
	const AUTHTYPE = "authenticationType ";
	const KEYALIASFIELD = "keyAlias ";
	const KEYPWDFIELD = "KeyPassword ";
	const KEYDIRFIELD = "keysDirectory ";
	const PROXYURLFIELD = "proxyUrl ";
	const PROXYPORTFIELD = "proxyPort "; 
	const KEYFILEFIELD = "KeyFilename ";
	const LOGFILENAME = "LogFilename ";
	const REQTYPE = "RequestType ";
	const KEYFILEFIELDDIR = "keysDirectory ";




}


?>