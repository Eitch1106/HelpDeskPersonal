<?php
class Ticket extends Conectar
{
    public function insert_ticket($usu_id, $cat_id, $tick_titulo, $tick_descrip, $staff_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_i_ticket_01(?,?,?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->bindValue(2, $cat_id);
        $sql->bindValue(3, $tick_titulo);
        $sql->bindValue(4, $tick_descrip);
        $sql->bindValue(5, $staff_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_ticketdetalle($tick_id,$usu_id, $tickd_descrip)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_i_ticketdetalle_02(?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->bindValue(2, $usu_id);
        $sql->bindValue(3, $tickd_descrip);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticket_x_usu($usu_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_l_ticketxusu_01(?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticket_x_id($tick_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call sp_l_ticketxid_01(?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_tickets()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_l_ticketgral_01()" ;
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticketdetalle_x_ticket($tick_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_l_ticketdetalle_02(?)";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_ticket($tick_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_u_ticket_01(?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_ticket_asignacion($tick_id,$usu_asig)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "update tm_ticket 
            set 
                usu_asig = ?,
                fech_asig = now() 
            where 
                tick_id=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_asig);
        $sql->bindValue(2, $tick_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_ticketdetalle_cerrar($tick_id,$usu_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "call sp_i_ticketdetalle_01(?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->bindValue(2, $usu_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function get_ticket_total(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call sp_l_tickettotal_01()";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_totalabierto(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call sp_l_ticketabierto_01()";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_ticket_totalcerrado(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call sp_l_ticketcerrado_01()";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    } 

    public function get_ticket_grafico(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="call sp_l_categoria_01()";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    } 
}
