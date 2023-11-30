@echo off

rd /s /q ..\lib\Api
rd /s /q ..\lib\Model
rd /s /q ..\test
rd /s /q ..\docs

java -jar swagger-codegen-cli-2.2.3.jar generate -t cybersource-php-template -i cybersource-rest-spec.json -l php -o ../ -c cybersource-php-config.json

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php"

REM renaming long file name

powershell -Command " rename-item -Path ..\CyberSource\lib\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname Tmsv2customersEmbeddedMerchantInitiatedTransaction.php"

REM powershell -Command " rename-item -Path ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication.php  -newname RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php"

REM powershell -Command " rename-item -Path ..\CyberSource\lib\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname Ptsv2paymentsMerchantInitiatedTransaction.php"

powershell -Command " rename-item -Path ..\CyberSource\docs\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname Tmsv2customersEmbeddedMerchantInitiatedTransaction.md"

REM powershell -Command " rename-item -Path ..\CyberSource\docs\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname Ptsv2paymentsMerchantInitiatedTransaction.md"

REM powershell -Command " rename-item -Path ..\CyberSource\docs\Model\RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication.md  -newname RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.md"

powershell -Command " rename-item -Path ..\CyberSource\test\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname Tmsv2customersEmbeddedMerchantInitiatedTransactionTest.php"

REM powershell -Command " rename-item -Path ..\CyberSource\test\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname Ptsv2paymentsMerchantInitiatedTransactionTest.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Model\Tmsv2customersEmbeddedMerchantInitiatedTransaction.php) |  ForEach-Object { $_ -replace 'class Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction', 'class Tmsv2customersEmbeddedMerchantInitiatedTransaction'}  | Set-Content ..\CyberSource\lib\Model\Tmsv2customersEmbeddedMerchantInitiatedTransaction.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiator.php) |  ForEach-Object { $_ -replace 'Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction', 'Tmsv2customersEmbeddedMerchantInitiatedTransaction'}  | Set-Content ..\CyberSource\lib\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbeddedInstrumentIdentifierProcessingInformationAuthorizationOptionsInitiator.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php) |  ForEach-Object { $_ -replace 'class RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication', 'class RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication'}  | Set-Content ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'csv\'';', 'csv'';const SUPPORTED_FORMATS_JSON =''application/json'';'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'SUPPORTED_FORMATS_TEXTCSV\,', 'SUPPORTED_FORMATS_TEXTCSV,self::SUPPORTED_FORMATS_JSON,'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'getSupportedFormatsAllowableValues\(\);', 'getSupportedFormatsAllowableValues();foreach ($allowed_values as &$value) {'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace '\$this->container\[\''supportedFormats\''] = \$supportedFormats', '} $this->container[''supportedFormats''] = $supportedFormats'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SecureFileShareApi.php) | ForEach-Object { $_ -replace 'selectHeaderContentType\(\[''\*_\/_\*;charset=utf-8', 'selectHeaderContentType([''*/*;charset=utf-8' } | Set-Content ..\CyberSource\lib\Api\SecureFileShareApi.php"

powershell -Command "(Get-Content ..\CyberSource\docs\Api\SecureFileShareApi.md) | ForEach-Object { $_ -replace '\*\*Content-Type\*\*: \*_\/_\*;charset=utf-8', '**Content-Type**: */*;charset=utf-8' } | Set-Content ..\CyberSource\docs\Api\SecureFileShareApi.md"

xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

git checkout ..\README.md

git checkout ..\composer.json

git checkout ..\lib\Api\OAuthApi.php
git checkout ..\lib\Model\AccessTokenResponse.php
git checkout ..\lib\Model\CreateAccessTokenRequest.php

pause



