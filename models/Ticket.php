<?php
class Ticket extends Conectar
{
    public function insert_ticket($usu_id, $cat_id, $tick_titulo, $tick_descrip, $staff_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_ticket (tick_id,usu_id,cat_id,tick_titulo,tick_descrip,tick_estado,fech_crea,staff_id,est) VALUES (NULL,?,?,?,?,'Abierto',now(),?,'1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->bindValue(2, $cat_id);
        $sql->bindValue(3, $tick_titulo);
        $sql->bindValue(4, $tick_descrip);
        $sql->bindValue(5, $staff_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticket_x_usu($usu_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT 
            tm_ticket.tick_id,
            tm_ticket.usu_id,
            tm_ticket.cat_id,
            tm_ticket.staff_id,
            tm_ticket.tick_titulo,
            tm_ticket.tick_descrip,
            tm_ticket.tick_estado,
            tm_ticket.fech_crea,
            tm_usuario.usu_nom,
            tm_usuario.usu_ape,
            tm_categoria.cat_nom,
            tm_staff.nombre,
            tm_staff.apellidos
            
        FROM
            tm_ticket
                INNER JOIN
            tm_categoria ON tm_ticket.cat_id = tm_categoria.cat_id
                INNER JOIN
            tm_usuario ON tm_ticket.usu_id = tm_usuario.usu_id
                INNER JOIN
            tm_staff ON tm_ticket.staff_id = tm_staff.staff_id
        WHERE
            tm_ticket.est = 1
            AND tm_usuario.usu_id = ? order by tm_ticket.tick_id";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_tickets()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT 
            tm_ticket.tick_id,
            tm_ticket.usu_id,
            tm_ticket.cat_id,
            tm_ticket.staff_id,
            tm_ticket.tick_titulo,
            tm_ticket.tick_descrip,
            tm_ticket.tick_estado,
            tm_ticket.fech_crea,
            tm_usuario.usu_nom,
            tm_usuario.usu_ape,
            tm_categoria.cat_nom,
            tm_staff.nombre,
            tm_staff.apellidos
            
        FROM
            tm_ticket
                INNER JOIN
            tm_categoria ON tm_ticket.cat_id = tm_categoria.cat_id
                INNER JOIN
            tm_usuario ON tm_ticket.usu_id = tm_usuario.usu_id
                INNER JOIN
            tm_staff ON tm_ticket.staff_id = tm_staff.staff_id
        WHERE
            tm_ticket.est = 1 order by tm_ticket.tick_id" ;
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticketdetalle_x_ticket($tick_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT 
                    td_ticketdetalle.tickd_id,
                    td_ticketdetalle.tickd_descrip,
                    td_ticketdetalle.fech_crea,
                    tm_usuario.usu_nom,
                    tm_usuario.usu_ape,
                    tm_usuario.rol_id
                FROM
                    td_ticketdetalle
                        INNER JOIN
                    tm_usuario ON td_ticketdetalle.usu_id = tm_usuario.usu_id
                WHERE
                    tick_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
