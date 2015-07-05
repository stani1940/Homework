<?php

  $n=121;

  if ($n<2 || intval($n) != $n) { 
 $flag='false';
}
else{
  $squareNumber = Sqrt($n);
        $flag = '';
        for ($i = 2; $i <= $squareNumber; $i++)
        {
            if ($n % $i == 0)
            {
                $flag = 'false';
                break;
            }
        }
       
    
}
   echo "$n is $flag simple";

?>
