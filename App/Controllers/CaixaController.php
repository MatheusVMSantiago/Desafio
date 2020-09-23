<?php

namespace App\Controllers;

use App\DAO\CaixaDAO;
use App\Model\Page;
use App\DAO\Connect;

$app->get('/cadastro', function()
{
    $page = new Page();
    $namepage = "Cadastro";
    $page->setTpl("cadastro", array(
        "namepage"=>$namepage
    ));    
});


$app->post('/cadastro', function()
{
    $data = $_POST;
    $sql = new Connect();
    $perfilCon = new CaixaDAO($sql);   

    
    
    if (!empty($data['name_caixa']))
    {         
        $perfilCon->setCaixa($data['name_caixa']);        
        //$perfilCon->insertCaixa();
        $result = $perfilCon->selectId();
        $direcionamento = "listemail?nomecaixa=" . $perfilCon->getCaixa(); 
        var_dump($result); 
        /*             
        header("Location: $direcionamento");                
        exit;*/
    }                            
        /*header("Location: /cadastro");                    
        exit;*/
});