var Person = function (firstName, lastName, gender) {
  this.firstName = firstName;
  this.lastName = lastName;
  this.gender = gender;

  // Action a person can do
  this.getMarried = function (otherPerson) {
    if (otherPerson !== undefined) {
      if (this.gender === 'F') {
        this.lastName = otherPerson.lastName;
      } else {
        console.log(otherPerson);
        otherPerson.lastName = this.lastName;
      }
      this.spouse = otherPerson;
      otherPerson.spouse = this;

      return "Just Married!";
    }
  };
  // get this person's name
  this.getName = function () {
    return this.firstName + ' ' + this.lastName;
  };
}

var michael = new Person('Michael', 'Bonds', 'M');// new Person object
var jessica = new Person('Jessica', 'Alba', 'F');// new Person object

console.log(michael.getName()); // 'Michael Bonds'
console.log(jessica.getName());// 'Jessica Alba'

jessica.getMarried(michael); // returns 'Just Married!'

console.log(michael.spouse); // object - {firstName: 'Jennifer', lastName: 'Bonds'}
console.log(jennifer.spouse); // object - {fistName: 'Micael', lastName: 'Bonds'} 
console.log(jessica.getName()); // 'Jessica Bonds' :)
