<?php

class Answer
{
  // text
  // bool
  private string $contentAnswer;
  private $isCorrect;
  const BONNE_REPONSE = true;

  public function __construct($contentAnswer, $isCorrect = false)
  {
    $this->contentAnswer = $contentAnswer;
    $this->isCorrect = $isCorrect;
  }

  public function getContentAnswer()
  {
    return $this->contentAnswer;
  }
}
