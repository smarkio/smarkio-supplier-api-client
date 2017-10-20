#Smarkio Supplier - API
=========================

An accelerator to communicate with © Smarkio API to create Leads

Installation and usage with Composer
----------


Add the following to your composer.json file in order to fetch the latest stable version of the project:

```json
{
    "require": {
        "smarkio/smarkio-supplier-api-client": "*"
    }
}
```

Then, in order to use the accelerator on your own PHP file, add the following:

```php
require '[COMPOSER_VENDOR_PATH]/autoload.php';
```


Contents
--------

- src/Smarkio/Supplier - Code to interact with the Smarkio Lead API.
- examples/ - Some examples on how to use this accelerator.

Before you start
----------------

You need to obtain one API token to use the API. This token is bound to each user of the Smarkio system details.


# Usage

## Send a Lead


```php
$api_token = 'YOUR API TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

// send the Lead
$response = $lead->send();
```

## Send a Lead with Files associated


```php
$api_token = 'YOUR API TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

//Attach some files to it
$lead->setFiles([
    'photo' => "http://example.com/image.png",
    'cc' => "http://example.com/cc.png"
]);
// send the Lead
$response = $lead->send();
```


## Send a Lead with additional fields

```php
$api_token = 'YOUR API TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

// set Lead's optional parameters
$lead->setFirstName('João');
$lead->setLastName('Silva');
$lead->setPayout('12.12');

// set Lead's extra information
$lead->addExtraField('profession', 'developer');
$lead->addExtraField('nationality', 'portuguese');

// send the Lead
$response = $lead->send();
```

## Force new Lead creation

If you want to force the creation of a new Lead, bypassing the conditions that would update an existing one, use the method setForceNewLeadCreation():

```php
$api_token = 'YOUR API TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

// force new lead creation
$lead->setForceNewLeadCreation(true);

// send the Lead
$response = $lead->send();
```

## Dump lead Info

If you want to receive lead info on response, use the method setDumpLeadInfo():

```php
$api_token = 'YOUR API TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

// dump lead info
$lead->setDumpLeadInfo();

// send the Lead
$response = $lead->send();
```

In this case, the `$response` will contain a new field called `lead_info`.

## User custom API URL

###### European API URL (Default):

```php
$response = $lead->send();
```
or
```php
$response = $lead->send(Lead::API_BASE_URL_EU);
```

###### Brazilian API URL:

```php
$response = $lead->send(Lead::API_BASE_URL_BR);
```

###### Custom API URL:

```php
$response = $lead->send('https://api-custom-example.smark.io');
```

# Response format

The response is a JSON containing at least a 'code' and 'message' fields. The code 200 indicates that the lead was integrated successfully.

```json
{"code":"200","message":"OK","lead_id":"85177", "smkid": "1:rLJGWJLW2mNNS2qq"}
```

# Fields available

The following lead fields are available:

