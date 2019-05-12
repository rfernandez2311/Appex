<?php

include "conexion.php";

$username = $_POST["username"];
$user_ID = $_POST["StudentID"];
$resistor=$_POST["resistor"];
$capacitor=$_POST["capacitor"];
$classroom = $_POST["classroom"];
$multimeter=$_POST["multimeter"];
$breadboard = $_POST["breadboard"];
$wires=$_POST["wires"];
$arduino=$_POST["arduino"];
$battery="0";
$buzzer ="0";
$rasberry = $_POST["rasberry"];
$inductor = $_POST["inductor"];
$complete = "0";
$robot = "0";

$mysql_query = "INSERT into orders (name,studentid,resistor,capacitor,multimeter,breadboard,wires,arduino,battery,buzzer,rasberry,inductor,lab,complete,robot) 
values ('$username','$user_ID','$resistor','$capacitor','$multimeter','$breadboard','$wires','$arduino','$battery','$buzzer','$rasberry','$inductor','$classroom','$complete','$robot')";

if ($con ->query($mysql_query)===TRUE){
    echo "Insert Successful";
}
else{
    echo "Error: ".$mysql_query."<br>".$con->error;
}
$con -> close();

?>


