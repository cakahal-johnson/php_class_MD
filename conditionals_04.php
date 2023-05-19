<?php
/*
 CONDITIONALS & OPERATORS
 
 OPERATORS
 < Less than
 > Greater than
 <= Less than or equal to
 >= Greater than or equal to
 == Equal to
 === Identical to
 != Not equal to
 !== Not identical to

 IF STATEMENTS
 syntax:
 if(condition){
    //code to be executed if condition is true
 }

 */

$age = 18;
if ($age >= 18){
    echo 'You are old enough to vote!';
}else{
    echo 'Sorry, you are too young to vote!';
}
echo '<br>';

// Dates
// $today = date("F j, Y, g:i a "); // dates formatters

$t = date('H'); // H is an agrs*

if ($t < 12){
    echo 'Have a good Morning!';
}elseif ($t < 17){
    echo 'Have a good Afternoon!';
}else{
    echo 'Have a good evening';
}

echo '<br>';

// check if an array is empty
// The isset() function will generate a warning or e-notice when empty.

$posts = [];

if (!empty($posts[0])){
    echo $posts[0];
}else {
    echo 'There are no posts';
}
echo '<br>';

// we will re-visit for more in next file

/*
TERNARY OPERATOR

this is a shorthand if statement.

Ternary Syntax:
condition ? true : false;


*/

// Echo based on a conditional statement using the same example above
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo '<br>';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'there are no posts';
echo '<br>';

// else can also take null
$firstPost = !empty($posts[0]) ? $posts[0] : null;
echo '<br>';


// Null Coalescing Operator ?? (PHP 7.4)
// will return null if $posts is empty
// Always returns first parament, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;
echo '<br>';


var_dump($firstPost);
echo '<br>';



/*
SWITCH STATEMENTS

*/
// $favcolor = 'red';
$favcolor = 'gray';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue nor green!';
    
}

echo '<br>';
echo 'Your favorite color is: ' . $favcolor;

?>