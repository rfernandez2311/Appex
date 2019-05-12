<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="1234";
$dbname="appex";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//small patch to show student name in nav//
$query = "SELECT * FROM users limit 1";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
		$student=$row;
}
//$con->close();
?>

