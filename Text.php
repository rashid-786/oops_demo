<?php

require_once 'TextInterface.php';

class Text implements TextInterface
{
  private $type;
  private $text;
  private $stopWords = [];
  
  public function setType($type) {
    $this->type = $type;
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setText($text) {
    $this->text = $text;
  }

  public function getText() {
    return $this->text;
  }
  
  public function setStopWords(array $stopWords) {
    $this->stopWords = $stopWords;
  }
  
  public function getStopWords() {
    return $this->stopWords;
  }
}
