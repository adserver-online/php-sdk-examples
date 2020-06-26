<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdvAdsApi;
use Adserver\Model\AdRequest;
use Adserver\Model\AdBannerHtml;

$api = new AdvAdsApi(null, $conf);

$request = new AdRequest();
$request->setIsActive(1);
$request->setName('adv test ad');
$request->setUrl('http://example.com');

$details = new AdBannerHtml();

$details->setContentHtml('<h1>Hello</h1>');
$details->setIddimension(1);

$request->setDetails($details);

$res = $api->advCreateAd(51990, 3, $request);

var_dump($res);

$request = new AdRequest();
$request->setName('test-renamed');

var_dump((string)$request);

$res = $api->advUpdateAd($res->getId(), $request);

var_dump($res);
