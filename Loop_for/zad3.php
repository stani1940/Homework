<?php
$m=$_GET['text1'];
$n=$_GET['text2'];
echo "<table border=1";
for ($i=1; $i <=$m ; $i++) {
    echo "<tr>"; 
    for ($j=1; $j<=$n; $j++) { 
	echo "<td>$i,$j</td>";
}
echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forma</title>
</head>
<body>
<form action="zad3.php" method="get">
<input type="text" name="text1"/>Въведи число за ред<br/>
<input type="text" name="text2"/>Въведи число за колона<br/>
<input type="submit" name="submit" value="Go" /><br/>
</form>
</body>
</html>