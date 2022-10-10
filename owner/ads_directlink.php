<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\AdsApi;
use Adserver\Model\AdDirectLink;
use Adserver\Model\AdRequest;

$api = new AdsApi(null, $conf);

$request = new AdRequest();
$request->setIdcampaign(45592);
$request->setIsActive(1);
$request->setName('test direct link');
$request->setUrl('http://example.com?directlink');

$details = new AdDirectLink();

$request->setDetails($details);

$ad = $api->createAd(5, $request);

var_dump($ad);

$request = new AdRequest();
$request->setIsActive(0);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res->getIsActive());

$request = new AdRequest();
$request->setName('test-renamed-link');

var_dump((string)$request);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res);
