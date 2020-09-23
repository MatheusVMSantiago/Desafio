<?php

namespace App\DAO;

use App\DAo\Connect;

class EmailDAO
{
    private $email;
    private $idcaixa;
    private $nomecaixa;
    private $sql;
    
    public function __construct($sql)
    { 
        return $this->sql = $sql;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getIdcaixa()
    {
        return $this->idcaixa;
    }

    public function setIdcaixa($idcaixa)
    {
        $this->idcaixa = $idcaixa;
    }

    public function getNomeCaixa()
    {
        return $this->idcaixa;
    }

    public function setNomeCaixa($nomecaixa)
    {
        $this->nomecaixa = $nomecaixa;
    }

    public function insertEmail()
    {
       $this->sql->select("INSERT into tb_email(email_caixa, id_caixa) values (:email_caixa, :nomecaixa)", array(
           ':email_caixa'=>$this->getEmail(),
           ':nomecaixa'=>$this->getNomeCaixa())
        );
    }

    public function selectId()
    {
        $this->sql->select("SELECT tb_caixa.id_caixa, tb_email.email_caixa from tb_caixa join tb_email on tb_caixa.id_caixa =  tb_email.caixa where tb_caixa.nome_caixa = :nomecaixa", [
            ':nomecaixa'=>$this->getNomeCaixa()
        ]);
    }

    public static function listEmails($caixa)
    {
        $sql = new Connect();
        return $sql->select("SELECT tb_caixa.id_caixa, tb_email.email_caixa from tb_caixa join tb_email on tb_caixa.id_caixa =  tb_email.id_caixa where tb_caixa.nome_caixa = :nomecaixa", [
            ':nomecaixa'=>$caixa
        ]);
    }
}

