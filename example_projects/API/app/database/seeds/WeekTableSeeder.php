<?php
namespace App\Database\Seeders;

use App\Models\Week;
use \Seeder;

class WeekTableSeeder extends Seeder
{
    public function run()
    {
        Week::create(['number' => '1', 'subject' => 'Intro', 'description' => '## Week 1
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
          var fizz = \'fizz\', buzz = \'buzz\', print = i;
          if (i % 3 === 0) print = fizz;
          if (i % 5 === 0) print = buzz;
          if (i % 5 === 0 && i % 3 === 0) print = fizz + buzz;
          console.log(print);
        }


        Short Example
        for ( var i = 1; i <= 100; i++) {
          var t = (i % 3 === 0 ? \'fizz\' : \'\'),
          f = (i % 5 === 0 ? \'buzz\' : \'\'),
          print = (t || f ? t + f : i);
          console.log(print);
        }

        Really Short Example
        for ( var i = 1; i <= 100; i++) {
          console.log((i % 3 === 0? (i % 5 === 0 ? \'fizzbuzz\' : \'fizz\') : (i % 5 === 0 ? \'buzz\' : i)));
        }
        ```
    ']);

    Week::create(['number' => '2', 'subject' => 'Objects, The Dom, and jQuery', 'description' => '
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
       - jQuery Object ($(\'.whatever\') - Syntax)

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


    var me = new Me(\'Michael\');

    console.log(me.name);// \'Michael\'

    me.changeName();// Does nothing, because me.newName is undefined

    console.log(me.name);// Still \'Michael\'

    me.newName = \'Bob\';

    console.log(me.name);// Still \'Michael\', but...
    console.log(me.newName);// \'Bob\'

    me.changeName();// switch names

    console.log(me.name);// \'Bob\'

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

    ']);
    }
}
