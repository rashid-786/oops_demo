<?php

require_once 'TextCalculateInterface.php';

class TextCalculate implements TextCalculateInterface
{
  public function validateText($text) {
    if(!empty($text))
      return preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', trim(preg_replace('/\s+/', ' ', $text)));
    else
      return "Plese provide some text.";
  }
  
  public function calculateText($text, array $stopWords, $type = 'JSON') {
    $this->validateText($text);
    $strArr = explode(' ', $text);
    for($i = 0; $i < count($stopWords); $i++){
      if(strpos($text, $stopWords[$i]) !== FALSE) {
        if (($key = array_search($stopWords[$i], $strArr)) !== false) {
          unset($strArr[$key]);
        }
      }
    }
    if($type == 'JSON')
      return json_encode(array_count_values($strArr));
    else
      return array_count_values($strArr);    
  }
}