<?php
/**
 *
 *
 * @author     Vítor Santos <vitor.santos@adclick.pt>
 * @copyright  2014 Adclick
 * @license    [SMARKIO_URL_LICENSE_HERE]
 *
 * [SMARKIO_DISCLAIMER]
 */

namespace Adclick\Smarkio\Supplier;

require_once('SendLead.php');

class Lead
{

    const INTEGRATION_STATUS_SUCCESS = 3;
    const INTEGRATION_STATUS_REJECTED = 2;

    // Lead fields array
    private $leadFields = array();

    // Extra fields array
    private $extraFields = array();

    private $api_token = null;

    /**
     * @param null $api_token
     */
    public function setApiToken($api_token)
    {
        $this->api_token = $api_token;
    }

    /**
     * @return null
     */
    public function getApiToken()
    {
        return $this->api_token;
    }

    function __construct($api_token, $externalId, $campaignExternalId, $ipAddress, $email, $domain)
    {
        $this->leadFields = array();
        $this->setApiToken($api_token);
        $this->setExternalId($externalId);
        $this->setCampaignExternalId($campaignExternalId);
        $this->setIpAddress($ipAddress);
        $this->setEmail($email);
        $this->setDomain($domain);
    }

    public function getSupplierId()
    {
        return isset($this->leadFields['external_id']) ? $this->leadFields['external_id'] : null;
    }

    public function setSupplierId($supplier_id)
    {
        $this->leadFields['supplier_id'] = $supplier_id;

    }

    public function getEmail()
    {
        return isset($this->leadFields['email']) ? $this->leadFields['email'] : null;

    }

    public function setEmail($email)
    {
        $this->leadFields['email'] = $email;

    }

    public function getExternalId()
    {
        return isset($this->leadFields['external_id']) ? $this->leadFields['external_id'] : null;

    }

    public function setExternalId($externalId)
    {
        $this->leadFields['external_id'] = $externalId;
    }

    public function getCampaignExternalId()
    {
        return isset($this->leadFields['campaign_external_id']) ? $this->leadFields['campaign_external_id'] : null;
    }

    public function setCampaignExternalId($campaignExternalId)
    {
        $this->leadFields['campaign_external_id'] = $campaignExternalId;
    }

    public function getDfUid()
    {
        return isset($this->leadFields['df_uid']) ? $this->leadFields['df_uid'] : null;

    }

    public function setDfUid($value)
    {
        $this->leadFields['df_uid'] = $value;

    }

    public function getIpAddress()
    {
        return isset($this->leadFields['ip_address']) ? $this->leadFields['ip_address'] : null;
    }

    public function setIpAddress($ipAddress)
    {
        $this->leadFields['ip_address'] = $ipAddress;
    }

    public function getCreationAt()
    {
        return isset($this->leadFields['creation_at']) ? $this->leadFields['creation_at'] : null;

    }

    public function setCreationAt($creationAt)
    {
        $this->leadFields['creation_at'] = $creationAt;

    }

    public function getFirstName()
    {
        return isset($this->leadFields['first_name']) ? $this->leadFields['first_name'] : null;

    }

    public function setFirstName($firstName)
    {
        $this->leadFields['first_name'] = $firstName;
    }

    public function getLastName()
    {
        return isset($this->leadFields['last_name']) ? $this->leadFields['last_name'] : null;

    }

    public function setLastName($lastName)
    {
        $this->leadFields['last_name'] = $lastName;

    }

    public function getBirthDate()
    {
        return isset($this->leadFields['birth_date']) ? $this->leadFields['birth_date'] : null;

    }

    public function setBirthDate($birthDate)
    {
        $this->leadFields['birth_date'] = $birthDate;

    }

    public function getAddress()
    {
        return isset($this->leadFields['address']) ? $this->leadFields['address'] : null;

    }

    public function setAddress($address)
    {
        $this->leadFields['address'] = $address;

    }

