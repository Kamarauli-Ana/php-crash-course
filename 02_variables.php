<?php

// What is a variable


// Variable types

// Declare variables
$name = 'Ana';
$age = 35;
$isMail = true;
$height = 1.70;
$salary = 200;

// Print the variables. Explain what is concatenation

echo $name.'<br>';
echo $age.'<br>';
echo $isMail.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';

// Print the whole variable

var_dump($name, $age, $salary);

// Change the value of the variable

$name=false;
echo gettype($name) ;

// Print type of the variable

// Variable checking functions

is_string($name);
is_int($age);
is_bool($isMail);
is_double($height);

echo '<br>';
// Check if variable is defined
var_dump(isset($name));
echo '<br>';

// Constants

define ('PI', 3.14);
echo PI.'<br>';
defined('PI');

// Using PHP built-in constants
 echo SORT_ASC;
 echo '<br>';
 echo SORT_DESC;
 echo '<br>';
 echo PHP_INT_MAX;