<?php
class Staff extends Conectar{
    public function get_staff(){
        $conectar = parent::conexion();
            parent::set_names();
            $sql = "call sp_l_staff_01()";
            $sql= $conectar->prepare($sql);
            $sql->execute();
            return $resultado= $sql->fetchAll();
    }
}
?>