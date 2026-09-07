# UnifiedriskPaymentBatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batchNumber** | **string** | Unique sequential identifier for this batch within the batch file, used for tracking and reconciliation of ACH or BACS batch submissions | [optional] 
**categoryPurposeDescription** | **string** | Human-readable description of the business purpose for the batch (e.g., \&quot;Payroll\&quot;, \&quot;Vendor Payments\&quot;). Corresponds to the ISO 20022 CategoryPurpose code | [optional] 
**endOfBatchIndicator** | **bool** | Indicates this entry is the last record in the current batch. Used to signal batch boundary during file processing | [optional] 
**endOfFileIndicator** | **bool** | Indicates this entry is the last record in the entire batch file. Used to trigger final file validation and processing | [optional] 
**entryDetailRecNum** | **float** | Sequential record number of the entry detail record within the batch, used for file integrity checks and record-level reconciliation | [optional] 
**fileIdModifier** | **string** | Single character modifier (A-Z) used to distinguish multiple batch files submitted on the same day for the same originator | [optional] 
**numberOfAddendaRecords** | **float** | Count of addenda records associated with this batch entry, used for validating batch completeness during file processing | [optional] 
**serviceClassCode** | **string** | ACH service class code indicating the type of entries in the batch. Values - \&quot;200\&quot; (mixed), \&quot;220\&quot; (credits only), \&quot;225\&quot; (debits only), \&quot;280\&quot; (automated accounting) | [optional] 
**totalBatchCountInFile** | **float** | Total number of batches contained in this file, used for file-level control validation and balancing | [optional] 
**totalBatchEntries** | **float** | Total count of entry detail records within this batch, used for batch-level balancing and reconciliation | [optional] 
**totalEntryCountInFile** | **float** | Total count of all entry detail records across all batches in the file, used for file-level reconciliation | [optional] 
**totalEntryHash** | **float** | Arithmetic sum of all routing transit numbers within the batch/file, used as a checksum for routing number validation | [optional] 
**totalTransitCountInFile** | **float** | Total count of distinct routing transit numbers in the file, used for clearing house validation and routing verification | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


