<?php
$a=rand(1,10);
$b=rand(2,5);
function sum_array($a,$b){

for ( $i = 0; $i <count($a); $i++)
        {
            for ($i = 0; $i <count($b); $i++)
            {
               $c=$a[$i]+$b[$i];
            }
        }	
   foreach ($c as $key => $value) {
        	echo "$key->$value";
        }     
}
sum_array($a,$b);

?>