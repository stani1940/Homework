<?php
echo "<p>zad 1 Да се напише метод, който отпечатва числата от 42 до 11. Да се извика метода в 3 различни тага</p>";
function print_number(){
	for ($i=42; $i >=11 ; $i--) { 
		echo "$i, ";
	}
}
?>
<h3>
<?php print_number(); ?>
</h3>
<textarea name="n">
<?php print_number(); ?>
</textarea>
<p>
<?php print_number(); ?>
</p>
<?php
echo "<p>б) Даден е масив, който съдържа страници от главно меню на сайт. Да се напише метод, който отпечатва елементите на масивa като елементи на списък (заградени в ‘<li> … </li>’). 
Да се извика метода 2 пъти - за подреден списък и за Bootstrap падащо меню (Components->Button dropdowns).</p>";
$sites=array();
function 
?>