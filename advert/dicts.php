<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../obtain_token.php';

use Adserver\Api\AdvOtherApi;

$api = new AdvOtherApi(null, $conf);

var_dump($api->advGetDictionaries());
