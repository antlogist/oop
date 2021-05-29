<?php 

  // PHP
  class File {
    public $fileName;
    public $content;

    function displayContent() : string {
      echo $this->content;
    }
    
    function getContent() {
      if (file_exists($this->fileName)) {
        $this->content = file_get_contents($this->fileName);
      }
    }
  }

?>