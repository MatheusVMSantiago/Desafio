<?php

//CRUD DOS PERFIS

namespace App;

use App\DB\Sql;

class Perfil
{
    private $idperfil;
    private $nome_usu;
    private $data_nasc;    

    public function getIdperfil()
    {
        return $this->idperfil;
    }

    public function setIdperfil($value)
    {
        $this->idperfil = $value;
    }

    public function getNomeusu()
    {
        return $this->nome_usu;
    }

    public function setNomeusu($value)
    {
        $this->nome_usu = $value;
    }

    public function getDatanasc()
    {
        return $this->data_nasc;
    }

    public function setDatanasc($value)
    {
        $this->data_nasc = $value;
    }
        

    public function __construct($sql)
    {
        $this->sql = $sql;
    } 

    
    public function setData($data)
    {                        
        $this->setNomeusu($data['nome_usu']);
        $this->setDatanasc($data['data_nasc']);                           
    }
    

    public function deleteById($id)
    {
        $this->sql->select("DELETE FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id]);        
    }

    public static function listAllId()
    {           
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_perfil ORDER BY idperfil");
    } 
    
    public function listById($id)
    {
        $results = $this->sql->select("SELECT * FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id]);
        return $results;
    }
   

    public function insert()
    {        
        $this->sql->select("INSERT INTO tb_perfil (nome_usu, data_nasc) VALUES (:nome_usu,:data_nasc) ", array(
            ':nome_usu'=>$this->getNomeusu(),
            ':data_nasc'=>$this->getDatanasc()
        ));                     
    }


    public function update()
    {        
        $this->sql->select("UPDATE tb_perfil SET nome_usu = :nome_usu, data_nasc = :data_nasc WHERE idperfil = :idperfil", array(            
            ':nome_usu'=>$this->getNomeusu(),
            ':data_nasc'=>$this->getDatanasc(),
            ':idperfil'=>$this->getIdperfil()
        ));
    }
 
   


}


?>