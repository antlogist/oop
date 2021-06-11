export default class ParentClass {
  constructor(parentName, parentSurename = "Parent Surename") {
    this.parentName = parentName;
    this.parentSurename = parentSurename;
  }
  getParentName() {
    console.log(`Get parent name: ${this.parentName}`);
  }
}