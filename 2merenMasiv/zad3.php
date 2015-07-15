<?php
echo "<p>a)<p/>";
$m=3;
$n=4;
$num=5;
$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n ; $j++) { 
		 $matrix[$i][$j]=$num;
		$num++;
	}
	
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
				echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
echo "<tr/>";
}
echo "</table>";
echo "<p>b)<p/>";
$m=4;
$n=4;
$num=0;
$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n ; $j++) { 
		$num++;
		$matrix[$i][$j]=$num;
		
	}
	$num=$num*(-2)-1;
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
				echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
echo "<tr/>";
}
echo "<table/>";
echo "<p>c)<p/>";
$m=4;
$n=4;

$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n ; $j++) { 
		if ($j>$i) {
			$matrix[$i][$j]=0;
		}
		else{
			$matrix[$i][$j]=$j+1;
		}
		
		
	}
	
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
				echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
echo "<tr/>";
}
echo "<table/>";

?>