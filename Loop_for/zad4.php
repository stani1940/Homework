<?php
$n=10;
echo "<table border='1'>";
for ($i=1; $i <=$n ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=$i ; $j++) { 
		$h=$i*$j;
		$b=10-$i;
		echo "<td>"."$j*$i=$h "."</td>";

	
	}
	echo "<td colspan='$b'></td>";

	echo "</tr>";
}
echo "</table>";
?>