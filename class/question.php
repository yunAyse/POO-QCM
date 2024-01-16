<?php


// content 
// answer
// explication de la reponse

class Questions
{

  private string $content;
  private array $answers = [];
  private string $explanation;


  // the question will surely have a content,
  public function __construct($content)
  {
    $this->content = $content;
  }

  public function addAnswer(Answer $answers)
  {
    $this->answers[] = $answers;
  }

  public function setExplanations(string $explanation)
  {
    $this->explanation = $explanation;
  }

  public function getExplanations()
  {
    return $this->explanation;
  }

  public function getAnswer()
  {
  }
}
