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
	const DEFAULT_LOG_DIR = "./Log/"; 
	const DEFAULT_LOG_FILE_SIZE = "1048576";
	const SHA256 = "sha256";
	const SHA256DIGEST = "SHA-256=";
	const POSTHTTPDIGEST = "Digest: SHA-256=";
	const PRODUCTIONURL = "api.cybersource.com";
	const SANDBOXURL = "apitest.cybersource.com";
	const RUNENVIRONMENT = "cyberSource.environment.SANDBOX";
	const RUNPRODENVIRONMENT = "cyberSource.environment.PRODUCTION";
	const KEY_DIR_PATH_DEFAULT = "./resource/";
	const HTTPS_PREFIX = "https://"; 
	const SIGNATURE = "Signature:";
	const POSTALGOHEADER = "host date (request-target) digest v-c-merchant-id";
	const GETALGOHEADER = "host date (request-target) v-c-merchant-id";
	const RS256 = "RS256";
	const FILE_NOT_FOUND = "[ERROR] : File not found, Re-Enter path/file name, Entered path/file name :: ";
	const MERCHANTCONFIGERR = "[ERROR] : Merchant Configuration Object is empty!";
	const AUTH_ERROR = "[ERROR] : Check Authentication Type (HTTP_Signature/JWT) in Cybs.json.\n";
	const KEY_LOG_FILE_NULL = "Log File name is Empty/Null, Default taking: ";
	const KEY_LOG_FILE_SIZE = "Log File SIZE is Empty/Null, Default taking: ";
	const KEY_LOG_DIR_NULL = "Log Directory is Empty/Null, Default taking: ";
	const KEY_LOG_DIR_INVALID = "Log Directory is Invalid, Default taking: ";
	const KEY_ALIAS_NULL_EMPTY = "KeyAlias Empty/Null. Assigining merchantID value\n";
	const KEY_ALIAS_INCORRECT = "KeyAlias is Incorrect. Assigining merchantID value\n";
	const KEY_FILE_NULL_EMPTY = "KeyFileName Empty/Null. Assigining merchantID value\n";
	const REQUEST_JSON_ERROR = "[ERROR] : Request Json File missing. So, Static payload data have been taking from PayloadData.php";
	const KEY_FILE_INCORRECT = "[ERROR] : KeyFileName/Directory is Incorrect! Unable to read the Certificate!\n";
	const REFER_LOG = "EnableLog is Invalid. Default value will be true.\n";
	const MERCHANTID_REQ = "[ERROR] : MerchantID is mandatory\n";
	const NOT_ENTERED = "The Following Parameter is Missing in Cybs.json::";
	const INCORRECT_KEY_PASSWORD = "The Entered key_password is Incorrect\n";
	const JWT_TOKEN_FAILS = " [ERROR] : Unable to generate JWT Token";
	const AUTHENTICATION_REQ = "AuthenticationType is Mandatory\n";
	const MERCHANT_KEY_ID_REQ = "MerchantKeyId is Mandatory\n";
	const INVALID_PROXY_URL = "Proxy URL is Invalid! Assigining default proxy url: ";
	const INVALID_PROXY_PORT = "Proxy URL is Invalid! Assigining default proxy port: ";
	const DEFAULT_PROXY_URL = "userproxy.visa.com";
	const DEFAULT_PROXY_PORT = 443;

	const MERCHANT_SECRET_KEY_REQ = " MerchantSecretKey is Mandatory\n";
	const KEY_PASSWORD_EMPTY = "KeyPassword Empty/Null. Assigining merchantID value\n";
	const KEY_DIRECTORY_EMPTY = "KeysDirectory not provided. Using Default Path:";
	const REQUEST_JSON_EMPTY = "RequestJsonPath not provided\n";
	const INPUTDIGESTERR = "[ERROR] : Unable to access the Input Json file!\n";
	const INVALIDMETHOD = "[ERROR] : Invalid Method name!\n";
	const INVALID_REQUEST_TYPE_METHOD="[ERROR] : Entered Request Type should be (GET/POST/PUT)\n";
	const LOG_END_MSG = PHP_EOL.">END===============================================>".PHP_EOL;
	const LOG_START_MSG = ">START===============================================>";
	const RUNENV_REQ = "RunEnvironment is mandatory!\n";
	const LOGDIR = "logDirectory ";
	const LOGSIZE = "logSize ";
	const ENBLOGFIELD = "enableLog ";
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