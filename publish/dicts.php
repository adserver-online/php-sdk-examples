<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\PubOtherApi;

$api = new PubOtherApi(null, $conf);

var_dump($api->pubGetDictionaries());
