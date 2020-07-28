<?php

require_once("vendor/autoload.php");

use App\DB\Sql;
use App\Perfil;
use App\Page;

$app = new \Slim\Slim();
$sql = new Sql();


$app->get('/',function()
{
        $page = new Page();  
        $idperfil = Perfil::listAllId();
        $page->setTpl("index", array(
        "idperfil"=>$idperfil
            )
        );
});

$app->get('/json/:idperfil',function($idperfil)
    {   
        $sql = new Sql();
        $listar = new Perfil($sql);
        $mostrar = $listar->listById($idperfil);
        echo json_encode($mostrar);                 
    }
);


$app->get('/cadastro', function()
{
    $page = new Page();
    $page->setTpl("cadastro");
});



$app->post('/cadastro', function()
{
    $sql = new Sql();
    $perfilCon = new Perfil($sql);    
            
                
    if (!empty($_POST['nome_usu']) && !empty($_POST['data_nasc']))
    {            
        $perfilCon->setData($_POST);            
        $perfilCon->insert(); 
        header("Location: /");                
        exit; 
    } else {
        header("Location: /cadastro");
        exit; 
    }                          
});



$app->get('/index/:idperfil/delete', function($idperfil)
{
    $sql = new Sql();
    $perfilEx = new Perfil($sql);
    $perfilEx->deleteById($idperfil);
    header("Location: /");
    exit;
});



$app->get('/editar/:idperfil', function($idperfil)
    {                   
    $page = new Page(); 

    setcookie("idperfil", $idperfil);

    $page->setTpl("editar",array(
        "idperfil"=>$idperfil
    ));           
});



$app->post('/editar/:idperfil', function()
{        
    $sql = new Sql();
    $perfilUp = new Perfil($sql);

    if (isset($_COOKIE["idperfil"]))
    {
        if (!empty($_POST['nome_usu']) && !empty($_POST['data_nasc']))
        {    
            $perfilUp->setData($_POST);
            $perfilUp->setIdperfil($_COOKIE["idperfil"]);
            $perfilUp->update();
            var_dump($perfilUp);
            header("Location: /");                
            exit; 
            } else {
                header("Location: /");
                exit; 
        }
    }                       
});


$app->run();

?>