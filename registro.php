<?php

include "conexion.php";

$user_name = $_POST["name"];
$user_lastname=$_POST["lastname"];
$user_username=$_POST["studentID"];

$mysql_query = "INSERT into student (name,lastname,studentID) 
values ('$user_name','$user_lastname','$user_username')";

if ($con ->query($mysql_query)===TRUE){
    echo "Insert Successful";
}
else{
    echo "Error: ".$mysql_query."<br>".$con->error;
}
$con -> close();

?>