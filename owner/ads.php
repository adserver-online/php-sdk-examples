<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\AdsApi;

$api = new AdsApi(null, $conf);

$ads = $api->getAds(45592);

var_dump($ads);