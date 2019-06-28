<?php

use MongoDB\Client;

require_once __DIR__ . "/vendor/autoload.php";

$HOST = 'database';
$USERNAME = 'user';
$PASSWORD = 'password';

$collection = (new Client("mongodb://$USERNAME:$PASSWORD@$HOST:27017"))->crud->posts;
