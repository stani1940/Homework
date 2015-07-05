<?php
$number=25;

 $n = abs($number);
            $a = 0;
            $b = 1;
            $c;
            echo "$a, $b, ";
            if ($n >= 3){
              
                for ( $i = 0; $i < ($n - 2); $i++){
                    $c = $a;
                    $a = $b;
                    $b = $c + $a;
                    echo "$b, ";  
                }
             echo " ";
            }  
            else{
            	    if ($n == 2){
                     echo "$a, $b, ";   
                    } 
            if($n == 1){
                        echo "$a, ";
            }
            
        }
        

        
        

?>