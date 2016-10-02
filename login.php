<?
if(!empty($_POST['email']) && !empty($_POST['password'])):
	
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
    
    <form action="login.php" method="post"></form>
    	<input type="text" placeholder="Enter your email here" name="email">
    	<input type="password" placeholder="and your password" name="password">
        
        <input type="submit">

</body>
</html>