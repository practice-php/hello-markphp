<?php

use Mark\App;

require_once 'vendor/autoload.php';

$api = new App('http://0.0.0.0:3000');

$api->count = 8; // process count

$api->any('/', function ($requst) {
    return 'Hello world';
});

$api->get('/hello/{name}', function ($requst, $name) {
    return "Hello $name";
});

$api->post('/user/create', function ($requst) {
    return json_encode(['code' => 0, 'message' => 'ok']);
});

$api->start();
