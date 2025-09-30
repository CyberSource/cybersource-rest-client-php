#!/bin/bash

# Remove directories
rm -rf ../lib/Api
rm -rf ../lib/Model
rm -rf ../test
rm -rf ../docs

# Run Python script and capture logs
python replaceFieldNamesForPaths.py -i cybersource-rest-spec.json -o cybersource-rest-spec-php.json > replaceFieldLogs.log
rm replaceFieldLogs.log

# Generate code using swagger-codegen
java -jar swagger-codegen-cli-2.4.38.jar generate -t cybersource-php-template -i cybersource-rest-spec-php.json -l php -o ../ -c cybersource-php-config.json

# Copy CyberSource directory
cp -r ../CyberSource/* ../
rm -rf ../CyberSource

# PowerShell commands converted to use pwsh
pwsh -Command "(Get-Content ../lib/Api/SearchTransactionsApi.php) | ForEach-Object { \$_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ../lib/Api/SearchTransactionsApi.php"

# renaming long file name
pwsh -Command "(Get-Content ../lib/Api/SecureFileShareApi.php) | ForEach-Object { \$_ -replace 'selectHeaderContentType\(\[''\\*_\\/_\\*;charset=utf-8', 'selectHeaderContentType([''*/*;charset=utf-8' } | Set-Content ../lib/Api/SecureFileShareApi.php"

pwsh -Command "(Get-Content ../docs/Api/SecureFileShareApi.md) | ForEach-Object { \$_ -replace '\\*\\*Content-Type\\*\\*: \\*_\\/_\\*;charset=utf-8', '**Content-Type**: */*;charset=utf-8' } | Set-Content ../docs/Api/SecureFileShareApi.md"

# replace sdkLinks fieldName to links for supporting links field name in request/response body
echo "starting of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"
pwsh -Command "Set-Content ../lib/Model/PblPaymentLinksAllGet200Response.php ((Get-Content ../lib/Model/PblPaymentLinksAllGet200Response.php -Raw) -replace '''sdkLinks'' => ''sdkLinks''', '''sdkLinks'' => ''links''')"
echo "completed the task of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"

git checkout ../README.md
git checkout ../composer.json
git checkout ../lib/Api/OAuthApi.php
git checkout ../lib/Model/AccessTokenResponse.php
git checkout ../lib/Model/CreateAccessTokenRequest.php
git checkout ../lib/Api/BatchUploadApi.php

read -p "Press enter to continue..."
