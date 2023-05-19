<?php

/*============VARIABLES AND DATATYPES================== */

//Php Data Types
/*
    _ String - A string is a series of charcaters surrounded by quotes
    _ Integer - Wholes numbers (0123456789)
    _ Float - Decimal Numbers (0.5 1.5 1.0 1.2)
    _ Boolean - true or false
    _ Array - An Array is a special variable, which can hold more than one value
    _ Object - A class 
    _ Null - Empty variables
    _ Resource - A special variables that holds a resource values

*/

// Variables Rules
/**
 * variables must be prefixed with $ if not it's a variable
 * after the $sign we start with a letter or underscore character
 * variables can't start with a number
 * variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _ )
 * variables are case-sensitive($name and $Name are two different variables)
 */

 $name = 'cakahal johnson'; // String can be single or double quotes
 $age = 70; // Integer
 $hasMarried = true; // Boolean
 $myMoney = 100.99; //Float

 echo $name;
 echo  '<br>';
 var_dump($myMoney);

 // using double quotes to add variables to a string
 echo  '<br>';
echo "Good afternoon: $name";
echo  '<br>';
 
//best way is to have it in {} curl bracket is called deprecated
echo  '<br>';
echo "${name} is ${age} years old";

//Concatenation
// dot . to concatenate
echo  '<br>';
echo '<h3>' .$name . ' is ' . $age . ' years old </h3>';

// Arithmetic Operators
echo  '<br>';
echo 5 + 5 ;
echo  '<br>';
echo 10 * 3;
echo  '<br>';
echo 9 - 5;
echo  '<br>';
echo 12 / 2;

// Constants - Cannot be change
define('HOST', 'localhost'); //copypath FOR THE url
define('USER', 'root'); //database

// IS CASE-INSENSITIVE 
define("Hello", "hey there!");
echo Hello;

// IS CASE-INSENSITIVE 
define("GREETINGS", "hI THERE!", true);
echo GREETINGS;

//calling the constants out USING KEYS VALUES
echo  '<br>';
var_dump(HOST);

// CREATING in Array
define("cars", [
    "Benz",
    "lexus",
    "Rx 340"
]);
echo cars[0];

// creating as an Object
define("HI", "PHP IS AWESOME WITH ;");
function myObj(){
    echo HI;
}
myObj();




?>