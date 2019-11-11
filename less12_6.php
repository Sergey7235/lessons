<?php
session_start();
$_SESSION['email'] = $_POST['email'];

//echo $form->input(['type'=>'text', 'value'=>$_SESSION['email']]);
	

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
	<input type="email" name="email" placeholder="e-mail"> e-mail<br><br>
		<button>Send</button>
	</form>
	<hr>

	<br><br>
	<form action="" method="POST">
		<input type="text" name="name"> Name<br><br>
		<input type="text" name="surname"> Surname<br><br>
		<input type="text" name="password"> Password<br><br>
		<input type="email" name="email" placeholder="e-mail" value="<?php echo $_SESSION['email']?>"> e-mail<br><br>
		<button>Send</button>
	</form>
</body>
</html>


