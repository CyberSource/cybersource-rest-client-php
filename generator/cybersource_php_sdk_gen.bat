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

for %%i in ("..\CyberSource\lib\Api\*.php") do (
  powershell -Command "(Get-Content '%%i') -replace 'DISCLAIMER_PLACEHOLDER_beta', '* DISCLAIMER : Cybersource may allow Customer to access, use, and/or test a Cybersource product or service that may still be in development or has not been market-tested (\"Beta Product\") solely for the purpose of evaluating the functionality or marketability of the Beta Product (a \"Beta Evaluation\"). Notwithstanding any language to the contrary, the following terms shall apply with respect to Customer''s participation in any Beta Evaluation (and the Beta Product(s)) accessed thereunder): The Parties will enter into a separate form agreement detailing the scope of the Beta Evaluation, requirements, pricing, the length of the beta evaluation period (\"Beta Product Form\"). Beta Products are not, and may not become, Transaction Services and have not yet been publicly released and are offered for the sole purpose of internal testing and non-commercial evaluation. Customer''s use of the Beta Product shall be solely for the purpose of conducting the Beta Evaluation. Customer accepts all risks arising out of the access and use of the Beta Products. Cybersource may, in its sole discretion, at any time, terminate or discontinue the Beta Evaluation. Customer acknowledges and agrees that any Beta Product may still be in development and that Beta Product is provided \"AS IS\" and may not perform at the level of a commercially available service, may not operate as expected and may be modified prior to release. CYBERSOURCE SHALL NOT BE RESPONSIBLE OR LIABLE UNDER ANY CONTRACT, TORT (INCLUDING NEGLIGENCE), OR OTHERWISE RELATING TO A BETA PRODUCT OR THE BETA EVALUATION (A) FOR LOSS OR INACCURACY OF DATA OR COST OF PROCUREMENT OF SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY, (B) ANY CLAIM, LOSSES, DAMAGES, OR CAUSE OF ACTION ARISING IN CONNECTION WITH THE BETA PRODUCT; OR (C) FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES INCLUDING, BUT NOT LIMITED TO, LOSS OF REVENUES AND LOSS OF PROFITS.' | Set-Content '%%i'"
)
for %%i in ("..\CyberSource\lib\Api\*.php") do (
  powershell -Command "(Get-Content '%%i') | Where-Object { $_ -notmatch 'DISCLAIMER_PLACEHOLDER_.*'} | Set-Content '%%i'"
)

xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

git checkout ..\README.md

git checkout ..\composer.json

git checkout ..\lib\Api\OAuthApi.php
git checkout ..\lib\Model\AccessTokenResponse.php
git checkout ..\lib\Model\CreateAccessTokenRequest.php

pause



