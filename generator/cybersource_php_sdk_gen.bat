java -jar swagger-codegen-cli-2.2.3.jar generate -t cybersource-php-template -i cybersource-rest-spec.json -l php -o ../ -c cybersource-php-config.json

powershell -Command "(Get-Content ..\CyberSource\lib\Api\CaptureApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\CaptureApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\CreditApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\CreditApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\PaymentsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\PaymentsApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\ProcessAPayoutApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\ProcessAPayoutApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\RefundApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\RefundApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\ReversalApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\ReversalApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\TransactionDetailsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\TransactionDetailsApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\UserManagementApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\UserManagementApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\VoidApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json', 'selectHeaderAccept([''application/hal+json' } | Set-Content ..\CyberSource\lib\Api\VoidApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php) | ForEach-Object { $_ -replace 'selectHeaderAccept\(\[''application/json;charset=utf-8', 'selectHeaderAccept([''*/*'} | Set-Content ..\CyberSource\lib\Api\SearchTransactionsApi.php"

powershell -Command "(Get-Content ..\CyberSource\lib\Model\Tmsv1paymentinstrumentsCard.php) | ForEach-Object { $_ -replace '\&\& \!in_array', '&& in_array'} | Set-Content ..\CyberSource\lib\Model\Tmsv1paymentinstrumentsCard.php"

REM Batch file to change the content type 

powershell -Command "(Get-Content ..\CyberSource\lib\Api\SecureFileShareApi.php) | ForEach-Object { $_ -replace 'selectHeaderContentType\(\[''application/json;charset=utf-8', 'selectHeaderContentType([''*/*' } | Set-Content ..\CyberSource\lib\Api\SecureFileShareApi.php"

REM renaming long file name

powershell -Command " rename-item -Path ..\CyberSource\lib\Model\Tmsv1instrumentidentifiersProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname Tmsv1instrumentidentifiersMerchantInitiatedTransaction.php"

powershell -Command " rename-item -Path ..\CyberSource\lib\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.php  -newname Ptsv2paymentsMerchantInitiatedTransaction.php"

powershell -Command " rename-item -Path ..\CyberSource\docs\Model\Tmsv1instrumentidentifiersProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname Tmsv1instrumentidentifiersMerchantInitiatedTransaction.md"

powershell -Command " rename-item -Path ..\CyberSource\docs\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction.md  -newname Ptsv2paymentsMerchantInitiatedTransaction.md"

powershell -Command " rename-item -Path ..\CyberSource\test\Model\Tmsv1instrumentidentifiersProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname Tmsv1instrumentidentifiersMerchantInitiatedTransactionTest.php"

powershell -Command " rename-item -Path ..\CyberSource\test\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransactionTest.php  -newname Ptsv2paymentsMerchantInitiatedTransactionTest.php"

xcopy ..\CyberSource ..\ /s /e /y

rd /s /q ..\CyberSource

git checkout ..\README.md

git checkout ..\composer.json

pause



