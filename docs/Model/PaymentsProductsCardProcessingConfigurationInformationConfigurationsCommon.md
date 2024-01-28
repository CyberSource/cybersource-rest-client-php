# PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processors** | [**map[string,\CyberSource\Model\PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonProcessors]**](PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonProcessors.md) | e.g. * amexdirect * barclays2 * CUP * EFTPOS * fdiglobal * gpx * smartfdc * tsys * vero * VPC  For VPC, CUP and EFTPOS processors, replace the processor name from VPC or CUP or EFTPOS to the actual processor name in the sample request. e.g. replace VPC with &amp;lt;your vpc processor&amp;gt; | [optional] 
**amexVendorCode** | **string** | Vendor code assigned by American Express. Applicable for TSYS (tsys) processor. | [optional] 
**defaultAuthTypeCode** | **string** | Authorization Finality indicator. Please note that the input can be in small case or capitals but response is in small case as of now. It will be made capitals everywhere in the next version. Applicable for Elavon Americas (elavonamericas), TSYS (tsys), Barclays (barclays2), Streamline (streamline2), Six (six), Barclays HISO (barclayshiso), GPN (gpn), FDI Global (fdiglobal), GPX (gpx), Paymentech Tampa (paymentechtampa), FDC Nashville (smartfdc), VPC and Chase Paymentech Salem (chasepaymentechsalem) processors.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;th&gt;Default Value&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;Barclays&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;td&gt;FINAL&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;Barclays HISO&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;Yes&lt;/td&gt;&lt;td&gt;FINAL&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**masterCardAssignedId** | **string** | MAID aka MasterCard assigned ID, MasterCard equivalent of Merchant Verification Value by Visa. Applicable for VPC, GPX (gpx) and FDI Global (fdiglobal) processors. | [optional] 
**enablePartialAuth** | **bool** | Allow merchants to accept partial authorization approvals. Applicable for Elavon Americas (elavonamericas), VPC, GPX (gpx), FDI Global (fdiglobal), FDC Nashville (smartfdc), GPN (gpn), TSYS (tsys), American Express Direct (amexdirect), Paymentech Tampa (paymentechtampa) and Chase Paymentech Salem (chasepaymentechsalem) processors.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;th&gt;Default Value&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;American Express Direct&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**merchantCategoryCode** | **string** | Indicates type of business product or service of the merchant. Applicable for Chase Paymentech Salem (chasepaymentechsalem), FDI Global (fdiglobal), RUPAY, Elavon Americas (elavonamericas), American Express Direct (amexdirect), CMCIC (cmcic), GPX (gpx), VPC, TSYS (tsys), EFTPOS, CUP, Paymentech Tampa (paymentechtampa), CB2A, Barclays (barclays2), Prisma (prisma) and GPN (gpn) processors.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;th&gt;Min. Length&lt;/th&gt;&lt;th&gt;Max. Length&lt;/th&gt;&lt;th&gt;Regex&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;Barclays&lt;/td&gt;&lt;td&gt;cnp&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;td&gt;^[0-9]+$&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;American Express Direct&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;Yes&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;td&gt;^[0-9]+$&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**sicCode** | **string** | The Standard Industrial Classification (SIC) are four-digit codes that categorize the industries that companies belong to based on their business activities. Standard Industrial Classification codes were mostly replaced by the six-digit North American Industry Classification System (NAICS). Applicable for VPC and GPX (gpx) processors. | [optional] 
**foodAndConsumerServiceId** | **string** | Food and Consumer Service ID. Identifies the merchant as being certified and approved to accept Food Stamps. Applicable for GPX (gpx) processor. | [optional] 
**enableSplitShipment** | **bool** | Enables you to split an order into multiple shipments with multiple captures. This feature is provided by CyberSource and supports three different scenarios:  * multiple authorizations * multiple captures * multiple authorizations with multiple captures  Applicable for VPC processors. | [optional] 
**enableInterchangeOptimization** | **bool** | Reduces your interchange fees by using automatic authorization refresh and automatic partial authorization reversal. Applicable for VPC processors. | [optional] 
**visaDelegatedAuthenticationId** | **string** | Identifier provided to merchants who opt for Visa&#39;s delegated authorization program. Applicable for VPC processors. | [optional] 
**creditCardRefundLimitPercent** | **string** | Blocks over-refunds when the aggregated refund amount is higher than the percentage set for this field. Applicable for GPX (gpx), VPC and Chase Paymentech Salem (chasepaymentechsalem) processors. | [optional] 
**businessCenterCreditCardRefundLimitPercent** | **string** | Limits refunds to the percentage set in this field. Applicable for GPX (gpx) and VPC processors. | [optional] 
**allowCapturesGreaterThanAuthorizations** | **bool** | Enables this merchant account to capture amounts greater than the authorization amount. Applicable for GPX (gpx), VPC, Paymentech Tampa (paymentechtampa) and Chase Paymentech Salem (chasepaymentechsalem) processors. | [optional] 
**enableDuplicateMerchantReferenceNumberBlocking** | **bool** | Helps prevent duplicate transactions. Applicable for VPC, GPX (gpx) and Chase Paymentech Salem (chasepaymentechsalem) processors. | [optional] 
**domesticMerchantId** | **bool** | This is a local merchant ID used by merchants in addition to the conventional merchant ID. This value is sent to the issuer. Applicable for VPC and Prisma (prisma) processors. | [optional] 
**processLevel3Data** | **string** | Indicates whether merchant processes Level 3 transactions. Applicable for TSYS (tsys), Barclays (barclays2), Paymentech Tampa (paymentechtampa), FDI Global (fdiglobal), Elavon Americas (elavonamericas) and Chase Paymentech Salem (chasepaymentechsalem) processors.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;Barclays&lt;/td&gt;&lt;td&gt;cnp&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**subMerchantId** | **string** | The ID assigned to the sub-merchant. Applicable for American Express Direct (amexdirect) processor.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;th&gt;Min. Length&lt;/th&gt;&lt;th&gt;Max. Length&lt;/th&gt;&lt;th&gt;Regex&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;American Express Direct&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;td&gt;1&lt;/td&gt;&lt;td&gt;20&lt;/td&gt;&lt;td&gt;^[0-9a-zA-Z&amp;#92;-&amp;#92;_&amp;#92;,\\s.]+$&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**subMerchantBusinessName** | **string** | Sub-merchant&#39;s business name. Applicable for American Express Direct (amexdirect) processor.  Validation details (for selected processors)...  &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Processor&lt;/th&gt;&lt;th&gt;Acceptance Type&lt;/th&gt;&lt;th&gt;Required&lt;/th&gt;&lt;th&gt;Min. Length&lt;/th&gt;&lt;th&gt;Max. Length&lt;/th&gt;&lt;th&gt;Regex&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;American Express Direct&lt;/td&gt;&lt;td&gt;cnp, cp, hybrid&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;td&gt;1&lt;/td&gt;&lt;td&gt;37&lt;/td&gt;&lt;td&gt;^[0-9a-zA-Z&amp;#92;-&amp;#92;_&amp;#92;,\\s.]+$&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt; | [optional] 
**preferCobadgedSecondaryBrand** | **bool** | It denotes merchant&#39;s preference on secondary brand for routing in case of co-branded cards. Applicable for EFTPOS processors. | [optional] 
**merchantDescriptorInformation** | [**\CyberSource\Model\PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonMerchantDescriptorInformation**](PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonMerchantDescriptorInformation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

