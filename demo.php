<?php

 /* function factorial($number){
	 if($number<0)
		 return -1;
	 if($number == 0)
		 return 1;
	 return ($number*factorial($number-1));
	
 }
 
 echo factorial(10);



$size = array("big","medium","small");
foreach($size as $s){
	echo "size is $s </br>";
}



$size = array("big","wwww","small");
sort($size);
foreach($size as $s){
	echo $s;
}
die;
$salary = array("salary"=>"10000","name"=>"raviRanjan","address"=>"patna");
 print_r(array_change_key_case($salary,CASE_UPPER));
 
foreach($salary as $k => $value){
	echo "keys : $k  , value : $value";
}
*/

//$f = fopen('test.php','w');
//fwrite($f,"welcome to singh family");
//fwrite($f,"very very welcome");
//fclose($f);

/*while(!feof($f)){
	echo fgetc($f);
}
*/

class fruit{
	public $name;
	protected $color;
	private $weight;

	public function setColor($color){
		 $this->color = $color;
	}

	public function getColor(){
		echo $this->color;
	}
}
class vegetable extends fruit{
	public function getColor(){
		echo $this->color;
	}
}

$carrot = new vegetable();
$carrot->setColor("raviranjan");
$carrot->getColor();
die;
$mango = new Fruit();
$mango->setColor("raviranjan");
$mango->getColor();

  
?>
