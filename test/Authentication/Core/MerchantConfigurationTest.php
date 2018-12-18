<?php

use CyberSource\Authentication\Core\MerchantConfiguration as MerchantConfiguration;

include_once(dirname(__FILE__)."/../../TestConfiguration.php");

class MerchantConfigurationTest extends \PHPUnit_Framework_TestCase
{
    
    public function testConfigurationSetEnvironment()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setRunEnvironment("cyberSource.environment.PRODUCTION");
        $this->assertEquals("cyberSource.environment.PRODUCTION", $merchantObj->getRunEnvironment());
        
    }

    public function testConfigurationSetMethod()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setMethod("GET");
        $this->assertEquals("GET", $merchantObj->getMethod());
    }

    public function testConfigurationSetHost()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setHost("http://apitest.cybersource.com");
        $this->assertEquals("http://apitest.cybersource.com", $merchantObj->getHost());
    }

    public function testConfigurationSetDebug()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setDebug(false);
        $this->assertEquals(false, $merchantObj->getDebug());
    }

    public function testConfigurationSetKeyPassword()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setKeyPassword("test");
        $this->assertEquals("test", $merchantObj->getKeyPassword());
    }

    public function testConfigurationSetKeysDirectory()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setKeysDirectory("test");
        $this->assertEquals("test", $merchantObj->getKeysDirectory());
    }

    public function testConfigurationSetKeyFileName()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setKeyFileName("test.key");
        $this->assertEquals("test.key", $merchantObj->getKeyFileName());
    }

    public function testConfigurationSetCurlProxyPort()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setCurlProxyPort(2020);
        $this->assertEquals(2020, $merchantObj->getCurlProxyPort());
    }

    public function testConfigurationSetCurlProxyHost()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setCurlProxyHost('userproxy.com');
        $this->assertEquals('userproxy.com', $merchantObj->getCurlProxyHost());
    }

    public function testConfigurationSetSecretKey()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setSecretKey('testkey1223Secret');
        $this->assertEquals('testkey1223Secret', $merchantObj->getSecretKey());
    }

    public function testConfigurationApiKeyID()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setApiKeyID('testkey1223');
        $this->assertEquals('testkey1223', $merchantObj->getApiKeyID());
    }

    public function testConfigurationSetMerchantID()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setMerchantID('test');
        $this->assertEquals('test', $merchantObj->getMerchantID());
    }

    public function testConfigurationSetAuthenticationType()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setAuthenticationType('http_signature');
        $this->assertEquals('http_signature', $merchantObj->getAuthenticationType());
    }

    public function testConfigurationSetLogFileName()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setLogFileName('test.log');
        $this->assertEquals('test.log', $merchantObj->getLogFileName());
    }

    public function testConfigurationSetDebugFile()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setDebugFile('./Log/');
        $this->assertEquals('./Log/', $merchantObj->getDebugFile());
    }
    public function testConfigurationSetLogSize()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantObj->setLogSize(10456);
        $this->assertEquals(10456, $merchantObj->getLogSize());
    }

    public function testValidateMerchantDataHTTP(){
        $merchantObj = new MerchantConfiguration();
        $testMerchant = new TestConfiguration();
        $testMerchantObj = $testMerchant->getMerchantConfigObjectHttp();
        $this->assertEquals($testMerchantObj, $merchantObj->validateMerchantData($testMerchantObj));
    }

    public function testValidateMerchantDataJWT(){
        $merchantObj = new MerchantConfiguration();
        $testMerchant = new TestConfiguration();
        $testMerchantObj = $testMerchant->getMerchantConfigObjectJwt();
        $this->assertEquals($testMerchantObj, $merchantObj->validateMerchantData($testMerchantObj));
    }

    public function testGetDefaultMerchantConfiguration()
    {
        $merchantObj = new MerchantConfiguration();
        $testMerchant = new TestConfiguration();
        $testMerchantObj = $testMerchant->getMerchantConfigObjectJwt();
        $merchantObj->setDefaultMerchantConfiguration($testMerchantObj);
        $this->assertEquals($testMerchantObj, $merchantObj->getDefaultMerchantConfiguration());
    }

    public function testMerchantConfigAuthNull()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantTest = new TestConfiguration();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $merchantObj->validateMerchantData($merchantTest->getMerchantConfigObjectAuthEmpty());

    }

    public function testMerchantConfigMechantIDNull()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantTest = new TestConfiguration();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $merchantObj->validateMerchantData($merchantTest->getMerchantConfigObjectJwtMerchantNull());
    }

    public function getMerchantConfigObjectJwtRunEnvNull()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantTest = new TestConfiguration();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $merchantObj->validateMerchantData($merchantTest->getMerchantConfigObjectJwtRunEnvNull());
    }

    public function getMerchantConfigObjectHttpApikeyNull()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantTest = new TestConfiguration();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $merchantObj->validateMerchantData($merchantTest->getMerchantConfigObjectHttpApikeyNull());
    }

    public function getMerchantConfigObjectHttpSeckeyNull()
    {
        $merchantObj = new MerchantConfiguration();
        $merchantTest = new TestConfiguration();
        $this->expectException(CyberSource\Authentication\Core\AuthException::class);
        $merchantObj->validateMerchantData($merchantTest->getMerchantConfigObjectHttpSeckeyNull());
    }
}