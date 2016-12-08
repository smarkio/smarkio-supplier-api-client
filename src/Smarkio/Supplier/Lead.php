<?php
/**
 *
 *
 * @author     Vítor Santos <vitor.santos@smark.io>
 * @copyright  2014 Smark.io
 * @license    http://opensource.org/licenses/MIT MIT License
 *
 */

namespace Smarkio\Supplier;

require_once('SendLead.php');

class Lead
{
    const API_BASE_URL_BR = 'https://api-sa.smark.io/';
    const API_BASE_URL_EU = 'https://api.smark.io/';

    // Lead fields array
    private $leadFields = array();

    // Extra fields array
    private $extraFields = array();

    // Lead Relations array
    private $lead_relations = array();

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

    public function getSiteHash()
    {
        return isset($this->leadFields['site_hash']) ? $this->leadFields['site_hash'] : null;

    }

    public function setSiteHash($siteHash)
    {
        $this->leadFields['site_hash'] = $siteHash;

    }

    public function getUtmSource()
    {
        return isset($this->leadFields['utm_source']) ? $this->leadFields['utm_source'] : null;

    }

    public function setUtmSource($utmSource)
    {
        $this->leadFields['utm_source'] = $utmSource;

    }

    public function getUtmCampaign()
    {
        return isset($this->leadFields['utm_campaign']) ? $this->leadFields['utm_campaign'] : null;

    }

    public function setUtmCampaign($utmCampaign)
    {
        $this->leadFields['utm_campaign'] = $utmCampaign;

    }

    public function getUtmMedium()
    {
        return isset($this->leadFields['utm_medium']) ? $this->leadFields['utm_medium'] : null;

    }

    public function setUtmMedium($utmMedium)
    {
        $this->leadFields['utm_medium'] = $utmMedium;

    }

    public function getUtmContent()
    {
        return isset($this->leadFields['utm_content']) ? $this->leadFields['utm_content'] : null;

    }

    public function setUtmContent($utmContent)
    {
        $this->leadFields['utm_content'] = $utmContent;

    }

    public function getUtmTerm()
    {
        return isset($this->leadFields['utm_term']) ? $this->leadFields['utm_term'] : null;

    }

    public function setUtmTerm($utmTerm)
    {
        $this->leadFields['utm_term'] = $utmTerm;

    }

    public function getClickUid()
    {
        return isset($this->leadFields['click_uid']) ? $this->leadFields['click_uid'] : null;

    }

    public function setClickUid($clickUid)
    {
        $this->leadFields['click_uid'] = $clickUid;

    }

    public function getSmkid()
    {
        return isset($this->leadFields['smkid']) ? $this->leadFields['smkid'] : null;

    }

    public function setSmkid($smkid)
    {
        $this->leadFields['smkid'] = $smkid;

    }

    public function getRtParentCuid() {
        return isset($this->leadFields['rt_parent_cuid']) ? $this->leadFields['rt_parent_cuid'] : null;
    }

    public function setRtParentCuid($rtParentCuid) {
        $this->leadFields['rt_parent_cuid'] = $rtParentCuid;
    }

    public function getRtListId() {
        return isset($this->leadFields['rt_list_id']) ? $this->leadFields['rt_list_id'] : null;
    }

    public function setRtListId($rtListId) {
        $this->leadFields['rt_list_id'] = $rtListId;
    }

    public function getRtListName() {
        return isset($this->leadFields['rt_list_name']) ? $this->leadFields['rt_list_name'] : null;
    }

    public function setRtListName($rtListName) {
        $this->leadFields['rt_list_name'] = $rtListName;
    }

    public function getRtListExternalId() {
        return isset($this->leadFields['rt_list_external_id']) ? $this->leadFields['rt_list_external_id'] : null;
    }

    public function setRtListExternalId($rtListExternalId) {
        $this->leadFields['rt_list_external_id'] = $rtListExternalId;
    }

    public function getSmkCategory()
    {
        return isset($this->leadFields['smk_category']) ? $this->leadFields['smk_category'] : null;
    }

    public function setSmkCategory($smk_category)
    {
        $this->leadFields['smk_category'] = $smk_category;
    }

    public function getSmkSubCategory()
    {
        return isset($this->leadFields['smk_subcategory']) ? $this->leadFields['smk_subcategory'] : null;
    }

    public function setSmkSubCategory($smk_subcategory)
    {
        $this->leadFields['smk_subcategory'] = $smk_subcategory;
    }

    public function isForceNewLeadCreation()
    {
        return isset($this->leadFields['smk_create_new']) && $this->leadFields['smk_create_new'] === "1";
    }

    public function setForceNewLeadCreation($forceNewLeadCreation = true)
    {
        if ($forceNewLeadCreation)
        {
            $this->leadFields['smk_create_new'] = "1";
        }
        else
        {
            unset($this->leadFields['smk_create_new']);
        }
    }

    public function isDumpLeadInfo()
    {
        return isset($this->leadFields['smk_dump_lead_info']) && $this->leadFields['smk_dump_lead_info'] === "1";
    }

    public function setDumpLeadInfo($dumpLeadInfo = true)
    {
        if ($dumpLeadInfo)
        {
            $this->leadFields['smk_dump_lead_info'] = "1";
        }
        else
        {
            unset($this->leadFields['smk_dump_lead_info']);
        }
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

    public function getLeadRelations(){
        return $this->lead_relations;
    }

    public function addLeadRelation($relation_type,$related_lead_id){
        $this->lead_relations[]= array($related_lead_id => $relation_type);
    }


    /**
     * Sends a lead to Smark.io using Smark.io API.
     *
     * @param string $api_base_url API base url. If null, default is used.
     *
     * @return mixed
     */
    public function send($api_base_url = self::API_BASE_URL_EU)
    {
        $sendFields = array('lead' => $this->getLeadFields());

        if (count($this->getExtraFields()) > 0)
        {
            $sendFields['extra'] = $this->getExtraFields();
        }

        if (count($this->getLeadRelations()) > 0)
        {
            $sendFields['relations'] = $this->getLeadRelations();
        }

        return SendLead::send($this->getApiToken(), $sendFields, $api_base_url);
    }

}
