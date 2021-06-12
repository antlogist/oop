import ParentClass from "./Parent.js";
import ChildClass from "./Child.js";

const parent = new ParentClass("Parent Class");

const child = new ChildClass("Child Class", parent);
console.log(child.childName);
console.log(child.parentName);
console.log(child.parentSurename);
console.log(child.getParentName());
console.log(child.getChildName());