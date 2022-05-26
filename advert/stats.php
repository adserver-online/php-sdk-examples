<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\AdvReportsApi;

$api = new AdvReportsApi(null, $conf);

echo 'Stats report', PHP_EOL;

$stats = $api->advGetStats('2020-01-02', '2020-02-02', 'day', 'UTC');


foreach ($stats as $row) {
    echo $row->getDimension(), ' ', $row->getImpressions(), ' ', $row->getClicks(), PHP_EOL;
}