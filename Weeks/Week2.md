#Week 2 Outline
* Git Repo
* The DOM
 * Document Object Model
 * Node - Tree Structure
 * View in Firefox
 * Parsed HTML = DOM
 *
* Objects - Introduction
* jQuery
 * Introduction
   - CSS Selectors
   - jQuery Object ($('.whatever') - Syntax)

### Project
```
Write a class in JavaScript that is instantiable, and has properties, and methods that manipulate those properties.
```

### My Solution
```javascript
var Me = function (val) {
  this.name = val;
  this.changeName = function () {
    if (this.newName === undefined) {// Ch
      return this.name;
    }
    this.name = this.newName;
    return this.name;
  }
}


var me = new Me('Michael');

console.log(me.name);// 'Michael'

me.changeName();// Does nothing, because me.newName is undefined

console.log(me.name);// Still 'Michael'

me.newName = 'Bob';

console.log(me.name);// Still 'Michael', but...
console.log(me.newName);// 'Bob'

me.changeName();// switch names

console.log(me.name);// 'Bob'

Shorter example
// Does the exact same thing
var Me = function (val) {
  this.name = val;
  this.changeName = function () {
    this.name = this.newName ? this.newName : this.name; // Called "Ternary"
    return this.name;
  }
}
```
