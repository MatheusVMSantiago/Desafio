<form action="/insert" method="post">
    <input type="text" name="nome_usu" id="nome_usu">   
    <input type="text" name="data_nasc" id="data_nasc"> 
    <input type="submit" value="Cadastrar"/>
</form>

<?php

require_once("vendor/autoload.php");

use App\DB\Sql;
use App\Perfil;


$app = new \Slim\Slim();
$sql = new Sql();


$app->get('/', function()
{
   echo "escreva qualquer merda ai";
});

//insere no DB - funcional
$app->post('/insert', function()
{
    $sql = new Sql();
    $perfilCon = new Perfil($sql);   
    $perfilCon->setData($_POST);
    $perfilCon->insert();
    echo "Cadastrado com Sucesso";
});



//Vizualizas Lista de perfis
/*
$list = new Perfil($sql);
$listusu = $list->listById();
echo json_encode($listusu);
*/


//Visualizar perfis por ID passado
/*
$usuRepo = new Perfil($sql);
$usu = $usuRepo->loadByid(3);
echo json_encode($usu);
*/



//Incluir perfil
/*
$perfilCon = new Perfil($sql);
$perfilCon->setNomeusu("Ronaldinho Diabo");
$perfilCon->setDatanasc("6666-06-66");
$perfilCon->insert();
*/

//Alterar perfil




//Excluir perfil
/*
$perfilEx = new Perfil($sql);
$perfilEx->deleteById(4);
echo "excluido modafoca";
*/


$app->run();

?>