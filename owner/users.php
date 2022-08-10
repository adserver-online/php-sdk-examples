<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../init.php';

use Adserver\Api\UsersApi;
use Adserver\Model\UserRequest;

$api = new UsersApi(null, $conf);

$users = $api->getUsers();

var_dump($users);

$request = new UserRequest();
$request->setName('test user');
$request->setEmail('test@example.com');
$request->setIsActive(1);
$request->setAllowLogin(1);
$request->setIdcloudrole(4);

$user = $api->createUser($request);

var_dump($user);