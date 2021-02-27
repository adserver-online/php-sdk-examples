<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\SitesApi;
use Adserver\Model\SiteRequest;

$api = new SitesApi(null, $conf);

$site = $api->getSite(1342);

var_dump($site);

$request = new SiteRequest();
$request->setIsActive(0);

$res = $api->updateSite(1342, $request);

echo 'Current status: ', $res->getStatus()['name'], PHP_EOL;

$request = new SiteRequest();
$request->setName('test');
$request->setIsActive(1);
$request->setUrl('https://example2.com');
$request->setIdcategory(6);
$request->setIdpublisher(1);

$res = $api->createSite($request);

var_dump($res->getId());

//var_dump($res);

