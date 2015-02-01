/**
 * Below are my solutions to the fizz buzz challenge
 */

 // Solution 1 - verbose
 for (var i = 1; i <= 100; i++) { // I set i = 1 becuase anything mod 0 === 0
   var fizz = 'fizz', // fizz
    buzz = 'buzz', // buzz
    number = i, // Current number in the loop
    print; // What we want to print

    // First, let's check for divisibility by 3
    if (number % 3 === 0) {
      print = fizz;
      // Check if also divisible by 5
      if (number % 5 === 0) {
        // This could also be written like: print += buzz
        print = print + buzz; // add buzz
      }
      console.log(print); //log what we built
    } else if (number % 5 === 0) {
      console.log(buzz);
    }
    // if not divisible by 3 or 5
    console.log(number); // log the number
 }


// Slightly less verbose
for (var i = 1; i <= 100; i++) {
 var fizz = 'fizz', buzz = 'buzz', print = i;
 if (i % 3 === 0) print = fizz;
 if (i % 5 === 0) print = buzz;
 if (i % 5 === 0 && i % 3 === 0) print = fizz + buzz;
 console.log(print);
}


 //Short Example
for ( var i = 1; i <= 100; i++) {
 var t = (i % 3 === 0 ? 'fizz' : ''),
 f = (i % 5 === 0 ? 'buzz' : ''),
 print = (t || f ? t + f : i);
 console.log(print);
}

//Really Short Example
for ( var i = 1; i <= 100; i++) {
 console.log(i % 3 ? (i % 5 ? 'fizzbuzz' : 'fizz') : (i % 5 ? 'buzz' : i));
}
