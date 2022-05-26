<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\AdvOtherApi;

$api = new AdvOtherApi(null, $conf);

var_dump($api->advGetDictionaries());
