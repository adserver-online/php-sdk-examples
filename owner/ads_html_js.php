<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\AdsApi;
use Adserver\Model\AdBannerHtml;
use Adserver\Model\AdRequest;

$api = new AdsApi(null, $conf);

$request = new AdRequest();
$request->setIdcampaign(45592);
$request->setIsActive(1);
$request->setName('test html/js banner');
$request->setUrl('http://example.com');

$details = new AdBannerHtml();

$details->setContentHtml('<h1>Hello</h1>');
$details->setIddimension(1);

$request->setDetails($details);

$ad = $api->createAd(3, $request);

var_dump($ad);

$request = new AdRequest();
$request->setIsActive(0);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res->getIsActive());

$request = new AdRequest();
$request->setName('test-renamed-html-js');

var_dump((string)$request);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res);
