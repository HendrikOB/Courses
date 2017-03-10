<?php

class Person {
	var $firstName;
	var $lastName;

	function __construct($firstName, $lastName) 
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	function fullName () {
		return $this->firstName . ' ' . $this->lastName;
	}
}

$person1 = new Person('Duilio', 'Palacios');

$person2 = new Person('Ramon', 'Lapenta');

//

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";