<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\ZonesApi;
use Adserver\Model\ZoneRequest;

$api = new ZonesApi(null, $conf);

$zone = $api->getZone(35954);

var_dump($zone);

$request = new ZoneRequest();
$request->setIsActive(1);
$request->setName('test zone');

$zone = $api->updateZone(35954, $request);

$request = new ZoneRequest();
$request->setIsActive(1);
$request->setName('test zone');
$request->setIdzoneformat(6);
$request->setIddimension(5);

var_dump($request->jsonSerialize());

$zone = $api->createZone(1342, $request);

var_dump($zone);
