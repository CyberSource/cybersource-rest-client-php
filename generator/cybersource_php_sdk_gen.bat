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

xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

REM normalize backslashes to forward slashes in phpunit.xml.dist (generator emits host OS File.separator)
powershell -Command "(Get-Content ..\phpunit.xml.dist) | ForEach-Object { if ($_ -match '<directory') { $_ -replace '\\', '/' } else { $_ } } | Set-Content ..\phpunit.xml.dist"

powershell -Command "(Get-Content ..\lib\Api\SearchTransactionsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ..\lib\Api\SearchTransactionsApi.php"

REM renaming long file name

powershell -Command "(Get-Content ..\lib\Api\SecureFileShareApi.php) | ForEach-Object { $_ -replace 'selectHeaderContentType\(\[''\*_\/_\*;charset=utf-8', 'selectHeaderContentType([''*/*;charset=utf-8' } | Set-Content ..\lib\Api\SecureFileShareApi.php"

powershell -Command "(Get-Content ..\docs\Api\SecureFileShareApi.md) | ForEach-Object { $_ -replace '\*\*Content-Type\*\*: \*_\/_\*;charset=utf-8', '**Content-Type**: */*;charset=utf-8' } | Set-Content ..\docs\Api\SecureFileShareApi.md"

@REM replace sdkLinks fieldName to links for supporting links field name in request/response body
echo "starting of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"
powershell -Command "Set-Content ..\lib\Model\PblPaymentLinksAllGet200Response.php ((Get-Content ..\lib\Model\PblPaymentLinksAllGet200Response.php -Raw) -replace '''sdkLinks'' => ''sdkLinks''', '''sdkLinks'' => ''links''')"
echo "completed the task of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"

@REM PHP method names are case-insensitive, so the qandA alias accessors (getQandA/setQandA) collide with the qAndA ones (getQAndA/setQAndA); rename the exact alias accessor/test-method identifiers only (wire keys and property keys are lowercase 'qandA' and stay unchanged). -creplace keeps it case-sensitive so the qAndA methods are left alone
echo "starting of renaming qandA alias accessor methods in product models"
powershell -Command "@('..\lib\Model\Iccv1productsfeedProducts.php','..\lib\Model\InlineResponse20020Products.php','..\test\Model\Iccv1productsfeedProductsTest.php','..\test\Model\InlineResponse20020ProductsTest.php') | ForEach-Object { [IO.File]::WriteAllText($_, ([IO.File]::ReadAllText($_) -creplace 'getQandA','getQ_and_A' -creplace 'setQandA','setQ_and_A' -creplace 'testPropertyQandA','testPropertyQ_and_A'), (New-Object Text.UTF8Encoding($false))) }"
echo "completed the task of renaming qandA alias accessor methods in product models"


git checkout ..\README.md

git checkout ..\composer.json

git checkout ..\lib\Api\OAuthApi.php
git checkout ..\lib\Model\AccessTokenResponse.php
git checkout ..\lib\Model\CreateAccessTokenRequest.php
git checkout ..\lib\Api\BatchUploadApi.php

git checkout ..\test\Authentication

pause



