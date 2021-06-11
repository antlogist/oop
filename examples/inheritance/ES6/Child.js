import ParentClass from "./Parent.js";

export default class ChildClass extends ParentClass {
  constructor(childName, parentClass) {
    super(parentClass);
    this.childName = childName;
    this.parentName = parentClass.parentName;
    this.parentSurename = parentClass.parentSurename;
  }
  getChildName() {
    console.log(`Get child name: ${this.childName}`);
  }
}