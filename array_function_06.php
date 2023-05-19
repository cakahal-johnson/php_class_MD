<?php
/* Array Function */

$students = ['peter', 'mba', 'obi', 'cakahal'];

//getting array length
echo count($students);

echo '<br>';
//search Array: checking for an item inside the array this will returns boolean 1 if true and null is false
echo in_array('obi', $students);

echo '<br>';

// Adding an item to An Array
$student[] = 'johnson';
var_dump($student);

echo '<br>';
//appends means adding to the last item
array_push($student, 'Dave', 'mazi');

//unshift means adding to the beginning
array_unshift($student, 'joy', 'hope'); 


// Removing from an Array 
//array_pop will remove the last item
array_pop($student);

//array_shift will remove the first item
array_shift($student);

// Removing with specific elements we use unset(var.[position index])
unset($student[1]); //we remove by position

echo '<br>';

// Split into chunks of 4
$fourByfour = array_chunk($students, 2);
print_r($fourByfour);

echo '<br>';
// concatenation in arrays
$player1 = [1,2,3,4,5];
$player2 = [6,7,8,9,0];

$check_player = array_merge($player1, $player2);

print_r($check_player);
echo '<br>';

// concatenation without the array_merge
$wtout_merge = [...$player1, ...$player2];

print_r($wtout_merge);

echo '<br>';
// combining an Array (keys & values)
$a = ['benz', 'lexus', 'Rx750'];
$b = ['cakahal', 'Dave', 'Mazi'];

$c = array_combine($a, $b);
print_r($c);
echo '<br>';


// getting the array by the keys:
$keys = array_keys($c);
print_r($keys);

// getting the array by the values:
echo '<br>';
$var = array_values($c);

print_r($var);


// here we can flip the keys and values
echo '<br>';
$flipping = array_flip($c);
print_r($flipping);


// creating array of number with range()
$courses = range(1, 20);

$newCourse = array_map(function($course){
    // return $course;
    return "My Number is -  ${course}";
}, $courses);

print_r($newCourse);

// filter in Array
// using an arrow function
$anyNum = array_filter($courses, fn($course) => $course <= 10);
print_r($anyNum);

//Array Reduce
//This "carry" holds the returns values of the previous iteration
$summ = array_reduce($courses, fn($carry, $course) => $carry + $course);
print_r($summ);

// Assignment use array filter to get the odd numbers and even numbers in the range of 1 to 99 using arrow function
















?>