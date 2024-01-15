<?php 
include_once('./qsm.php');
include_once('./answer.php');

class Question{
  // private string $text;
  private array $answers = [];

  public function addAnswer(Answer $answer) {
    $this->answers[] = $answer;
  }


}