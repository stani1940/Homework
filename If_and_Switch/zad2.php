<?php
echo "Зад.2 Да се напише програма, която подрежда 3 числа в нарастващ ред. <br/>";
$a = 5;
$b = 6;
$c=1;
if ($a>$b&&$b>$c){
	echo "$c,$b,$a";
}
  if ($a<$b&&$b<$c){
	echo "$a,$b,$c";
}
if ($a>$b&&$b<$c) {

 	if ($a>$c) {
 		echo "$b,$c,$a";
 	}
 	else{
 		echo "$b,$a,$c";
 	}
 } 

if ($a<$b&&$b>$c) {
	if ($a>$c) {
		echo "$c,$a,$b";
	}
	else{
		echo "$a,$c,$b";
	}
}
?>