| Parameter name                    |	Max size    | Properties     | Description / Values |
|-----------------------------------|---------------|----------------|----------------------|
| lead[external_id]                 | Varchar(48)   | Mandatory      | Identifier of the lead in the supplier system |
| lead[campaign_external_id]        | Varchar(48)   | Mandatory      | Identifier of the campaign in the supplier system. This will then be mapped to the client campaign in LeadOffice. |
| lead[df_uid]                      | Varchar(255)  | Mandatory      | Digital Fingerprint unique identifier. |
| lead[ip_address]                  | Varchar(48)   | Mandatory      | IP Address of the client when registered the lead. |
| lead[payout]                      | Decimal(20)   | Optional       | The cost that is charged by the supplier to the client for this lead[creation_at]		  | Datetime	  | Optional       | The moment where the lead was created |
| lead[title]                       |               | Optional-closed| One of the following:Miss , Mrs. , Mr. |
| lead[gender]                      |               | Optional-closed| One of the following: M, F |
| lead[first_name]                  | Varchar(255)  | Optional       | First Name |
| lead[last_name]                   | Varchar(255)  | Optional       | Last Name |
| lead[email]                       | Varchar(255)  | Mandatory      | E-mail address |
| lead[phone]                       | Varchar(20)   | Optional       | Phone Number |
| lead[birth_date]                  | Date          | Optional       | Date of birth. Format:YYYY-MM-DD |
| lead[age]                         | Int (3)       | Optional       | Age when lead was generated |
| lead[address]                     | Varchar(255)  | Optional       | Postal address |
| lead[city]                        | Varchar(255)  | Optional       | City |
| lead[zip_code]                    | Varchar(31)   | Optional       | Zip Code |
| lead[identification_number1]      | Int		      | Optional       | Number of document to identify the Lead |
| lead[identification_number2]      | Int		      | Optional       | Number of document to identify the Lead |
| lead[domain]                      | Varchar(255)  | Optional       | Website domain where lead was generated |
| lead[integration_response]        | Varchar(4096) | Optional       | The response provided by the client when lead was integrated with client. Useful to include the rejection reason when lead was rejected. |
| lead[user_agent]                  | Varchar(255)  | Optional       | HTTP_USER_AGENT of the browser the user has used when lead was captured |
| lead[browser_language]            | Varchar(40)   | Optional       | The main/default language of the browser.Can be obtained from HTTP_ACCEPT_LANGUAGE |
| lead[browser_name]                | Varchar(40)   | Optional       | The name of the browser. |
| lead[browser_version]             | Varchar(40)   | Optional       | The version of the browser |
| lead[operating_system]            | Varchar(40)   | Optional       | |
| lead[operating_system_full_name]  | Varchar(40)   | Optional       | |
| lead[is_mobile]                   | Varchar(40)   | Optional       | |
| lead[device_type]                 | Varchar(40)   | Optional       | |
| lead[source]                      | Varchar(40)   | Optional       | |
| lead[source_reference]            | Varchar(40)   | Optional       | |
| lead[site_hash]					| Varchar(255)  | Optional       | |
| lead[utm_source]					| Varchar(255)  | Optional       | Campaign source |
| lead[utm_campaign]			    | Varchar(255)  | Optional       | Campaign name |
| lead[utm_medium]					| Varchar(255)  | Optional       | Campaign medium |
| lead[utm_content]					| Varchar(255)  | Optional       | Campaign content |
| lead[utm_term]					| Varchar(255)  | Optional       | Campaign term |
| lead[click_uid]					| Varchar(255)  | Optional       | Click' unique ID |
| lead[smkid]					    | Varchar(255)  | Optional       | |
| lead[rt_parent_cuid]			    | Varchar(255)  | Optional       | |
| lead[rt_list_id]  			    | Varchar(255)  | Optional       | |
| lead[rt_list_name]  			    | Varchar(255)  | Optional       | |
| lead[rt_list_external_id]		    | Varchar(255)  | Optional       | |
| lead[smk_category]		        | Varchar(255)  | Optional       | |
| lead[smk_subcategory]		        | Varchar(255)  | Optional       | |
| lead[smk_create_new]              | Int		    | Optional       | Use the value '1' to force the creation of a new lead |
| lead[smk_dump_lead_info]          | Int		    | Optional       | Use the value '1' to receive lead info on response |
| lead[geo_country]                 | Varchar(50)   | Optional       | Country name |
| lead[geo_country_code]            | Varchar(10)   | Optional       | Country Code, according to ISO 3166 |
| lead[geo_region]                  | Varchar(50)   | Optional       | Region name |
| lead[geo_region_code]             | Varchar(10)   | Optional       | Region code - This should come in a format "country_code"-"region_code", for instance PT-13 (Porto, Portugal) |
| lead[geo_city]                    | Varchar(50)   | Optional       | City name |
| lead[files][filename]             | string        | Optional       | Values in this field will be uploaded and attached as files related to lead

Extra parameters can be sent via:

| Parameter name                    |	Max size     | Properties     | Description / Values   |
|-----------------------------------|---------------|----------------|------------------------|
| extra[field_name]                 | Varchar(255)  | Optional       | extra field and value. |

Processing flags (NOTE: if both lead field and flag with same name are filled, lead field will have precedence):

| Parameter name                     |	Max size     | Properties     | Description / Values   |
|------------------------------------|---------------|----------------|------------------------|
| flag[smk_update_different_campaign]| Int           | Optional       | Use the value '1' to force the creation of a new lead |
| flag[smk_create_new]               | Int		     | Optional       | Use the value '1' to force the creation of a new lead |
| flag[smk_dump_lead_info]           | Int		     | Optional       | Use the value '1' to receive lead info on response |





