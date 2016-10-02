<?php

$server = 'localhost';
$username ='root';
$password ='root';
$database ='LoginForm';

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}	catch(PDOException $e){
	die ("Connection failed: " . $e->getMessage());
}

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	//enter a new user into the databse
endif;
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register Here</title>
<link rel="stylesheet" type="text/css" href='index_style.css'>

</head>

<body>

	<h1>Register Below</h1>
        <span>or if already registered <a href="login.php">login here</a></span>
        
        <form action="register.php" method="post"></form>
    	<input type="text" placeholder="Enter your email here" name="email">
    	<input type="password" placeholder="and your password" name="password">
    	<input type="password" placeholder="confirm password" name="confirm_password">
        
        <input type="submit">


</body>
</html>