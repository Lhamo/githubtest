<?php

class question{
//properties
	private $id;
	private $questionnumber;
    private $text;

public function __construct($id, $surveyid, $question){
    $this->id = $id;
    $this->questionnumber = $questionnumber;
    $this->text = $text;
} 

public function getId(){
    return $this->id;      

}
 public function getQuestionNumber(){
    return $this->questionnumber;      

}   
public function getText(){
    return $this->text;      

}
}
?>