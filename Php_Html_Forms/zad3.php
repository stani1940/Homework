<?php
session_start();
if (!empty($_POST))
		 {
		 	$_SESSION['username'] = $_POST['username'];
		 	$_SESSION['password'] = $_POST['pass'];
		 	if (!empty($_SESSION['username']) && !empty($_SESSION['pass'])) {			
			echo "<p><a href='products.php'>Успешно се регистрирахте, "
			. $_SESSION['username'].
			"! Изберете Вашите продукти!!</a></p>";
		}
		else {
			if ($_SESSION['username'] === '') {
				echo "Попълнете потребителско име";
			}
			if ($_SESSION['pass'] === '') {
				echo "Попълнете парола";
			}
		}
	}

?>
<<!DOCTYPE html>
<html>
<head>
	<title>E-mania</title>
</head>
<body>
<form action="zad3.php" method="post">
<input type="text" name="username"/>Потребител<br/>
<input type="password" name="pass"/>Парола<br/>
<input type="submit" name="submmit" value="Влез"/>
</form>
</body>
</html>