<?php

$server = 'emmede.com.mysql';
$username ='emmede_com';
$password ='AZXtFgRR';
$database ='emmede_com';

try {
	$connection = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}	catch(PDOException $e){
	die ("Connection failed: " . $e->getMessage());
}

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	//enter a new user into the databse
	$sql = "INSTERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $connection->prepare($sql);
	
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	
	if( $stmt->execute() ):
		$message = 'Welcome aboard!';
	else:
		$message = 'Something went wrong :(';
	endif;
	
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