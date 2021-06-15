<?php
  class Files
  {
      static $fileName;
      static $fileHandler = null;
      static $fileSize;
      static $content;
      static $fileFound = false;

      static function getContent($fileName) {
        
          self::$fileName = $fileName;
        
          if( file_exists($fileName) ){
              if( is_file($fileName) ){
                  self::$fileFound = true;
              }
          }

          if(self::$fileFound){
              //Open a File
              self::$fileHandler = fopen( $fileName, "r" );
              self::$fileSize = filesize( $fileName );
          }
        
          if(self::$fileFound) {
              //Read File Content
              $content = fread(self::$fileHandler, self::$fileSize);
              return $content;
          }else{
              return "No Files Found!";
          }
      }
  }

echo Files::getContent("Exercise.txt") . PHP_EOL;

