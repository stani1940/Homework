<?php
$numbers = array();
	for ($i=0; $i <=9 ; $i++){ 
	$numbers[$i]=rand(1,11);
	}
$sum=0;
	for ($i=0; $i <=9 ; $i++) {
        $sum=$sum+$numbers[$i];
        echo "$numbers[$i] ";
	
	}
echo "<p>Сумата е $sum</p>";
echo "<p>b</p>";
$numbers = array();
	for ($i=0; $i <=9; $i++) { 
	$numbers[$i]=rand(1,11);
}
$sum=$oddsum=0;
	for ($i=0; $i <=9 ; $i++) {
if ($numbers[$i]%2==0) {
	
	  $sum=$sum+$numbers[$i];
}
else{
	
	
	 $oddsum=$oddsum+$numbers[$i];
}

	}
	echo "<p>Сумата на четните числа е $sum</p>";
	echo "<p>Сумата на нечетните числа е $oddsum</p>";
?>