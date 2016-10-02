<?php
$server = 'emmede.com.mysql';
$username ='emmede_com';
$password ='AZXtFgRR';
$database ='emmede_com';


try{
	$connection = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>