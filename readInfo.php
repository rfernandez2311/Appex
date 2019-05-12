<?php
include "conexion.php";


$consulta = "SELECT * from parts ;  ";
$result = $con -> query($consulta);

while($fila = $result->fetch_assoc()){
    $usuarios[] = array_map('utf8_encode', $fila);
}


echo json_encode($usuarios);
$result -> close();




