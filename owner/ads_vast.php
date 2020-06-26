<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdsApi;
use Adserver\Model\AdVastLinear;
use Adserver\Model\AdRequest;

$api = new AdsApi(null, $conf);

$request = new AdRequest();
$request->setIdcampaign(51990);
$request->setIsActive(1);
$request->setName('test image banner');
$request->setUrl('http://example.com');

$details = new AdVastLinear();

$banner = file_get_contents(__DIR__ . '/../assets/video.mp4');

$details->setFile(base64_encode($banner));
$request->setDetails($details);

$ad = $api->createAd(10, $request);

var_dump($ad);

$request = new AdRequest();
$request->setIsActive(0);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res->getIsActive());

$request = new AdRequest();
$request->setName('test-renamed-vast');

var_dump((string)$request);

$res = $api->updateAd($ad->getId(), $request);

var_dump($res);
