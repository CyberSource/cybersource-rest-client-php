<?php

class MainTestScript
{

	public function PaasDataToFunction($folderName, $fileName)
	{
		$codefilePath = 'SamplesQA/'.$folderName.'/'.$fileName.'.php';
	  	require_once($codefilePath);
	  	$csvFilePath = 'SamplesQA/CSV_Files/'.$folderName.'/'.$fileName.'.csv';
		$flag =true;
		$returnCsvData = $this->GetCsvData($csvFilePath);
		echo $fileName."\n";
		switch ($fileName) {
			case 'ProcessPayment':
				$classObject = new ProcessPayment();
				$returnFunction = $classObject->testProcessPayment($returnCsvData, $fileName);
				continue;
			case 'CreateInstrumentIdentifier':
				$classObject = new CreateInstrumentIdentifier();
				$returnFunction = $classObject->testCreateInstrumentIdentifier($returnCsvData, $fileName);
				continue;
			case 'CreatePaymentInstrument':
				$classObject = new CreatePaymentInstrument();
				$returnFunction = $classObject->testCreatePaymentInstrument($returnCsvData, $fileName);
				continue;
			case 'RetrieveAllPaymentInstruments':
				$classObject = new RetrieveAllPaymentInstruments();
				$returnFunction = $classObject->testRetrieveAllPaymentInstruments($returnCsvData, $fileName);
				continue;
			case 'RetrieveInstrumentIdentifier':
				$classObject = new RetrieveInstrumentIdentifier();
				$returnFunction = $classObject->testRetrieveInstrumentIdentifier($returnCsvData, $fileName);
				continue;
			case 'RetrievePaymentInstrument':
				$classObject = new RetrievePaymentInstrument();
				$returnFunction = $classObject->testRetrievePaymentInstrument($returnCsvData, $fileName);
				continue;
			case 'UpdateInstrumentIdentifier':
				$classObject = new UpdateInstrumentIdentifier();
				$returnFunction = $classObject->testUpdateInstrumentIdentifier($returnCsvData, $fileName);
				continue;
			case 'UpdatePaymentInstrument':
				$classObject = new UpdatePaymentInstrument();
				$returnFunction = $classObject->testUpdatePaymentInstrument($returnCsvData, $fileName);
				continue;
			case 'DeleteInstrumentIdentifier':
				$classObject = new DeleteInstrumentIdentifier();
				$returnFunction = $classObject->testDeleteInstrumentIdentifier($returnCsvData, $fileName);
				continue;
			case 'DeletePaymentInstrument':
				$classObject = new DeletePaymentInstrument();
				$returnFunction = $classObject->testDeletePaymentInstrument($returnCsvData, $fileName);
				continue;
			case 'DownloadReport':
				$classObject = new DownloadReport();
				$returnFunction = $classObject->testDownloadReport($returnCsvData, $fileName);
				continue;
			case 'CreateAdhocReport':
				$classObject = new CreateAdhocReport();
				$returnFunction = $classObject->testCreateAdhocReport($returnCsvData, $fileName);
				continue;
			case 'GetReportBasedOnReportid':
				$classObject = new GetReportBasedOnReportid();
				$returnFunction = $classObject->testGetReportBasedOnReportid($returnCsvData, $fileName);
				continue;
			case 'RetrieveAvailableReports':
				$classObject = new RetrieveAvailableReports();
				$returnFunction = $classObject->testRetrieveAvailableReports($returnCsvData, $fileName);
				continue;
			case 'DeleteSubscriptionOfReportNameByOrganization':
				$classObject = new DeleteSubscriptionOfReportNameByOrganization();
				$returnFunction = $classObject->testDeleteSubscriptionOfReportNameByOrganization($returnCsvData, $fileName);
				continue;
			case 'CreateReportSubscriptionForReportNameByOrganization':
				$classObject = new CreateReportSubscriptionForReportNameByOrganization();
				$returnFunction = $classObject->testCreateReportSubscriptionForReportNameByOrganization($returnCsvData, $fileName);
				continue;
			case 'GetSubscriptionForReportName':
				$classObject = new GetSubscriptionForReportName();
				$returnFunction = $classObject->testGetSubscriptionForReportName($returnCsvData, $fileName);
				continue;
			case 'GetAllSubscriptions':
				$classObject = new GetAllSubscriptions();
				$returnFunction = $classObject->testGetAllSubscriptions($returnCsvData, $fileName);
				continue;
			case 'GetReportDefinition':
				$classObject = new GetReportDefinition();
				$returnFunction = $classObject->testGetReportDefinition($returnCsvData, $fileName);
				continue;
			case 'GetReportingResourceInformation':
				$classObject = new GetReportingResourceInformation();
				$returnFunction = $classObject->testGetReportingResourceInformation($returnCsvData, $fileName);
				continue;
			case 'GetPurchaseAndRefundDetails':
				$classObject = new GetPurchaseAndRefundDetails();
				$returnFunction = $classObject->testGetPurchaseAndRefundDetails($returnCsvData, $fileName);
				continue;
			case 'GetNotificationOfChanges':
				$classObject = new GetNotificationOfChanges();
				$returnFunction = $classObject->testGetNotificationOfChanges($returnCsvData, $fileName);
				continue;
			case 'DownloadFileWithFileIdentifier':
				$classObject = new DownloadFileWithFileIdentifier();
				$returnFunction = $classObject->testDownloadFileWithFileIdentifier($returnCsvData, $fileName);
				continue;
			case 'GetListOfFiles':
				$classObject = new GetListOfFiles();
				$returnFunction = $classObject->testGetListOfFiles($returnCsvData, $fileName);
				continue;
			case 'RetrieveTransaction':
				$classObject = new RetrieveTransaction();
				$returnFunction = $classObject->testRetrieveTransaction($returnCsvData, $fileName);
				continue;
			case 'GetListOfBatchFiles':
				$classObject = new GetListOfBatchFiles();
				$returnFunction = $classObject->testGetListOfBatchFiles($returnCsvData, $fileName);
				continue;
			case 'GetIndividualBatchFile':
				$classObject = new GetIndividualBatchFile();
				$returnFunction = $classObject->testGetIndividualBatchFile($returnCsvData, $fileName);
				continue;
			case 'GetUserInformation':
				$classObject = new GetUserInformation();
				$returnFunction = $classObject->testGetUserInformation($returnCsvData, $fileName);
				continue;
			case 'GetSearchResults':
				$classObject = new GetSearchResults();
				$returnFunction = $classObject->testGetSearchResults($returnCsvData, $fileName);
				continue;
			case 'CreateSearchRequest':
				$classObject = new CreateSearchRequest();
				$returnFunction = $classObject->testCreateSearchRequest($returnCsvData, $fileName);
				continue;
			case 'TokenizeCard':
				$classObject = new TokenizeCard();
				$returnFunction = $classObject->testTokenizeCard($returnCsvData, $fileName);
				continue;
			case 'GenerateKey':
				$classObject = new GenerateKey();
				$returnFunction = $classObject->testGenerateKey($returnCsvData, $fileName);
				continue;
			case 'ProcessPayout':
				$classObject = new ProcessPayout();
				$returnFunction = $classObject->testProcessPayout($returnCsvData, $fileName);
				continue;
			case 'RefundCapture':
				$classObject = new RefundCapture();
				$returnFunction = $classObject->testRefundCapture($returnCsvData, $fileName);
				continue;
			case 'VoidRefund':
				$classObject = new VoidRefund();
				$returnFunction = $classObject->testVoidRefund($returnCsvData, $fileName);
				continue;
			case 'VoidPayment':
				$classObject = new VoidPayment();
				$returnFunction = $classObject->testVoidPayment($returnCsvData, $fileName);
				continue;
			case 'VoidCredit':
				$classObject = new VoidCredit();
				$returnFunction = $classObject->testVoidCredit($returnCsvData, $fileName);
				continue;
			case 'VoidCapture':
				$classObject = new VoidCapture();
				$returnFunction = $classObject->testVoidCapture($returnCsvData, $fileName);
				continue;
			case 'RefundPayment':
				$classObject = new RefundPayment();
				$returnFunction = $classObject->testRefundPayment($returnCsvData, $fileName);
				continue;
			case 'ProcessAuthorizationReversal':
				$classObject = new ProcessAuthorizationReversal();
				$returnFunction = $classObject->testProcessAuthorizationReversal($returnCsvData, $fileName);
				continue;
			case 'ProcessCredit':
				$classObject = new ProcessCredit();
				$returnFunction = $classObject->testProcessCredit($returnCsvData, $fileName);
				continue;
			case 'CapturePayment':
				$classObject = new CapturePayment();
				$returnFunction = $classObject->testCapturePayment($returnCsvData, $fileName);
				continue;
			case 'CreateInstrumentIdentifier':
				$classObject = new CreateInstrumentIdentifier();
				$returnFunction = $classObject->testCreateInstrumentIdentifier($returnCsvData, $fileName);
				continue;
			case 'JCBJSecure':
				$classObject = new JCBJSecure();
				$returnFunction = $classObject->testJCBJSecure($returnCsvData, $fileName);
				continue;
			default:
				# code...
				break;
		}
		
	}
	public function GetCsvData($csvFilePath){
		$paymentList = fopen($csvFilePath,'r');
		fgets($paymentList);
		$returnArr = [];
		while (($paymentData = fgetcsv($paymentList) ) !== FALSE ) 
		{
			$returnArr[] = $paymentData;
			
		}
		return $returnArr;
	}
}
 
$obj = new MainTestScript();
ini_set('auto_detect_line_endings',TRUE);
$csvData = fopen('SamplesQA/CSV_Files/Driver/driver.csv','r');
fgets($csvData);
while (($rows = fgetcsv($csvData, 10000, ",")) !== FALSE ) {

	if(!empty($rows[2]) && $rows[2]==1){
		echo "\nProcessing for ".$rows[0]." directory with ".$rows[1]." API...\n";
		$obj->PaasDataToFunction(trim($rows[0]), trim($rows[1]));
	}
	continue;
}
echo "Processing Status info has been logged in TestReport/TestResults.csv File";


?>