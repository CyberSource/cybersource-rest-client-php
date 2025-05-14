@echo off

rd /s /q ..\lib\Api
rd /s /q ..\lib\Model
rd /s /q ..\test
rd /s /q ..\docs

setlocal enabledelayedexpansion
python replaceFieldNamesForPaths.py -i cybersource-rest-spec.json -o cybersource-rest-spec-php.json > replaceFieldLogs.log
del replaceFieldLogs.log
endlocal

java -jar swagger-codegen-cli-2.4.38.jar generate -t cybersource-php-template -i cybersource-rest-spec-php.json -l php -o ../ -c cybersource-php-config.json

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php"

REM renaming long file name

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SecureFileShareApi.php) | ForEach-Object { $_ -replace 'selectHeaderContentType\(\[''\*_\/_\*;charset=utf-8', 'selectHeaderContentType([''*/*;charset=utf-8' } | Set-Content ..\CyberSource\lib\Api\SecureFileShareApi.php"

powershell -Command "(Get-Content ..\CyberSource\docs\Api\SecureFileShareApi.md) | ForEach-Object { $_ -replace '\*\*Content-Type\*\*: \*_\/_\*;charset=utf-8', '**Content-Type**: */*;charset=utf-8' } | Set-Content ..\CyberSource\docs\Api\SecureFileShareApi.md"

@REM replace sdkLinks fieldName to links for supporting links field name in request/response body
echo "starting of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"
powershell -Command "Set-Content ..\CyberSource\lib\Model\PblPaymentLinksAllGet200Response.php ((Get-Content ..\CyberSource\lib\Model\PblPaymentLinksAllGet200Response.php -Raw) -replace '''sdkLinks'' => ''sdkLinks''', '''sdkLinks'' => ''links''')"
echo "completed the task of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"


xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

git checkout ..\README.md

git checkout ..\composer.json

git checkout ..\lib\Api\OAuthApi.php
git checkout ..\lib\Model\AccessTokenResponse.php
git checkout ..\lib\Model\CreateAccessTokenRequest.php

pause



