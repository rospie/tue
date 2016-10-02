<?php
$server = 'emmede.com.mysql';
$username ='emmede_com';
$password ='AZXtFgRR';
$database ='emmede_com';


try {
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}	catch(PDOException $e){
	die ("Connection failed: " . $e->getMessage());
}
?>