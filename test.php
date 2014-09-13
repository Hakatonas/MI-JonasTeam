<?php

class SimplePerson {
    private $name;
    private $surname;
	private $position;
	private $id;
	
    function __construct($id_in,$name_in, $surname_in, $position_in) {
        $this->name = $name_in;
        $this->surname  = $surname_in;
		$this->position  = $position_in;
		$this->id  = $id_in;
    }
    function getName() {
        return $this->name;
    }
    function getSurame() {
        return $this->surname;
    }
	function getPosition() {
        return $this->position;
    }
	function getId() {
        return $this->id;
    }
}

class PersonAdapter {
    private $person;
    function __construct(SimplePerson $person_in) {
        $this->person = $person_in;
    }
    function getPersonInfo() {
        return 'Id: '.$this->person->getId().' Name: '.$this->person->getName().' Surname '.$this->person->getSurame().' Position '.$this->person->getPosition();
    }
}



  $person = new SimplePerson("1","vardas", "pavarde", "pareigos");
  $personAdapter = new PersonAdapter($person);
  echo 'Person info: '.$personAdapter->getPersonInfo().'<br>';


?>