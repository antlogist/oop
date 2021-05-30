<?php
  include "File.php";
  $file = new File();
  $file->fileName = "Test.txt";
  $file->getContent();

?>

<script>
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
  
  console.log(fileES6.displayContent());
</script>

