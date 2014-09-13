<?php

class SimplePerson {
    private $name;
    private $surname;
	private $position;
	private $id;
	
    function __construct($id_in,$name_in, $surname_in, $position_in) {
        $this->id  = $id_in;
		$this->name = $name_in;
        $this->surname  = $surname_in;
		$this->position  = $position_in;
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
        return 'Vardas: '.$this->person->getName().' Pavarde: '.$this->person->getSurame().' Pareigos: '.$this->person->getPosition().' ('.$this->person->getId().')';
    }
}


class ListPersons {
	
	function showpersons($persons){
		foreach ($persons as $person){
		  $person = new SimplePerson($person[0],$person[1], $person[2], $person[3]);
		  $personAdapter = new PersonAdapter($person);
		  $output .= $personAdapter->getPersonInfo().'<br>';
		}
		
		return $output;
	}
}


