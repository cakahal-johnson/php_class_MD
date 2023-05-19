<?php
/* =========== Arrays =================== */
/*
    if you need to store multiple values, you can use arrays. Arrays hold "elemets" 
*/

//Simple array of numbers
$number = [1, 2, 3, 4, 5, 6];

// simple array for strings
$courses = ["Java", 'python', "PHP", "React"];


// outting an array value
echo $number[2]; // returns 3 first index of an array is zero
echo '<br>';
echo $number[3] + $number[2]; //returns 7

// where we want to see the contents of an array so we use print_r or var_dump
echo '<br>';
var_dump($number);

/* Associative arrays allows us to use named keys to identify values */
echo '<br>';
$course = [
    1 => 'Java',
    2 => "PHP",
    3 => 'Python',
    4 => 'React',
];

echo '<br>';
echo $course[2];


// where we have Strings as key
$stack_color = [
    'white' => "#f4f4f4",
    'gray' => "#ccc",
    "black" => "#000"
];

echo '<br>';
echo $stack_color['white'];
echo '<br>';
var_dump($stack_color);


/*============ Multi-diemensional Arrays =================*/
// where we have an Array of single student list
$student =
[
    "first_name" => "cakahal",
    "last_name" => "Johnson",
    'email' => 'example@gmail.com',
 ];

// // where we have an Array of multiply students list
$students = [
    $student1,
[
    "first_name" => "cakahal",
    "last_name" => "Johnson",
    'email' => 'example@gmail.com',
],
[
    "first_name" => "cakahal",
    "last_name" => "Johnson",
    'email' => 'example@gmail.com',
],
 ];

 echo '<br>';
 var_dump($students);

 // Accessing values in a multi-dimensional array
 echo '<br>';

echo $students[0]['first_name'];
echo $students[2]['email'];
echo '<br>';

// Encode to JSON
var_dump(json_encode($people));
echo '<br>';


// Decode from JSON
$jsonobj = '{"first_name":"Cakahal","last_name": "Johnson","email":"example@gmail.com"}';
var_dump(json_decode($jsonobj));







?>