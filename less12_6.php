<?php
session_start();
$_SESSION['email'] = $_POST['email'];

	echo $form->input(['type'=>'text', 'value'=>$_SESSION['email']]);
	

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
		<input type="text" name="email">
		<button>Send</button>
	</form>
</body>
</html>


