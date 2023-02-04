<?php
class Staff extends Conectar{
    public function get_staff(){
        $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_staff WHERE est=1";
            $sql= $conectar->prepare($sql);
            $sql->execute();
            return $resultado= $sql->fetchAll();
    }
}
?>