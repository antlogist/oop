<?php 

class Student {
  public $marks = array();
  
  function examResults($marks) {
    // Check the entry data format
    if(!is_array($marks)) {
      echo "Entry data is not an array";
      return;
    }
    
    $total = array_sum($marks);
    
    // If array length less than 3
    if (count($marks) < 3) {
      echo "Insufficient data";
      return;
    }
    
    // If array length more than 3
    if (count($marks) > 3) {
      echo "Redundant data";
      return;
    }
    
    // Main loop
    foreach ($marks as $key=>$mark) {
      // If the mark less than 35
      if ($mark < 35) {
        echo "Exam failed! Total: $total :(";
        return;
      }
      
      // If the mark more than 100
      if ($mark > 100) {
        $markNumber = ++$key;
        echo "The $markNumber mark is a Wrong mark!";
        return;
      }
    }
    
    echo "Exam passed! Total: $total :)";
    return;
  }
  
}

$student = new Student();
$student->marks = array(35, 75, 35);
$student->examResults($student->marks);
?>
