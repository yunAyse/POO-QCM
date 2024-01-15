<?php

class Question
{

  private string $content;
  private array $answers = [];
  private string $explanation;


  public function __construct($content)
  {
    $this->content = $content;
  }

  public function addAnswer(Answer $answer) : void
  {
    $this->answers[] = $answer;
  }

  public function setExplanation(string $explanation): void
  {
    $this->explanation = $explanation;
  }

  public function getContent(): string
  {
    return $this->content;
  }

  public function getAnswers(): array
  {
    return $this->answers;
  }

  public function getExplanation () : string
  {
    return $this->explanation;
  }


}
