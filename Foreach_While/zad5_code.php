<?php

if (!empty($_POST)){
$text=$_POST['text'];
	
	for ($i=0; $i < strlen($text); $i++) { 
		  if ($text[$i]=='a'){ 
		  	$text[$i]='@'; 
		  }
          if ($text[$i]=='e'){ 
          	$text[$i]='3';
          }
        
}	
 echo "$text"; 
}


	?>
<!DOCTYPE html>
<html>
<head>
	<title>Кодиране на текст</title>
</head>
<body>

<form action="zad5_code.php" method="post" >
      Въведете текст:<br/>
      <input type="text" name="text"/>
      <input type="submit" value="Кодирай"/>
    </form>
</body>
</html>
