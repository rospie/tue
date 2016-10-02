<?php

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	//enter a new user into the databse
	$sql = "INSTERT INTO users (email,password) VALUES (:email,:password)";
	$stmt = $conn->prepare($sql);
	
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	
	if( stmt->execute() ):
		die('Welcome aboard!');
	else:
		die('Something is wrong');
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