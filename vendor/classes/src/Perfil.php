<?php

//CRUD DOS PERFIS

namespace App;

class Perfil
{

    private $nome_usu;
    private $data_nasc;

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
        $this->sql->query("DELETE FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id]);        
    }



    public function listById()
    {           
                return $this->sql->select("SELECT * FROM tb_perfil ORDER BY idperfil");
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