<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location: /");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Here</title>
<link rel="stylesheet" type="text/css" href='index_style.css'>

</head>

<body>
	<div class="header">
		<a href="index.php">Back to the Main page</a>
	</div>
    
	<h1>Login Below</h1>
    <span>or <a href="register.php">register here</a></span>
    
    <form action="login.php" method="post">
    	<input type="text" placeholder="Enter your email here" name="email">
    	<input type="password" placeholder="and your password" name="password">
        
        <input type="submit">
	</form>
</body>
</html>