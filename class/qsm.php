<?php 
include_once('./question.php');
include_once('./answer.php');

class Qcm {
  
  private array $questions = [];

  public function addQuestion(Question $question) {
    $this->questions[] = $question;
  }

  
  public function getQuestions() {
    return $this->questions;
  }

} 


$qcm = new Qcm();

$question1 = new Question('what is a cat :');

$qcm->addQuestion($question1);
$qcm->addAnswer($answer1);
$qcm->addAnswer($answer2);
$qcm->addAnswer($answer3);
$qcm->addAnswer($answer4);


var_dump($qcm);



?>