<?php
$movies=array();
$movies[0]=array('title' =>'Avatar','year' =>'2009','budget'=>'100', 'genre' =>'fantasy','leadActor' =>'Sam Worthington' );
$movies[1]=array('title' =>'A beautiful mind','year' =>'2001','budget'=>'50', 'genre' =>'drama','leadActor' =>'Russell Crowe' );
$movies[2]=array('title' =>'Enemy at the gates','year' =>'2001','budget'=>'35', 'genre' =>'history','leadActor' =>' Jude Law' );
$movies[3]=array('title' =>'Shrek2','year' =>'2004','budget'=>'60', 'genre' =>'animation','leadActor' =>'Mike Myers' );
$movies[4]=array('title' =>'Ninja','year' =>'2009','budget'=>'25', 'genre' =>'action','leadActor' =>' Scott Adkins' );

?>
<<!DOCTYPE html>
<html>
<head>
	<title>Movie</title>
	<h1>Видеотека<h1/>
</head>
<body>
<?php
foreach ($movies as $value) {
	echo "($movies as $key => $value";
}
?>

</body>
</html>