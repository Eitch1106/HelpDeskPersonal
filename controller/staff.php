<?php
require_once("../config/conexion.php");
require_once("../models/Staff.php");
$staff = new Staff();

switch($_GET["op"]){
    case "comboStaf":
        $datos = $staff->get_staff();
        if(is_array($datos)=== true and count($datos)>0){
            /* $html= "<option></option>"; */
            foreach($datos as $row){
                $html.="<option value ='".$row['staff_id']."'>".$row['nombre']." ".$row['apellidos']."</option>";
            }
            echo $html;
        }

    break;
}
?>