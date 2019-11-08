<?php
session_start();
$_SESSION['country'] = $_POST['country'];

//echo $_SESSION['country'];

//print_r($_SESSION);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br><br>
	<form action="" method="POST">
		<select name="country">
			<option value="Russia">Russia</option>
			<option value="Belarus">Belarus</option>
			<option value="Ukraine">Ukraine</option>
			<option value="Kazakstan">Kazakstan</option>
		</select>
		<button>Send</button>
	</form>
</body>
</html>



