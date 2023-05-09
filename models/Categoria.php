<?php
    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "call sp_l_incidencias_01()";
            $sql= $conectar->prepare($sql);
            $sql->execute();
            return $resultado= $sql->fetchAll();
        }
    }
?>