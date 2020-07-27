<?php

require_once("vendor/autoload.php");

use App\DB\Sql;
use App\Perfil;
use App\Page;

$app = new \Slim\Slim();
$sql = new Sql();


// Tela Inicial = Mostrar todos os usuarios cadastrados
$app->get('/',function()
{   
   // $sql = new Sql();
   // $list = new Perfil($sql);
   // $listusu = $list->listById();
   // echo json_encode($listusu);
   $page = new Page();  
    $idperfil = Perfil::listById();

   $page->setTpl("index", array(
       "idperfil"=>$idperfil
   ));


});


//ROTA insere no DB - funcional
$app->post('/cadastro', function()
{
    $sql = new Sql();
    $perfilCon = new Perfil($sql);
    $perfilCon->setData($_POST);               
    $perfilCon->insert();
    echo "Cadastrado com Sucesso";  
});


//ROTA Delete Funcional
$app->get('/delete/:idperfil', function($idperfil)
{
    $sql = new Sql();
    $perfilEx = new Perfil($sql);
    $perfilEx->deleteById($idperfil);
    echo "excluido modafoca";
});





//Visualizar perfis por ID passado
/*
$usuRepo = new Perfil($sql);
$usu = $usuRepo->loadByid(3);
echo json_encode($usu);
*/




$app->run();

?>