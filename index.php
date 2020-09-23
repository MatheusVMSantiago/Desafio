<?php

require_once("vendor/autoload.php");

use App\Model\Page;

$app = new \Slim\Slim();

require_once("App/Controllers/CaixaController.php");
require_once("App/Controllers/EmailController.php");

$app->get('/', function()
{
    $page = new Page();
    $namepage = "Home";
    $page->setTpl("index", array(         
        "namepage"=>$namepage
    )); 
});

$app->run();
