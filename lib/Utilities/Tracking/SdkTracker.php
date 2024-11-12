<?php

namespace CyberSource\Utilities\Tracking;

class SdkTracker
{
    private static $inclusionList = array(
        'CapturePaymentRequest',
        'CreateCreditRequest',
        'AddNegativeListRequest',
        'CreateBundledDecisionManagerCaseRequest',
        'FraudMarkingActionRequest',
        'CheckPayerAuthEnrollmentRequest',
        'PayerAuthSetupRequest',
        'ValidateRequest',
        'CreatePaymentRequest',
        'IncrementAuthRequest',
        'CreatePlanRequest',
        'RefundCaptureRequest',
        'RefundPaymentRequest',
        'AuthReversalRequest',
        'MitReversalRequest',
        'CreateSubscriptionRequest',
        'UpdateSubscription',
        'TaxRequest',
        'VoidTaxRequest',
        'ValidateExportComplianceRequest',
        'VerifyCustomerAddressRequest',
        'MitVoidRequest',
        'VoidCaptureRequest',
        'VoidCreditRequest',
        'VoidPaymentRequest',
        'VoidRefundRequest'
    );

    public function __construct() {}

    public function insertDeveloperIdTracker($requestObj, $requestClass, $runEnvironment, $defaultDeveloperId)
    {
        if (in_array($requestClass, self::$inclusionList))
        {
            $developer_id_value = '';

            if ($runEnvironment === 'apitest.cybersource.com')
            {
                $developer_id_value = 'LCBORMB1';
            }
            else
            {
                $developer_id_value = 'S2TBCVPH';
            }

            if (isset($defaultDeveloperId) && !empty(trim($defaultDeveloperId))) {
                $developer_id_value = trim($defaultDeveloperId);
            }

            if (!empty($requestObj->getClientReferenceInformation()))
            {
                if (!empty($requestObj->getClientReferenceInformation()->getPartner()))
                {
                    if (empty($requestObj->getClientReferenceInformation()->getPartner()->getDeveloperId()))
                    {
                        $requestObj->getClientReferenceInformation()->getPartner()->setDeveloperId($developer_id_value);
                    }
                }
                else
                {
                    $partner_block = [
                        "developerId" => $developer_id_value
                    ];

                    $requestObj->getClientReferenceInformation()->setPartner($partner_block);
                }
            }
            else
            {
                $partner_block = [
                    "developerId" => $developer_id_value
                ];

                $client_reference_information_block = [
                    "partner" => $partner_block
                ];

                $requestObj->setClientReferenceInformation($client_reference_information_block);
            }
        }

        return $requestObj;
    }
}
?>