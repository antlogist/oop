<?php
  include "File.php";
  $file = new File();
  $file->fileName = "Test.txt";
  $file->getContent();

?>

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
  
  console.log(fileES5.displayContent());
</script>