    public function getZipCode()
    {
        return isset($this->leadFields['zip_code']) ? $this->leadFields['zip_code'] : null;

    }

    public function setZipCode($zipCode)
    {
        $this->leadFields['zip_code'] = $zipCode;

    }

    public function getPhone()
    {
        return isset($this->leadFields['phone']) ? $this->leadFields['phone'] : null;

    }

    public function setPhone($phone)
    {
        $this->leadFields['phone'] = $phone;

    }

    public function getCity()
    {
        return isset($this->leadFields['city']) ? $this->leadFields['city'] : null;
    }

    public function setCity($city)
    {
        $this->leadFields['city'] = $city;

    }

    public function getPayout()
    {
        return isset($this->leadFields['payout']) ? $this->leadFields['payout'] : null;
    }

    public function setPayout($payout)
    {
        $this->leadFields['payout'] = $payout;
    }

    public function setIdentificationNumber1($val)
    {
        $this->leadFields['identification_number1'] = $val;
    }

    public function setIdentificationNumber2($val)
    {
        $this->leadFields['identification_number2'] = $val;
    }

    public function setSupplierSubid1($val)
    {
        $this->leadFields['supplier_subid1'] = $val;
    }

    public function setSupplierSubid2($val)
    {
        $this->leadFields['supplier_subid2'] = $val;
    }

    public function setSupplierSubid3($val)
    {
        $this->leadFields['supplier_subid3'] = $val;
    }

    public function setSupplierSubid4($val)
    {
        $this->leadFields['supplier_subid4'] = $val;
    }

    public function setSupplierSubid5($val)
    {
        $this->leadFields['supplier_subid5'] = $val;
    }

    public function getTitle()
    {
        return isset($this->leadFields['title']) ? $this->leadFields['title'] : null;
    }

    public function setTitle($title)
    {
        $this->leadFields['title'] = $title;
    }

    public function getGender()
    {
        return isset($this->leadFields['gender']) ? $this->leadFields['gender'] : null;

    }

    public function setGender($gender)
    {
        $this->leadFields['gender'] = $gender;
    }

    public function getAge()
    {
        return isset($this->leadFields['age']) ? $this->leadFields['age'] : null;

    }

    public function setAge($age)
    {
        $this->leadFields['age'] = $age;

    }

    public function getDomain()
    {
        return isset($this->leadFields['domain']) ? $this->leadFields['domain'] : null;

    }

    public function setDomain($domain)
    {
        $this->leadFields['domain'] = $domain;

    }

    public function getTrafficSourceName()
    {
        return isset($this->leadFields['traffic_source_name']) ? $this->leadFields['traffic_source_name'] : null;

    }

    public function setTrafficSourceName($trafficSourceName)
    {
        $this->leadFields['traffic_source_name'] = $trafficSourceName;

    }

    public function getTrafficSourceType()
    {
        return isset($this->leadFields['traffic_source_type']) ? $this->leadFields['traffic_source_type'] : null;

    }

    public function setTrafficSourceType($trafficSourceType)
    {
        $this->leadFields['traffic_source_type'] = $trafficSourceType;

    }

    public function getTrafficSourceValue()
    {
        return isset($this->leadFields['traffic_source_value']) ? $this->leadFields['traffic_source_value'] : null;

    }

    public function setTrafficSourceValue($trafficSourceValue)
    {
        $this->leadFields['traffic_source_value'] = $trafficSourceValue;

    }

    public function getIntegrationStatusId()
    {
        return isset($this->leadFields['integration_status_id']) ? $this->leadFields['integration_status_id'] : null;

    }

    public function setIntegrationStatusId($integrationStatusId)
    {
        $this->leadFields['integration_status_id'] = $integrationStatusId;

    }

    public function getIntegrationAt()
    {
        return isset($this->leadFields['integration_at']) ? $this->leadFields['integration_at'] : null;

    }

    public function setIntegrationAt($integrationAt)
    {
        $this->leadFields['integration_at'] = $integrationAt;

    }

