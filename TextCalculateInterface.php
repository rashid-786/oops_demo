<?php

interface TextCalculateInterface 
{
  public function validateText($text);
  public function calculateText($text, array $stopWords);
}