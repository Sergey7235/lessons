<?php
session_start();

if ($_SESSION['time']) {
	echo 'Вы зашли на сайт ' . (time() - $_SESSION['time']) . ' секунд назад';
	
	
	
}

else {
	$_SESSION['time'] = time();
	echo 'Вы зашли на сайт 0 секунд назад';

}






?>