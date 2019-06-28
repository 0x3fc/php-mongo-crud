<?php

require_once __DIR__ . '/bootstrap.php';

$collection->insertOne(['content' => $_POST['content']]);

header('Location: /index.php');
die();
