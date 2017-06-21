<?php 

class First {

	public $id = 23;

	//protected- cannot be accessed outside the object except for objects that inherit this.
	protected $name = 'Vince';

	public function saySomething($word){
		echo $word."<br>";
	}
}

class Second extends First{


	//added public function to get the value of the protected property in First object.
	public function getName(){
		echo $this->name."<br>";
	}
}

$second = new Second;

echo $second->getName();

$first = new First;

echo $first->saySomething('Hello');	
	
?>