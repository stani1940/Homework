<?php
echo "Зад.2 Да се декларират променливи от 4-те основни типа: цяло число(integer), дробно число(double/float), низ(string) и булева(boolean). С помощта на функцията gettype() да се отпечата типа на всяка променлива. <br/>";
 $a =1234;
 $b =23.54;
 $c = 'Gosho';
 $d= false;
 echo gettype($a), "\n";
 echo gettype($b), "\n";
 echo gettype($c), "\n";
 echo gettype($d);
 ?>