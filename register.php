<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $connection->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
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
	<div class="header">
		<a href="index.php">Back to the Main page</a>
	</div>
    
    <?php if(!empty($message)): ?>
    	<p><?= $message ?></p>
        <? endif;?>

	<h1>Register Below</h1>
        <span>or if already registered <a href="login.php">login here</a></span>
        
    <form action="register.php" method="post">
    	<input type="text" placeholder="Enter your email here" name="email">
    	<input type="password" placeholder="and your password" name="password">
    	<input type="password" placeholder="confirm password" name="confirm_password">
        
        <input type="submit">
	</form>

</body>
</html>