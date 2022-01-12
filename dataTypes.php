<?php

/* 10 primitive Types:
-Scalar:
  String
  Integer
  Float
  Boolean
*/

/* Strings:
Double quotes -> "This is a string!"
Single quotes -> 'This is a string !'

We need to use 2 types of quotes when needed:
    "SELECT person 
    WHERE name='Daniel'
    ASC"

If you want to use this (it's) quote in a echo:
    echo 'I'm learning PHP'; -> Will fail
    echo 'I\'m learning PHP!; ->Will suceed
*/

/*Integers:
A number.

No need for quotes:
    echo 10;

Doing this, will give true as response, because even being a number if it has quotes, it's a string
    if("10" !== 10){
        echo "Not the same data type!";
    }

*/

/*Float:
It's a number with decimals:
    echo 10.5;
    echo 28.35;

*/

/*Boolean:
True or false

Example:
    $a = true;
    if($a === true){
        echo "Variable $a is true";
    }
*/