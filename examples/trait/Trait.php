<?php
/*
1) Write File Class
2) Pass the fileName to Constructor
3) Check if the fileexists in constructor
4) If file is found then open the file using fopen method
5) Write method getContent to get the content of the file
6) Write Destructor method to close the file if file is already opened.
*/

class File {
  
  public $fileFound;
  public $fileHandler;
  public $fileName;
  public $fileSize;
  
  function __construct($fileName = null) {
    $this->fileFound = false;
    try {
      // If the file name not entered
      echo $this->checkProperty($fileName);
      // If the file does not exist
      echo $this->checkFile($fileName);
      // Init file name
      $this->fileName = $fileName;
      // Get file handler
      $this->getFileHandler();
      // Get file size
      $this->getFileSize();
      // Get the content
//      echo $this->getContent() . "<br>";
    } catch (Exception $e) {
      echo "Exception: ",  $e->getMessage(), "<br>";
    }
  }
  
  function checkProperty($prop) {
    if (!$prop) {
      throw new Exception("Insufficient data");
    }
  }
  
  function checkFile($fileName) {
    if (!file_exists($fileName)) {
      throw new Exception("File does not exist");
    }
    
    if (!is_file($fileName)) {
      throw new Exception("It is not a file");
    }
    $this->fileFound = true;
  }
  
  function getFileHandler() {
    $this->fileHandler = fopen($this->fileName, "r" );
  }
  
  function getFileSize() {
    $this->fileSize = filesize($this->fileName);
  }
  
  function getContent() {
    $this->fileHandler = fopen( $this->fileName, "r" );
    $content = fread($this->fileHandler, $this->fileSize);
    echo "File size: $this->fileSize <br>";
    echo "File handler: $this->fileHandler <br>";
    echo $content . "<br>";
    return $content;
  }
  
  function __destruct() {
    if ($this->fileFound === true) {
      fclose($this->fileName);
      echo "File is closed from Destructor";
    }
  }
}

$file = new File("Exercise.txt");
$file->getContent();
