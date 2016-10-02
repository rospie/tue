<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to my Website</title>
<link rel="stylesheet" type="text/css" href='index_style.css'>
</head>

<body>
        
        <?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>
</body>
</html>