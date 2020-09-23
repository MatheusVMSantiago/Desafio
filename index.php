<?php

require_once("vendor/autoload.php");


use App\Model\Rotas;

$app = new \Slim\Slim();

#INDICE
$app->get('/', function()
{
    $acesso = new Rotas;
    $acesso->getIndex(); 
});

#EXIBIR JSON DO PERFIL
$app->get('/json/:idperfil',function($idperfil)
{   
    $acesso = new Rotas;
    $acesso->showJson($idperfil);                
});

#PAG CADASTRO
$app->get('/cadastro', function()
{
   $acesso = new Rotas();
   $acesso->getCadastrado();
});

#REALIZAR CADASTRO
$app->post('/cadastro', function()
{
    $data = $_POST;
    $acesso = new Rotas();
    $acesso->postCadastro($data);   
});

#EXCLUIR PERFIL
$app->get('/index/:idperfil/delete', function($idperfil)
{
    $acesso = new Rotas;
    $acesso->doDelete($idperfil);
});

#PAG UPDATE PERFIL
$app->get('/editar/:idperfil', function($idperfil)
{                   
    $acesso = new Rotas;
    $acesso->getUpdate($idperfil);           
});

#REALIZAR UPDATE
$app->post('/editar/:idperfil', function()
{        
     $data = $_POST;
     $acesso = new Rotas;
     $acesso->postUpdate($data);                      
});

$app->run();
