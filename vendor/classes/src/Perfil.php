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



    public function loadByid($id)
    {        
        $result = $this->sql->select("SELECT * FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id] );
        return $result;
    }



    public function deleteById($id)
    {
        $this->sql->select("DELETE FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id]);        
    }



    public static function listById()
    {           
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_perfil ORDER BY idperfil");
    }

   

    public function insert()
    {        
        $result = $this->sql->select("CALL sp_usuarios_insert(:nome_usu, :data_nasc)", array(
            ':nome_usu'=>$this->getNomeusu(),
            ':data_nasc'=>$this->getDatanasc()
        ));        
            $this->setData($result[0]);   
    }   



    //Para poupar escrita de código
    public function setData($data)
    {        
        $this->setNomeusu($data['nome_usu']);
        $this->setDatanasc($data['data_nasc']);                     
    }


}


?>