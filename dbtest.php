<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'mydatabase';

$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>

</body>
</html>