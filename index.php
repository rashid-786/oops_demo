<?php

require_once 'Text.php';
require_once 'TextCalculate.php';

class TextService
{
  private $textCalculateService;
  private $text;
  public function __construct(TextCalculateInterface $textCalculate, TextInterface $textServ){    
    $this->textCalculateService = $textCalculate;
    $this->text = $textServ;
  }
  
  public function getResults($text, array $stopWords, $type){
    $this->text->setType($type);
    $this->text->setText($text);
    $this->text->setStopWords($stopWords);
    
    $this->textCalculateService->calculateText($this->text->getText(), $this->text->getStopWords(), $this->text->getType());
  }
}

$str = new TextService(new TextCalculate(), new Text());
$str->getJsonResults('dd dddddd dddd', array('dd','ddddd','ddd'), 'arr');
