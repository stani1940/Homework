﻿<?php
echo "<p>Зад.2 Да се напише метод, който по въведени 2 числа казва дали тяхното произведение е четно или нечетно. 
Да се извика метода за 3 различни двойки числа</p>";
function even_number($x,$y){
if ($x*$y%2==0) {
	echo "Произведението е четно <br/>";
}
else{
	echo "Произведението е нечетно </br>";
}
}
even_number(5,6);
even_number(12,9);
even_number(7,19);
?>