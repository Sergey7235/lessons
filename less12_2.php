<?php
session_start();
$_SESSION['test_sesion'] = 'test';

echo $_SESSION['test_sesion'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="http://localhost/Sergio/less12_2_1.php">click me</a>
</body>
</html>