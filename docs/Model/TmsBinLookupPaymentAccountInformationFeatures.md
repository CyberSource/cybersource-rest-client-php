# TmsBinLookupPaymentAccountInformationFeatures

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountFundingSource** | **string** | This field contains the account funding source. Possible values:   - &#x60;CREDIT&#x60;   - &#x60;DEBIT&#x60;   - &#x60;PREPAID&#x60;   - &#x60;DEFERRED DEBIT&#x60;   - &#x60;CHARGE&#x60; | [optional] 
**accountFundingSourceSubType** | **string** | This field contains the type of prepaid card. Possible values:   - &#x60;Reloadable&#x60;   - &#x60;Non-reloadable&#x60; | [optional] 
**cardProduct** | **string** | This field contains the type of issuer product. Example values:   - Visa Classic   - Visa Signature   - Visa Infinite | [optional] 
**messageType** | **string** | This field contains the type of BIN based authentication. Possible values:   - &#x60;S&#x60;: Single Message   - &#x60;D&#x60;: Dual Message | [optional] 
**acceptanceLevel** | **string** | This field contains the acceptance level of the PAN. Possible values:   - &#x60;0&#x60; : Normal   - &#x60;1&#x60; : Monitor   - &#x60;2&#x60; : Refuse   - &#x60;3&#x60; : Not Allowed   - &#x60;4&#x60; : Private   - &#x60;5&#x60; : Test | [optional] 
**cardPlatform** | **string** | This field contains the type of card platform. Possible values:   - &#x60;BUSINESS&#x60;   - &#x60;CONSUMER&#x60;   - &#x60;CORPORATE&#x60;   - &#x60;COMMERCIAL&#x60;   - &#x60;GOVERNMENT&#x60; | [optional] 
**comboCard** | **string** | This field indicates the type of combo card. Possible values:   - 0 (Not a combo card)   - 1 (Credit and Prepaid Combo card)   - 2 (Credit and Debit Combo card) | [optional] 
**corporatePurchase** | **bool** | This field indicates if the instrument can be used for corporate purchasing. This field is only applicable for American Express cards. Possible values:   - &#x60;true&#x60;   - &#x60;false&#x60; | [optional] 
**healthCard** | **bool** | This field indicates if the BIN is for healthcare (HSA/FSA). Currently, this field is only supported for Visa BINs. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**sharedBIN** | **bool** | This field indicates if the BIN is shared by multiple issuers Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**posDomesticOnly** | **bool** | This field indicates if the BIN is valid only for POS domestic usage. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**gamblingAllowed** | **bool** | This field indicates if gambling transactions are allowed on the BIN. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**commercialCardLevel2** | **bool** | This field indicates if a transaction on the instrument qualifies for level 2 interchange rates. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**commercialCardLevel3** | **bool** | This field indicates if a transaction on the instrument qualifies for level 3 interchange rates. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**exemptBIN** | **bool** | This field indicates if a transaction on the instrument qualifies for government exempt interchange fee. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**accountLevelManagement** | **bool** | This field indicates if the BIN participates in Account Level Management (ALM). Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**onlineGamblingBlock** | **bool** | This field indicates if online gambling is blocked on the BIN. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**autoSubstantiation** | **bool** | This field indicates if auto-substantiation is enabled on the BIN. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 
**flexCredential** | **bool** | This field indicates if the instrument is a flex credential. Possible values:     - &#x60;true&#x60;     - &#x60;false&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


