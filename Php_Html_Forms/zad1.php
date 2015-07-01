<?php
if (!empty($_GET)) {
    if (isset($_GET['categoria'])&&($_GET['locatsia'])){
		  $event=array('MusikVidin'=>'Танци от Северозапада','ThheaterVidin'=>'Секс, наркотици и рок анд рол','CinemaVratza'=>'Fast and the furious',
                 'CinemaVidin'=>'Вчера','MusikVratza'=>'Vola Open Air 2015','TheaterVratza'=>'Фестивал на малките театрални форми 2015','sportVR'=>'Стрийтбол');
             echo "<p>".$event["$_GET[categoria]$_GET[locatsia]"]."</p>";
	}
	
else{
	echo "Моля попълнете формата";
}
}
?>

<<!DOCTYPE html>
<html>
<head>
	<title>Searching form</title>
</head>
<body>
<form action="zad1.php" method="get">
 <legend>Форма за търсене</legend>
<input type="radio" name="categoria" value="Musik">Музика<br/>
<input type="radio" name="categoria" value="Cinema">Кино<br/>
<input type="radio" name="categoria" value="Theatre">Театър
<select name="locatsia">
      <option value="0">Изберете</option>
	  <option value="Vidin">Видин</option>
      <option value="Vratza">Враца</option
</select><br/>
<input type="submit" value="Изберете"/>
</form>
</body>
</html>

