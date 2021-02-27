<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdsApi;
use Adserver\Model\AdBannerImage;
use Adserver\Model\AdRequest;

$api = new AdsApi(null, $conf);

$request = new AdRequest();
$request->setIdcampaign(45592);
$request->setIsActive(1);
$request->setName('test image banner');
$request->setUrl('http://example.com');

$details = new AdBannerImage();

$banner = file_get_contents(__DIR__ . '/../assets/banner240x400.jpg');

$details->setFile(base64_encode($banner));
$details->setIddimension(5);

$request->setDetails($details);

$ad = $api->createAd(2, $request);

var_dump($ad);

$request = new AdRequest();
$request->setIsActive(0);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res->getIsActive());

$request = new AdRequest();
$request->setName('test-renamed-banner');

var_dump((string)$request);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res);
