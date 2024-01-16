<?php


// question 

class Qcm
{

  // an array for the questions.
  private array $questions = [];

  public function addQuestion($questions)
  {
    $this->questions = $questions;

    foreach ($questions as $question) {
    }
  }
}
