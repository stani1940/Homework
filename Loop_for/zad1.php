<?php
$x=16;
$y=2;
if ($x<$y){
for ($i=$x; $i < $y; $i++) { 
	if (($i%3==0)||($i%7==0)){
		echo "$i";
	}
}
}
else{

}
for ($i=$y; $i <$x ; $i++) { 
	if (($i%3==0)||($i%7==0)){
		echo "$i <br/>";
	}
}
?>