<?php
if (empty($_POST)) {
		echo "Формата не е попълнена";
}
if (!isset($_POST['interests'])){ 
	echo "Изберете поне един интерес!<br/>"; 
}
  else {
    echo "<p> $_POST[username],</p>";
    echo "Избраните ор Вас интереси са:<br/>";
    $a=$_POST['interests'];
    foreach ($a as $value) {
      echo "$value<br/>";
  }
}
$email = $_POST['email'];
$email_regex = "/^([a-zA-Z0-9_-]+@([a-zA-Z0-9_-]+\\.)+([a-z]{2,4}))$/";
if(preg_match($email_regex, $email)) {
     
      echo "Валиден емайл адрес";

} else {

    echo "Невалиден емайл адрес";

}	

?>
<<!DOCTYPE html>
<html>
<head>
	<title>Форма за форум</title>
</head>
<body>
<form action="zad2.php" method="post">
<input type="text" name="username"/>Потребител<br/>
<input type="password" name="password1"/>Парола/<br/>
<input type="text" name="email"/>Имейл адрес<br/>Интереси</br>
<input type="checkbox" name="interests[]" value="sport" />Спорт<br/>
<input type="checkbox" name="interests[]" value="musik" />Музика<br/>
<input type="checkbox" name="interests[]" value="cinema" />Кино<br/>
<input type="submit" name="submit" value="Рекистрирай"> 

</form>
</body>
</html>
