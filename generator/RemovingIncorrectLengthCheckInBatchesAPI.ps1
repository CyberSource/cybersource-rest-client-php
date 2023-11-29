$counter = 0;
$matched = $false;
(Get-Content "..\CyberSource\lib\Api\\BatchesApi.php") | ForEach-Object {
        if ($matched -and $counter -gt 0) {
            '//' + $_
            $counter--
        } elseif ($_ -match "$batchId > 32") {
            $matched = $true
            $counter = 7
            '//' + $_
        } else {
            $_
        }
} | Set-Content "..\CyberSource\lib\Api\\BatchesApi.php";
