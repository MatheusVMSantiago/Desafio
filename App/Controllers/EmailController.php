<?php

namespace App\Controllers;

use App\Model\Page;
use App\DAO\Connect;
use App\DAO\EmailDAO;

$app->get('/listemail', function()
{    
    $nomecaixa = $_GET['nomecaixa'];   
    $namepage = "Lista";
    $list = EmailDAO::listEmails($nomecaixa);
    $page = new Page();
    $page->setTpl("list-email", array(
        'namepage'=>$namepage,
        'nomecaixa'=>$nomecaixa,
        'list'=>$list        
    ));
});

$app->post('/listemail/cadastro', function()
{
    $data = $_POST;
    $sql = new Connect();
    $perfilCon = new EmailDAO($sql);   
    $direcionamento = "/listemail?nomecaixa=". $data['nomecaixa'];    
                      
    if (!empty($data['email_caixa']))
    {   
        $direcionamento = "/listemail?nomecaixa=". $data['nomecaixa'];       
        $perfilCon->setEmail($data['email_caixa']);         
        $perfilCon->insertEmail();   
        header("Location: $direcionamento");
        exit;
    }
        header("Location: $direcionamento");
        exit;       
});




