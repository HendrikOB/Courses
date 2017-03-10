<?php

class Person {
	protected $firstName;
	protected $lastName;
	protected $nickname;
	protected $changedNickname = 0;
	protected $fechaN;
	protected $fechaActual = 2016;

	public function __construct($firstName, $lastName, $fechaN) 
	{
		$this->firstName	= $firstName;
		$this->lastName 	= $lastName;
		$this->fechaN		= $fechaN;
		//$this->nickname		= $nickname;
	}

	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function setNickname($nickname) {

		$name1 = $this->firstName;
		$name2 = $this->lastName;

		if (($nickname == $name1) || ($nickname == $name2)) {
			throw new Exception ("invalid nickname");
		}

		if(!preg_match("/^[a-zA-Z'-]{3,}+$/",$nickname)) { 
			throw new Exception ("invalid nickname");
		}

		if ($this->changedNickname >= 2) {
			throw new Exception("You can't change a nickname more than 2 times");
		}

		$this->nickname = $nickname;

		$this->changedNickname++;
		
	}

	public function getNickname() {
		return $this->nickname;
	}

	public function getFullName () {
		return $this->firstName . ' ' . $this->lastName;
	}

	public function getAge() {
		$nac = $this->fechaN;
		$hoy = $this->fechaActual;

		//$sub = $hoy - $nac;

		echo $hoy - $nac;
	}

	
}

$person1 = new Person('Duilio', 'Palacios', '1987');

$person1->setNickname('Silence');
$person1->setNickname('Sileence');
//$person1->setNickname('Duiliooo');

//exit($person1->getNickname());

echo $person1->getFullName();

echo "<br>";

exit($person1->getAge());