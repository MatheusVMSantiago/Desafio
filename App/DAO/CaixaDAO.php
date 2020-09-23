<?php

namespace App\DAO;

use Exception;

class CaixaDAO
{
    private $namecaixa;
    private $sql;
    
    public function __construct($sql)
    { 
        return $this->sql = $sql;
    }

    public function getCaixa()
    {
        return $this->namecaixa;
    }

    public function setCaixa($namecaixa)
    {
        $this->namecaixa = $namecaixa;
    }

    public function insertCaixa()
    {        
       $this->sql->select("INSERT INTO tb_caixa (nome_caixa) VALUES (:name_caixa) ", [
           ':name_caixa'=>$this->getCaixa()
       ]);
    }

    public function selectId()
    {
        return $this->sql->select("SELECT * FROM tb_caixa where nome_caixa = :name_caixa ORDER BY id_caixa",[
            ':name_caixa'=>$this->getCaixa()
        ]);
    }
}