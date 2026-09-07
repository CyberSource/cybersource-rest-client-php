#!/bin/bash
#START GENAI
set -e
rm -rf ../lib/Api
rm -rf ../lib/Model
rm -rf ../test
rm -rf ../docs

python3 replaceFieldNamesForPaths.py -i cybersource-rest-spec.json -o cybersource-rest-spec-php.json > replaceFieldLogs.log
rm -f replaceFieldLogs.log

java -jar swagger-codegen-cli-2.4.38.jar generate -t cybersource-php-template -i cybersource-rest-spec-php.json -l php -o ../ -c cybersource-php-config.json

cp -r ../CyberSource/* ../
rm -rf ../CyberSource

# normalize backslashes to forward slashes in phpunit.xml.dist (generator emits host OS File.separator)
sed -i '/<directory/ s|\\|/|g' ../phpunit.xml.dist

sed -i "s|selectHeaderAccept(\['application/json;charset=utf-8|selectHeaderAccept(['*/*|g" ../lib/Api/SearchTransactionsApi.php

# renaming long file name

sed -i "s|selectHeaderContentType(\['\*_/_\*;charset=utf-8|selectHeaderContentType(['*/*;charset=utf-8|g" ../lib/Api/SecureFileShareApi.php

sed -i "s|\*\*Content-Type\*\*: \*_/_\*;charset=utf-8|**Content-Type**: */*;charset=utf-8|g" ../docs/Api/SecureFileShareApi.md

# replace sdkLinks fieldName to links for supporting links field name in request/response body
echo "starting of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"
sed -i "s/'sdkLinks' => 'sdkLinks'/'sdkLinks' => 'links'/g" ../lib/Model/PblPaymentLinksAllGet200Response.php
echo "completed the task of replacing the links keyword in PblPaymentLinksAllGet200Response.php model"

# PHP method names are case-insensitive, so the qandA alias accessors (getQandA/setQandA) collide with the qAndA ones (getQAndA/setQAndA); rename the exact alias accessor/test-method identifiers only (wire keys and property keys are lowercase 'qandA' and stay unchanged). sed is case-sensitive so the qAndA methods are left alone
echo "starting of renaming qandA alias accessor methods in product models"
sed -i -e "s/getQandA/getQ_and_A/g" -e "s/setQandA/setQ_and_A/g" -e "s/testPropertyQandA/testPropertyQ_and_A/g" ../lib/Model/Iccv1productsfeedProducts.php ../lib/Model/InlineResponse20020Products.php ../test/Model/Iccv1productsfeedProductsTest.php ../test/Model/InlineResponse20020ProductsTest.php
echo "completed the task of renaming qandA alias accessor methods in product models"

git checkout ../README.md

git checkout ../composer.json

git checkout ../lib/Api/OAuthApi.php
git checkout ../lib/Model/AccessTokenResponse.php
git checkout ../lib/Model/CreateAccessTokenRequest.php
git checkout ../lib/Api/BatchUploadApi.php

git checkout ../test/Authentication

#END GENAI