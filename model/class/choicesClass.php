<?php

class choices{
//properties
	private $id;
	private $text;
    private $questionid;

public function __construct($id, $text, $questionid){
    $this->id = $id;
    $this->text = $text;
    $this->questionid = $questionid;
} 

public function getUser(){
    return "Hallo $this->functie $this->voornaam $this->achternaam. Uw telefoonnummer is $this->telefoon";      

}
    
}
?>