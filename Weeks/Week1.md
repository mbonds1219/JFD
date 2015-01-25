## Week 1
* Introduction
* Who am I?
* Course Plan/Depth
* Materials - Software (below)
* What is JS? - Object Oriented
* JavaScript is <u>NOT</u> Java


* Basic Syntax
* Khan Academy

### Project

```
Complete Khan Academy exercises, if time permits.

Code Kata.
- fizz buzz
- every number from 1 to 100
- if divisible by 3, print "fizz"
- if divisible by 5, print "buzz"
- if divisible by 3 && 5, print "fizzbuzz"
- else, print the number
```
### My Solution

```javascript
for (var i = 1; i <= 100; i++) {
  var fizz = 'fizz', buzz = 'buzz', print = i;
  if (i % 3 === 0) print = fizz;
  if (i % 5 === 0) print = buzz;
  if (i % 5 === 0 && i % 3 === 0) print = fizz + buzz;
  console.log(print);
}


Short Example
for ( var i = 1; i <= 100; i++) {
  var t = (i % 3 === 0 ? 'fizz' : ''),
  f = (i % 5 === 0 ? 'buzz' : ''),
  print = (t || f ? t + f : i);
  console.log(print);
}

Really Short Example
for ( var i = 1; i <= 100; i++) {
  console.log((i % 3 === 0? (i % 5 === 0 ? 'fizzbuzz' : 'fizz') : (i % 5 === 0 ? 'buzz' : i)));
}
```
