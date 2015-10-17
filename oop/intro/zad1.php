<?php 
class Student{
	private $name;
	private $klas;
	private $average;
	private $motivation;
	public function __construct($c=5.5, $n = "Stanislav", $b = 0.5 )
	{
		echo "__construct for $n <br/><br/>";
		$this->klas=11;
		$this->name = $n;
		$this->average = $c;
		$this->motivation = $b;
	}
	
	public function show_info()
	{
		echo "Name: $this->name <br/>
			Klas: $this->klas <br/>
			Average: $this->average <br/>
			Motivation: $this->motivation <br/>";
	}
	public function eat($food, $quantity)
	{
		echo "$this->name is eating $quantity $food. Am-am-am <br/>";
		$this->energy += 2 * $quantity;
		if($this->energy > 100){
			$this->energy = 100;
		}
	}
	public function go_to_school($distance)
	{
		echo "$this->name is going toschool $distance km distance <br/>";
		
		$this->motivation -= 100/$distance;
		if($this->motivation >0){
			$time = $distance *= $this->motivation;
			echo "$this->name is critically tired and is going scool later with $time minutes <br/>";
		}
	}
	
	public function __set($name, $value){
        
        echo "Setting '$name' to '$value' <br/>";
        if (property_exists($this, $name)) {
        	$this->$name = $value;
    	}else{
        	echo "property $name does NOT exist <br/>";
        }
    }
    public function __get($name)
    {
        echo "Getting '$name' <br/>";
        if (property_exists($this, $name)) {
        	return $this->$name;
        }else{
        	echo "property $name does NOT exist <br/>";
        }
	}
}
$stan= new Student();
$stan->show_info();
echo $stan;
?>