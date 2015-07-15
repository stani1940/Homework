<?php
echo "<p>Зад.4 Даден е двумерен масив с размери M x N с произволни числа. Да се извика метод, който отпечатва индексите на масива и тяхната стойност
a[0][0] = 5	a[0][1] = 14	a[0][2] = 2
a[1][0] = 20	a[1][1] = 9	a[01[2] = 4
	Пример а M=2, N=3 </p>";

$matrix=array(array());

function matrix_number($matrix){ 
$M=2;
$N=3;
for ($i=0; $i<=$M ; $i++) { 
	for ($j=0; $j<=$N ; $j++) { 
		 $matrix[$i][$j]=rand(2,20);
	
	}
	echo "<br/>";
}

for ($i=0; $i <=$M ; $i++) { 
	for ($j=0; $j <=$N ; $j++) { 
				echo "a[$i][$j]" . $matrix[$i][$j] . ' ';	

	}
	echo "<br/>";
}
}
matrix_number($matrix);	
?>