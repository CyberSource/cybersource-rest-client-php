<?php

namespace CyberSource;
class MerchantConfigurationTest extends \PHPUnit_Framework_TestCase
{

   
    public function testConfigurationHttpFields()
    {
        $call  = new MerchantConfiguration();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $this->assertTrue($call->validateMerchantData($merchantConfig) !== false);
    }

    public function testConfigurationJWTFields()
    {
        $call  = new MerchantConfiguration();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $this->assertTrue($call->validateMerchantData($merchantConfig) !== false);
    }

    public function testConfigurationHttpFieldsProduction()
    {
        $call  = new MerchantConfiguration();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectHttp();
        $this->assertTrue($call->validateMerchantData($merchantConfig) !== false);
    }

    public function testConfigurationJWTFieldsProduction()
    {
        $call  = new MerchantConfiguration();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwt();
        $this->assertTrue($call->validateMerchantData($merchantConfig) !== false);
    }

    public function TestgetMerchantConfigJwtEnableLog()
    {
        $call  = new MerchantConfiguration();
        $merchantObj = new TestConfiguration();
        $merchantConfig = $merchantObj->getMerchantConfigObjectJwtEnableLog();
        $this->assertTrue($call->validateMerchantData($merchantConfig) !== false);
    }

    public function testConfigurationHttpFieldsSetCred()
    {
        $getConfig = new PropertiesUtil();
        $fileName = "../../Cybersourceauthentication-sdkPhp/resource/Cybs.json";
        $getConfigDet = $getConfig->readConfig($fileName);
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setMerchantCredentials($getConfigDet) !== false);
    }

    public function testConfigurationJWTFieldsSetCred()
    {
        $getConfig = new PropertiesUtil();
        $fileName = "../../Cybersourceauthentication-sdkPhp/resource/Cybs.json";
        $getConfigDet = $getConfig->readConfig($fileName);
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setMerchantCredentials($getConfigDet) !== false);
    }

    public function testConfigurationSetEnvironment()
    {
        
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setRunEnvironment("cyberSource.environment.PRODUCTION") !== false);
    }

    public function testConfigurationSetMethod()
    {
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setMethod("GET") !== false);
    }

    public function testConfigurationGetMethod()
    {
        $this->assertClassHasAttribute('method', MerchantConfiguration::class);
    }

    public function testConfigurationSetHost()
    {
        
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setHost("http://apitest.cybersource.com") !== false);
    }

    public function testConfigurationGetHost()
    {
        $this->assertClassHasAttribute('host', MerchantConfiguration::class);
    }


    public function testConfigurationSetDefaultMerchantConfig()
    {
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->setDefaultMerchantConfiguration($call) !== false);
    }

    public function testConfigurationGetDefaultMerchantConfig()
    {
        $call  = new MerchantConfiguration();
        $this->assertTrue($call->getDefaultMerchantConfiguration($call) !== false);
    }

}