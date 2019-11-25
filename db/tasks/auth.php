<?php
<<<<<<< HEAD
session_start();

=======
>>>>>>> b054d48003556f67661c7fcddddf2f63194bd15e
require_once 'db.php';


$name_auth = $_POST['name_auth'];
$login_auth = $_POST['login_auth'];
$password_auth = $_POST['password_auth'];


$stmt = $pdo->query("SELECT * FROM users WHERE login = '{$_POST['login_auth']}' and password = '{$_POST['password_auth']}'");

$res = $stmt->fetch();


<<<<<<< HEAD
if (($res['login'] == $login_auth) && ($res['password'] == $password_auth) && ($res['login'] != null ) && ($res['password'] != null )) {
	
	echo "Авторизация пройдена успешно!<br><br>"; 
	
	$_SESSION['autorizied'] = 1;
	$_SESSION['name'] =  $_POST['name_auth'];
	
	
	echo '<meta http-equiv="refresh" content="3;URL=//localhost/lessons/db/tasks/secret_page.php">';

=======
if ($res) {
	echo "авторизация прошла успешно! <br>";
	//print_r($res);
	
}
>>>>>>> b054d48003556f67661c7fcddddf2f63194bd15e

}

?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<a>Авторизация</a>
<br><br>
<form action="" method="POST">
		<input type="text" name="name_auth" placeholder="name"> <br><br>
		<input type="text" name="login_auth" placeholder="login"> <br><br>
		<input type="text" name="password_auth" placeholder="password"> <br><br>
		<button>Send</button>
	</form>

</body>
</html>