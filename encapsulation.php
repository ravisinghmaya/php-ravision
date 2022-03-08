<?php

/*
@ in encapsulation we set the accessibility label of the variable or method

@ we access the variable from three ways in oops first withing the class second by making object and third with the help of inheritance
1. withing class
2. child class
3. through object

@ Three classifier(define access level) -> public,protected,private
  if variable is defined private then it cannot be accessed from outside the class.
  
@ why encapsulation - suppose variable is defined in class public ally then by making its object we can change the value of  that variable so for this we use the encapsulation (define the accessibility level of variable and methods).

@ if we declare variable as private then it cannot be change from outside the class but cannot be accessed also so for accessing these private variable we use getter and setter function. 

# getter function only return value of the private variable it does not give access to change the value of the variable.
#

*/
class TV
{
	public $model;
	public $volume;
	
	public function volumeUp()
	{
		$this->volume++;
	}
	public function volumeDown()
	{
		$this->volume--;
	}
	private function getModel() //give access to read the private variable by using getter function 
	{
		return $this->model;
	}
	 function __construct($m,$v)
	{
		echo $this->model = $m;
		echo $this->volume = $v;
	}
	
  	
}

 class time1 extends TV
 {
	
  public function getModel()
  {
	return $this->model;
  	  
  }  
 }

 
 $tv = new time1('helfddflo',4);
 echo $tv->getModel();

//$data = new TV("Helloo","4");
//$data->model = 'dear';
//echo $data->getModel(); // in this case it is good that we doesnot change the value of the variable in the class but if we want to access that variable we cant so it creates problem so how can we overcome from it