    public function getIntegrationResponse()
    {
        return isset($this->leadFields['integration_response']) ? $this->leadFields['integration_response'] : null;

    }

    public function setIntegrationResponse($integrationResponse)
    {
        $this->leadFields['integration_response'] = $integrationResponse;

    }

    public function getUserAgent()
    {
        return isset($this->leadFields['user_agent']) ? $this->leadFields['user_agent'] : null;

    }

    public function setUserAgent($userAgent)
    {
        $this->leadFields['user_agent'] = $userAgent;

    }

    public function getBrowserLanguage()
    {
        return isset($this->leadFields['browser_language']) ? $this->leadFields['browser_language'] : null;

    }

    public function setBrowserLanguage($browserLanguage)
    {
        $this->leadFields['browser_language'] = $browserLanguage;

    }

    public function getBrowserName()
    {
        return isset($this->leadFields['browser_name']) ? $this->leadFields['browser_name'] : null;

    }

    public function setBrowserName($browserName)
    {
        $this->leadFields['browser_name'] = $browserName;

    }

    public function getBrowserVersion()
    {
        return isset($this->leadFields['browser_version']) ? $this->leadFields['browser_version'] : null;

    }

    public function setBrowserVersion($browserVersion)
    {
        $this->leadFields['browser_version'] = $browserVersion;

    }

    public function getOperatingSystem()
    {
        return isset($this->leadFields['operating_system']) ? $this->leadFields['operating_system'] : null;

    }

    public function setOperatingSystem($operatingSystem)
    {
        $this->leadFields['operating_system'] = $operatingSystem;

    }

    public function getOperatingSystemFullName()
    {
        return isset($this->leadFields['operating_system_full_name']) ? $this->leadFields['operating_system_full_name'] : null;

    }

    public function setOperatingSystemFullName($operatingSystemFullName)
    {
        $this->leadFields['operating_system_full_name'] = $operatingSystemFullName;

    }

    public function getIsMobile()
    {
        return isset($this->leadFields['is_mobile']) ? $this->leadFields['is_mobile'] : null;

    }

    public function setIsMobile($isMobile)
    {
        $this->leadFields['is_mobile'] = $isMobile;

    }

    public function getDeviceType()
    {
        return isset($this->leadFields['device_type']) ? $this->leadFields['device_type'] : null;

    }

    public function setDeviceType($deviceType)
    {
        $this->leadFields['device_type'] = $deviceType;

    }

    public function getSource()
    {
        return isset($this->leadFields['source']) ? $this->leadFields['source'] : null;

    }

    public function setSource($source)
    {
        $this->leadFields['source'] = $source;

    }

    public function getSourceReference()
    {
        return isset($this->leadFields['source_reference']) ? $this->leadFields['source_reference'] : null;

    }

    public function setSourceReference($sourceReference)
    {
        $this->leadFields['source_reference'] = $sourceReference;

    }

    public function addExtraField($fieldName, $fieldValue)
    {
        if (!isset($this->extraFields))
        {
            $this->extraFields = array();
        }

        $this->extraFields[$fieldName] = $fieldValue;
    }

    public function getExtraField($fieldName)
    {
        if (!isset($this->extraFields) || !isset($this->extraFields[$fieldName]))
        {
            return null;
        }

        return $this->extraFields[$fieldName];
    }

    public function getLeadFields()
    {
        return $this->leadFields;
    }

    public function getExtraFields()
    {
        return $this->extraFields;
    }


    /**
     * Sends a lead to Smark.io using Smark.io API.
     *
     * @param null|string $api_base_url API base url. If null, default is used.
     *
     * @return mixed
     */
    public function send($api_base_url = null)
    {
        $sendFields = array('lead' => $this->getLeadFields());

        if (count($this->getExtraFields()) > 0)
        {
            $sendFields['extra'] = $this->getExtraFields();
        }

        return SendLead::send($this->getApiToken(), $sendFields, $api_base_url);
    }

}
