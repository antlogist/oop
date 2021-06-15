<?php

class StringHelper {
  static $countVowelResult;
  
  static function countVowel($content = null) {
    
    if (!is_string($content)) {
      echo "Content is not a string!" . PHP_EOL;
      return;
    }
    
    $content = strtolower($content);
    $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
    
    self::$countVowelResult = array_sum(array_map(
      function ($letter) use ($content) { 
        return substr_count($content, $letter); 
      }, 
      $vowels));
    
    echo self::$countVowelResult . PHP_EOL;
    
  } 
}

StringHelper::countVowel("Anthony");
echo StringHelper::$countVowelResult . PHP_EOL;

