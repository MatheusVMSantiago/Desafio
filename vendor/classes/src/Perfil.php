<?php

namespace App;

class Perfil
{
    public function __construct($sql)
    {
        $this->sql = $sql;
    } 

    public function loadByid($id)
    {        
        $result = $this->sql->select("SELECT * FROM tb_perfil WHERE idperfil = :ID", [":ID"=>$id] );
        return $result;
    }

}


?>