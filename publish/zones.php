<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\PubZonesApi;
use Adserver\Model\PubZoneRequest;

$api = new PubZonesApi(null, $conf);

$zone = $api->pubGetZone(35954);

var_dump($zone);

$request = new PubZoneRequest();
$request->setIsActive(1);
$request->setName('test zone');

$zone = $api->pubUpdateZone(35954, $request);

$request = new PubZoneRequest();
$request->setIsActive(1);
$request->setName('test zone');
$request->setIdzoneformat(6);
$request->setIddimension(5);

var_dump($request->jsonSerialize());

$zone = $api->pubCreateZone(1342, $request);

var_dump($zone);
