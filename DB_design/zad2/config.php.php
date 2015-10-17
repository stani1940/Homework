<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "music";
$mysqli= new mysqli($servername, $username, ""); 
$mysqli->select_db("music");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
	echo "<br>";
	
?>