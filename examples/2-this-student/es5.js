  //es5
  function StudentES5() {
    this.name = "";
    this.class = "";
    
    this.getName = function() {
      console.log(this.name)
    }
    this.setName = function(newName) {
      this.name = newName;
    }
    this.getClass = function() {
      console.log(this.class)
    }
    this.setClass = function(newClass) {
      this.class = newClass;
    }
    this.printDetails = function() {
      console.log(`Name: ${this.name}, Class: ${this.class}`);
    }
  }

  const studentES5 = new StudentES5();
  studentES5.setName("Bob");
  studentES5.class = 5;
  studentES5.getName();
  studentES5.getClass();
  studentES5.printDetails();