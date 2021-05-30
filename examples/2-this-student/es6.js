  //es6
  class StudentES6 {
    constructor() {
      this.name = "";
      this.class = "";
    }

    getName() {
      console.log(this.name)
    }
    setName(newName) {
      this.name = newName;
    }
    getClass() {
      console.log(this.class)
    }
    setClass(newClass) {
      this.class = newClass;
    }
    printDetails() {
      console.log(`Name: ${this.name}, Class: ${this.class}`);
    }
  }

  const studentES6 = new StudentES6();
  studentES6.setName("Bob");
  studentES6.class = 5;
  studentES6.getName();
  studentES6.getClass();
  studentES6.printDetails();