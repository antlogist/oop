import ParentClass from "./Parent.js";

export default function ChildClass(childName, parentClass) {
  ParentClass.call(this, childName, parentClass);
  this.childName = childName;
  this.parentName = parentClass.parentName;
  this.parentSurename = parentClass.parentSurename;
  
  this.getParentName = function() {
    return parentClass.getParentName();
  }
  
  this.getChildName = function() {
    return this.childName;
  }
}
