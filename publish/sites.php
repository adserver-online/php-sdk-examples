<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\PubSitesApi;
use Adserver\Model\PubSiteRequest;

$api = new PubSitesApi(null, $conf);

$site = $api->pubGetSite(1342);

var_dump($site);

$request = new PubSiteRequest();
$request->setIsActive(0);

$res = $api->pubUpdateSite(1342, $request);

echo 'Current status: ', $res->getStatus()['name'], PHP_EOL;

$request = new PubSiteRequest();
$request->setName('test');
$request->setIsActive(1);
$request->setUrl('https://example2.com');
$request->setIdcategory(6);

$res = $api->pubCreateSite($request);

var_dump($res->getId());

//var_dump($res);

