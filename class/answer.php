<?php


class Answer {

  // text
  private $answerContent ;
  // if its correct [boolean]
  private $isCorrect = false;

  public function __construct($answerContent)
  {
    $this->answerContent = $answerContent;
  }
  
}
