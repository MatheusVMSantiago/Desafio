<?php

require_once("vendor/autoload.php");

use App\DB\Sql;
use App\Perfil;

$app = new \Slim\Slim();


$app->get('/', function() {
    
    $sql = new Sql();
    
    $usuarioRepo = new Perfil($sql);

    $usuario = $usuarioRepo->loadByid(1);

    echo json_encode($usuario);

});

$app->run();




?>