<?php

require_once __DIR__ . '/vendor/autoload.php';

//rename config.dist.php to config.php and configure your own values
include_once __DIR__ . '/config.php';

$conf = new \Adserver\Configuration();

if (DEV_MODE === true) {
    //$conf->setDebug(true);
    $conf->setHost(ENDPOINT);
}

//echo 'Access token: ', TOKEN, PHP_EOL;

$conf->setAccessToken(TOKEN);