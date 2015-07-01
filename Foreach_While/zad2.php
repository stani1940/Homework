<?php
$x=10;
$y=200;
if ($x>$y){

	while ( $y<=$x ){
	$y++;	
}
if (($y%3 == 0) || ($y % 7 == 0)){ 
	echo "$y "; }
}
else{
	while($x<=$y){
		$x++;

   if (($x%3 == 0) || ($x % 7 == 0)){ 
	echo "$x ";
}
}	
	}





?>