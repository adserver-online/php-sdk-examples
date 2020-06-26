<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdvCampaignsApi;
use Adserver\Model\AdvCampaignRequest;

$api = new AdvCampaignsApi(null, $conf);

$campaign = $api->advGetCampaign(51990);

var_dump($campaign);

$request = new AdvCampaignRequest();
$request->setIdrunstatus(4010); //run
//$request->setIdcategory(7);

$res = $api->advUpdateCampaign(51990, $request);

echo 'Current status: ', $res->getRunstatus()['name'], PHP_EOL;

$request = new AdvCampaignRequest();
$request->setName('test advert');
$request->setIdrunstatus(4020); //pause
$request->setIdcategory(7);

$res = $api->advCreateCampaign($request);

var_dump($res->getId());

//$res = $api->advDeleteCampaign($res->getId());

//var_dump($res);

