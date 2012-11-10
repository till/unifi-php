#!/usr/bin/env php
<?php
$port   = 27117;
$dbname = 'ace';

$mongo  = new Mongo(sprintf('mongodb://localhost:%d', $port));
$ace    = $mongo->selectDB($dbname);
$admin  = new MongoCollection($ace, 'admin');
$cursor = $admin->find();
foreach ($cursor as $doc) {
    echo "Username: " . $doc['name'] . PHP_EOL;
    echo "Password: " . $doc['x_password'] . PHP_EOL;
}

echo PHP_EOL;
echo "I got curious, here are more collections:" . PHP_EOL . PHP_EOL;

foreach ($ace->listCollections() as $c) {
    echo "Name: " . $c->getName() . PHP_EOL;
/*
    echo "Content: " . PHP_EOL;
    foreach ($c->find() as $doc) {
        var_dump($doc);
    }
*/
}
