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
        $page = new Page();  
        $idperfil = Perfil::listById();
        $page->setTpl("index", array(
        "idperfil"=>$idperfil
            )
        );
    }  
);


$app->get('/cadastro', function()
    {
       $page = new Page();
       $page->setTpl("cadastro");
    }
);


//ROTA insere no DB - funcional
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
        
}
);


//ROTA Delete Funcional
$app->get('/index/:idperfil/delete', function($idperfil)
    {
        $sql = new Sql();
        $perfilEx = new Perfil($sql);
        $perfilEx->deleteById($idperfil);
        header("Location: /");
        exit;
    }
);



$app->run();

?>