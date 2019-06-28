<?php

require_once __DIR__ . '/bootstrap.php';

$res = $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($_POST['id'])]);

header('Location: /index.php');
die();
