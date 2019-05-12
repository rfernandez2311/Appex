<?php

include "conexion.php";

$usuario =$_POST["studentID"];

$mysql_qry = 'SELECT studentid from student where studentid = "'.$usuario.'";';

$result = mysqli_query($con,$mysql_qry) or die ('error: '.mysql_error());

if(mysqli_num_rows($result)==1){
    echo "success";
}
else{
    echo "log-in not success";
}

?>