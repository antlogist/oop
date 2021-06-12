export default function ParentClass(
  parentName,
  parentSurename = "Parent Surename"
) {
  this.parentName = parentName;
  this.parentSurename = parentSurename;
}

ParentClass.prototype.getParentName = function() {
  return `Get parent name: ${this.parentName}`;
}
