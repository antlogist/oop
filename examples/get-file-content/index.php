<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>File Class</title>
</head>

<body>
  <div id="resultES5"></div>
  <div id="resultES6"></div>
  
  <?php
  // PHP
  class File {
    public $fileName;
    public $content;

    function displayContent() : string {
      echo $this->content;
    }
    
    function getContent() {
      
      if (!file_exists($this->fileName)) {
        echo "$this->fileName does not exist";
        return;
      }
      
      $this->content = file_get_contents($this->fileName);
    }
  }

  $file = new File();
  $file->fileName = "Test.txt";
  $file->displayContent();
  $file->getContent();
  $file->displayContent();

?>
</body>

<script>
  
  // ES5
  const renderES5 = document.getElementById("resultES5");
  
  function FileES5(fileName, content) {
    this.fileName = fileName;
    this.content = content;
    this.getContent = function() {
      this.content = "<?php echo $file->displayContent(); ?>";
    }
    this.displayContent = function() {
      return this.content;
    }
  }
  
  const fileES5 = new FileES5();
  fileES5.getContent();
  fileES5.displayContent();

  renderES5.insertAdjacentHTML('beforeEnd', fileES5.content);

  // ES6
  const renderES6 = document.getElementById("resultES6");
  
  class FileES6 {
    constructor(fileName, content) {
      this.fileName = fileName;
      this.content = content;
    }
    getContent() {
      this.content = "<?php echo $file->displayContent(); ?>";
    }
    displayContent() {
      return this.content;
    }
  }
  
  const fileES6 = new FileES6();
  fileES6.getContent();
  fileES6.displayContent();

  renderES6.insertAdjacentHTML('beforeEnd', fileES6.content);  
  
</script>

</html>
