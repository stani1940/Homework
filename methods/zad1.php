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
