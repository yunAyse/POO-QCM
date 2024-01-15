<?php

class Qcm
{

  private array $questions = [];


  public function addQuestion(Question $question): void
  {
    $this->questions[] = $question;
  }

  public function generate () {
    foreach ($this->questions as $question) {
      echo $question->getContent();
    foreach($question->getAnswers() as $answer) {
      echo $answer->getContentAnswer() . '<br>'; 
    }
    echo $question->getExplanation();
    }
    
  }
}

