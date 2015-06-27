<?php
echo "Зад.3 Дадени са 2 страни на правоъгълник. Да се намерят и отпечатат лицето и периметъра на провъгълника.  <br/>";
function litse($a,$b)
{
	$S=$a*$b;
	return $S;
}
print (litse(7,20));
echo "<br/>";
print litse(5,12);
echo "<br/>";
function perimeter($a,$b)
{
$P= 2*($a+$b);
return $P;
}
print (perimeter(7,20));
echo "<br/>";
print perimeter(5,12);
?>