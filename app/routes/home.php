<?php

use Double\Models\User;

$app->get('/', function() use ($app) {
    $args = array(
            "name"  => "Mateus",
            "age"   => "19"
        );
    $app->render('home.php', $args);
})->name('Home');
