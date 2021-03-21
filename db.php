<?php
	
	$server = "sql111.epizy.com";
	$username = "epiz_28196596";
	$password = "bQr1J1d5n45";
	$dbmane = "epiz_28196596_transactions";
    $port = "3306";
	
	$conn = mysqli_connect($server, $username, $password, $dbname, $port);
	
	
	if(!$conn)
	{
        die("Connection failed:".mysqli_connect_error());
    }

?>