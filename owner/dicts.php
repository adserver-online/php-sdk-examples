<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\OtherApi;

$api = new OtherApi(null, $conf);

var_dump($api->getDictionaries());
