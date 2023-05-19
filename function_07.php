<?php
/**
 *  Php Function Syntax, local scope and global scope global
 */

 //Syntax:
 function reg(){
    // here we pass the db connection returns
    // we also pass Auth returns
    echo 'User has been registered!';
 }

 // here let's run this function
 reg();

 echo '<br>';

 // here let's add parameters or agrs*
 function login($username){
    echo "User ${username} has been registered"; // {username}

 }

 // let's return the agrs* from the parameters
 login('cakahal johnson');
 echo '<br>';


 // we can also have a return in a function
function adding($num1, $num2){
    return $num1 + $num2;
}

// calling out return statement
$sum = adding(624, 149);
echo $sum;
echo '<br>';

// adding defualt args* values
function substract($num3 = 508, $num4 = 911){
    return $num3 - $num4;
}

echo substract(); // here if the args is empty then the defualt value will be returned
echo '<br>';

$subs = substract(306, 6); 
echo $subs; // 300
echo '<br>';

// Assigning anonymous function to variables often used for closures and callback function (naming)
$anony = function($num5, $num6){
    return $num5 * $num6;

};

echo $anony(7, 2); // using this naming-function the above function will also a closures with ;

// Array function using arrow function method
$arrow = fn($num7, $num8) => $num7 / $num8;

echo '<br>';
echo $arrow(225, 3); 


?>