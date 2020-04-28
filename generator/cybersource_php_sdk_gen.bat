@echo off

rd /s /q ..\lib\Api
rd /s /q ..\lib\Model
rd /s /q ..\test
rd /s /q ..\docs

java -jar swagger-codegen-cli-2.2.3.jar generate -t cybersource-php-template -i cybersource-rest-spec.json -l php -o ../ -c cybersource-php-config.json

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php"

REM renaming long file name

powershell -Command " rename-item -Path ..\CyberSource\lib\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction.php"

REM powershell -Command " rename-item -Path ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication.php  -newname RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php"

powershell -Command " rename-item -Path ..\CyberSource\lib\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname Ptsv2paymentsMerchantInitiatedTransaction.php"

powershell -Command " rename-item -Path ..\CyberSource\docs\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction.md"

powershell -Command " rename-item -Path ..\CyberSource\docs\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname Ptsv2paymentsMerchantInitiatedTransaction.md"

REM powershell -Command " rename-item -Path ..\CyberSource\docs\Model\RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication.md  -newname RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.md"

powershell -Command " rename-item -Path ..\CyberSource\test\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransactionTest.php"

powershell -Command " rename-item -Path ..\CyberSource\test\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname Ptsv2paymentsMerchantInitiatedTransactionTest.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Model\TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction.php) |  ForEach-Object { $_ -replace 'class TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction', 'class TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction'}  | Set-Content ..\CyberSource\lib\Model\TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiator.php) |  ForEach-Object { $_ -replace 'TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction', 'TmsV1InstrumentIdentifiersPost200ResponseMerchantInitiatedTransaction'}  | Set-Content ..\CyberSource\lib\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformationAuthorizationOptionsInitiator.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php) |  ForEach-Object { $_ -replace 'class RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication', 'class RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication'}  | Set-Content ..\CyberSource\lib\Model\RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'csv\'';', 'csv'';const SUPPORTED_FORMATS_JSON =''application/json'';'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'SUPPORTED_FORMATS_TEXTCSV\,', 'SUPPORTED_FORMATS_TEXTCSV,self::SUPPORTED_FORMATS_JSON,'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace 'getSupportedFormatsAllowableValues\(\);', 'getSupportedFormatsAllowableValues();foreach ($allowed_values as &$value) {'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

REM powershell -Command "(Get-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php) |  ForEach-Object { $_ -replace '\$this->container\[\''supportedFormats\''] = \$supportedFormats', '} $this->container[''supportedFormats''] = $supportedFormats'}  | Set-Content ..\CyberSource\lib\Model\ReportingV3ReportDefinitionsGet200ResponseReportDefinitions.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SecureFileShareApi.php) | ForEach-Object { $_ -replace 'selectHeaderContentType\(\[''application/json;charset=utf-8', 'selectHeaderContentType([''*/*' } | Set-Content ..\CyberSource\lib\Api\SecureFileShareApi.php"

xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

git checkout ..\README.md

git checkout ..\composer.json

pause



