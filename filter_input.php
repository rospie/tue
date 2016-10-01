<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Filter input example</h1>
<p>Requaires: <a href="<?= $_SERVER['../PHP_SELF'] ?>?name=Tue&email=tuje@cphbusiness.com&age=42"> name, email and age parameters</a></p>
<hr>
<?php 
$a = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT) or die('Missing/illegal age parameter.');
$e = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL) or die('Missing/illegal email parameter.');
$n = filter_input(INPUT_GET, 'name') or die('Missing/illegal name parameter.');

/*$n = filter_input(INPUT_GET, 'name', FILTER_VALIDATE_REGEXP,
	array("options"=>array("regexp"=>"/[A-Za-z\\s]+/"))); 
*/
	echo 'a='. $a. '<br>' .PHP_EOL;
	echo 'e='. $e. '<br>' .PHP_EOL;
	echo 'n='. $n. '<br>' .PHP_EOL;
//$sql = 'INSERT INTO persons (name, email, age) VALUES ("Marc", "klu@cphbusiness.dk", 100)';
$sql = 'INSERT INTO persons (name, email, age) VALUES ("'.$n.'", "'.$e.'", '.$a.')';
echo $sql;

require_once 'tue/dbcon.php';
$stmt = $link ->prepare ($sql);
$stmt->bind_param('ssi', $n, $e, $a);
$stmt->execute();

?>


</body>
</html>