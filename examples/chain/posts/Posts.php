<?php

  class Posts
  {
      public $content;

      function __construct($content){
          $this->content = $content;
          echo "This is Constructor!<br>" . PHP_EOL;
      }

      function printContent(){
        echo "Print from method: " . $this->content . "<br>";
        return $this;
      }

      function __destruct(){
          echo "This is Destructor!<br>" . PHP_EOL;
      }

  }

  $post1 = new Posts("Post content");
  $content = $post1->printContent()->content;
  echo "Chained property: " . $content . "<br>";

?>