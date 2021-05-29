class Student {
  constructor(marks) {
    this.marks = marks;
  }
  examResults(marks) {
    // Check if the data is not array type
    if (!Array.isArray(marks)) {
      console.log("Entry data is not array type");
      return;
    }

    const total = eval(marks.join('+'));

    // If array length less than 3
    if (marks.length < 3) {
      console.log("Insufficient data");
      return;
    }

    // If array length more than 3
    if (marks.length > 3) {
      console.log("Redundant data");
      return;
    }

    // Main loop
    for (let mark of marks) {
      // If the mark less than 35
      if (mark < 35) {
        console.log(`Exam failed! Total: ${total} :(`);
        return
      }
      // If the mark more than 100
      if (mark > 100) {
        console.log(`The ${mark} mark is a Wrong mark!`);
        return
      }
    }

    console.log(`Exam passed! Total: ${total} :)`);
    return;
  }
}

const student = new Student();
student.marks = [55, 45, 65];
student.examResults(student.marks);
