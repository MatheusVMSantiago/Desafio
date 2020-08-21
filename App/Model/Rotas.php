<?php

namespace App\Model;

use App\Model\Page;
use App\DAO\Connect;
use App\DAO\DAOPerfil;

class Rotas
{    
    public function getIndice()
    {
        $page = new Page();  
        $idperfil = DAOPerfil::listAllId();
        $page->setTpl("index", array(
        "idperfil"=>$idperfil
        ));  
    }

    public function showJson($idperfil)
    {
        $sql = new Connect();
        $listar = new DAOPerfil($sql);
        $mostrar = $listar->listById($idperfil);
        echo json_encode($mostrar); 
    }

    public function getCadastrado()
    {
        $page = new Page();
        $page->setTpl("cadastro");    
    }

    public function postCadastro($data)
    {
        $sql = new Connect();
        $perfilCon = new DAOPerfil($sql);   
                      
        if (!empty($data['nome_usu']) && !empty($data['data_nasc']))
        {           
            $perfilCon->setData($data);            
            $perfilCon->insert(); 
            header("Location: /");                
            exit; 
        }                            
            header("Location: /cadastro");                    
            exit;
    }

    public function doDelete($idperfil)
    {
        $sql = new Connect();
        $perfilEx = new DAOPerfil($sql);
        $perfilEx->deleteById($idperfil);
        header("Location: /");
        exit;
    }

    public function getUpdate($idperfil)
    {
        $page = new Page();
        setcookie("idperfil", $idperfil);
        $page->setTpl("editar",array(
            "idperfil"=>$idperfil
        ));
    }

    public function postUpdate($data)
    {
        $sql = new Connect;
        $perfilUp = new DAOPerfil($sql);

        if (isset($_COOKIE["idperfil"]))
        {
            if (!empty($data['nome_usu']) && !empty($data['data_nasc']))
            {    
                $perfilUp->setData($data);
                $perfilUp->setIdperfil($_COOKIE["idperfil"]);
                $perfilUp->update();                
                header("Location: /");                
                exit; 
            } 
                header("Location: /");
                exit; 
        }
    }
}
