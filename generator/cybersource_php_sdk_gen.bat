mkdir %~dp0PHP
cd %~dp0
java -jar swagger-codegen-cli-2.2.3.jar generate -t cybersource-php-template -i cybersource-rest-spec.json -l php -o PHP -c %~dp0cybersource-php-config.json

pause



