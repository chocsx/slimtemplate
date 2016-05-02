<?php

use Double\Models\User;

$app->get('/', function() use ($app) {
    $args = array(
            "name"  => "Mateus",
            "age"   => "19"
        );
    $app->render('home.php', $args);
})->name('Home');

$app->post('/myname', function() use ($app){
	$my_name = $_POST['my_name'];
	echo "hello {$my_name}";
});

$app->get('/array', function() use ($app){
	$busca = [];
	$busca['finalidade'] = "venda";
	$busca['cidade'] = "Porto Alegre";
	
	var_dump($busca);
});