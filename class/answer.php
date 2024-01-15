<?php
include_once('./question.php');
include_once('./qsm.php');

class Answer {
  private $answer;

  public function __construct($answer)
  {
    $this->answer = $answer;
  } 

  
  public function getAnswer () {
    return $this->answer;
  }
  
}

$answer1 = new Answer('it\'s an animal');
$answer2 = new Answer('it\'s an insect');
$answer3 = new Answer('it\'s cute');
$answer4 = new Answer('it\'s a human');