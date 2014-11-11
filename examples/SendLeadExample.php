<?php
/*
 * An example on how to create a Lead
 * and how to use the API to send it to Smark.io.
 */

require __DIR__ . '/../src/Smarkio/Supplier/Lead.php';

use Smarkio\Supplier\Lead;

$api_token = 'INSERT YOUR TOKEN HERE';
$external_id = '3';
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

// set Lead's relations
$lead->addLeadRelation('family', 123456);
$lead->addLeadRelation('family', 654321);

// send the Lead
$response = $lead->send();

echo "API Response: '{$response}'\n";

