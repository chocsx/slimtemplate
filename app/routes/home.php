<?php

use Double\Models\User;

$app->get('/', function() use ($app) {

    $app->render('home.php');
});
