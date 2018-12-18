<?php
use CyberSource\Authentication\PayloadDigest\PayloadDigest as PayloadDigest;
use CyberSource\Authentication\Jwt\JsonWebTokenHeader as JsonWebTokenHeader;
use CyberSource\Authentication\Core\AuthException as AuthException;
include_once(dirname(__FILE__)."/../../TestConfiguration.php");

class JsonWebTokenHeaderTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJwtHeaderString()
    {
        $testClass = new TestConfiguration();
        $testClassIns = $testClass->getMerchantConfigObjectJwt();
        $jwtObj = new JsonWebTokenHeader();
        $this->assertEquals("eyJ2LWMtbWVyY2hhbnQtaWQiOiJ0ZXN0cmVzdCIsIng1YyI6WyJNSUlDWHpDQ0FjaWdBd0lCQWdJV05URXhNakl5T0RrMk5qSXpNREUzTnpBek1UVTNPVEFOQmdrcWhraUc5dzBCXG5BUXNGQURBZU1Sd3dHZ1lEVlFRRERCTkRlV0psY2xOdmRYSmpaVU5sY25SQmRYUm9NQjRYRFRFM01URXlNVEF3XG5NRGd4TmxvWERURTVNVEV5TVRBd01EZ3hObG93TkRFUk1BOEdBMVVFQXd3SWRHVnpkSEpsYzNReEh6QWRCZ05WXG5CQVVURmpVeE1USXlNamc1TmpZeU16QXhOemN3TXpFMU56a3dnZ0VpTUEwR0NTcUdTSWIzRFFFQkFRVUFBNElCXG5Ed0F3Z2dFS0FvSUJBUUMrQnRkTWNva2FLd1RlczlPK3NucWpXc2VoTzBcL1k0Q0pyd280Y2RHQ2FmUk82b3dzM1xubUMxeG1wU1l0dFRLSWRlR1IxcU9ZcFRTZVk5dUpoMmNDZmF5TUtYbWhRZjRkNXY4cE5Ebm1ZQk1HQndVMXdXalxubFlzTUxGYmNQRldqZFB0S2xvdTJSSVdaNTY2WVdJYldDQmYrRzRkSGtBMEQ3Q3NwM0ZUM2xuVU4ybWU0bEprbFxueXNmcXAxWDhxM0pEcVZJUUZWQWR1YW1oV0NZTVJTNUtnOHNLd01qbGRHUVVieTg4UytNT3djQ0EzSE9IVDY0YlxuYXJ2UElkMkV4cUFxdmZ5QkNQQVI0OVY2XC95d0RWc0g5U3lIZXdnMTIxY2tNY0E5ZzU1dElxZHN5SEdSWk45ZnNcbjIwa015cUVQNzhMNGN4ZmlzdVZRQzhrbmxmWnRkY3FWQVk3RkFnTUJBQUV3RFFZSktvWklodmNOQVFFTEJRQURcbmdZRUFKWGJLTlJVYk50MkJkWUVUTU9yOU1zOTNMa1p0Y2FpNUlsOG5kUDQycTVYSHQ2XC9QY2JtYWpCSlNiUXpEXG5JMlJcL2JjcVlwYzRZdFhGU0lJMThvMlVQUk90cmUyQmFMWHRZU1FDUHBtZkRTQTNvMEtVdzZkSmtvQmRcL3d3dVNcblg5Y1c5QWFaVG1lWko2V1RNcEFjNVhSMExaS2ZHbUs3bHkrdWRnNUpibWFKUkZBPSJdLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6IiJ9.IntcInRlc3RzdHJpbmdcIjpcImp3dGJvZHlcIn0i.YRdosUt9ZrtA_RQKpWWvBnphNkKExh3YI00O0XPJyfTK34nFL0uMq8WQ5j_kby1U7hKBgKHz_9d6x09KqgpzjuMDlVF99woKeQTS4mKqpSyc2LfQ086MXhkI6hilKYKzz_JguQY5qtdYHwX5gwN7kYT1baclFQLCqbd_qPeTaaqJA0YYwjdeq4ITmUfWsZ8OPpFK-yBV0yeEPltTPj5zddP64ZxtkThZvQ8KLgC_US54e83gmO3r_GwGJ9N_P75zJjH4c-do2lUeZAPFOVuVC1NMPFV-V-IEXR_VxyEWUbOdf9ly1IA0GNjRQOMnHv5FxuKAmRBYUFnvuqyYSmRH9Q", $jwtObj->getJsonWebToken('{"teststring":"jwtbody"}', $testClassIns));

    }

    
    public function testGetJwtHeaderEmptyMerchant()
    {
        $testClass = new TestConfiguration();
        $testClassIns = $testClass->getMerchantConfigObjectJwtWrongKey();
        $jwtObj = new JsonWebTokenHeader();
        $this->expectException(AuthException::class);
        $jwtObj->getJsonWebToken('{"teststring":"jwtbody"}', $testClassIns);

    }

    public function testGetJwtHeaderEmptyMerchantPassword()
    {
        $testClass = new TestConfiguration();
        $testClassIns = $testClass->getMerchantConfigObjectJwtWrongPassword();
        $jwtObj = new JsonWebTokenHeader();
        $this->expectException(AuthException::class);
        $jwtObj->getJsonWebToken('{"teststring":"jwtbody"}', $testClassIns);

    }


}