<?php

interface DemoInterface 
{
  public function getType();
  public function setType($type);
  public function getText();
  public function getStopWords();
  public function setText($text);
  public function setStopWords(array $stop_words);
}
