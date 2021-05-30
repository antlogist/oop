<?php 

  // PHP
  class File {
    public $fileName;
    public $content;

    function displayContent() {
      echo $this->content . PHP_EOL;
    }
    
    function getContent() {
      
      if (!file_exists($this->fileName)) {
        echo "$this->fileName does not exist" . PHP_EOL;
        return;
      }
      
      $this->content = file_get_contents($this->fileName);
    }
  }

?>