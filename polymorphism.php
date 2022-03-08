<?php

interface shape {
	public function calArea();
}

class Circle implements shape {
	private $radius;
	
	public function __construct($radius){
		$this->radius = $radius;
	}
	public function calArea(){
		 return 3.14*$this->radius*$this->radius;
	}
}

class Rectangle implements shape{
	private $length;
	private $breadth;
	
	public function __construct($length,$breadth){
		$this->length = $length;
		$this->breadth = $breadth;
	}
	public function calArea(){
		return $this->length*$this->breadth;
	}
}


$circle_area = new Circle(2);
$rectangle_area = new Rectangle(2,3);

echo $circle_area->calArea()."</br>";
echo $rectangle_area->calArea();



?>