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
			case 'CapturePayment':
				$classObject = new CapturePayment();
				$returnFunction = $classObject->testCapturePayment($returnCsvData, $fileName);
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