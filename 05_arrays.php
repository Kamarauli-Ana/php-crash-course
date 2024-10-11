<?php

// Create array

$fruits = ["Banana", "Apple", "Orange"];
echo '<pre>';
var_dump( $fruits);
echo '</pre>';





// Print the whole array

echo '<pre>';
print_r($fruits);
echo '</pre>';

// Get element by index

echo $fruits[0];

// Set element by index

echo $fruits[1]='peach';
echo '<pre>';
print_r($fruits);
echo '</pre>';


// Check if array has element at index 2


echo '<pre>';
var_dump(isset($fruits[3]));
echo '</pre>';


// Append element

$fruits[] = 'Mango';
print_r($fruits);

array_push($fruits, 'Potato');
echo '<pre>';
print_r($fruits);
echo '</pre>';

// Print the length of the array
echo  count($fruits);



// Add element at the end of the array
echo '<br>';
echo  array_pop($fruits);

// Remove element from the end of the array
echo '<br>';
 array_unshift($fruits, 'Apple');
 echo '<pre>';
 print_r($fruits);
 echo '</pre>';


// Add element at the beginning of the array

echo '<br>';
echo array_shift($fruits);


// Remove element from the beginning of the array

// Split the string into an array

$string = "Mango, Apple, Orange";
$fruits2 = explode(",",$string);
echo '<pre>';
print_r($fruits2);
echo '</pre>';

// Combine array elements into string

echo implode("&", $fruits2);

// Check if element exist in the array

 in_array('Apple', $fruits);
 

// Search element index in the array
echo '<br>';
echo array_search('Mango', $fruits);
echo '<br>';


// Merge two arrays

$newarray = array_merge($fruits, $fruits2);
$newarray = [...$fruits, ...$fruits2];
echo '<pre>';
print_r($newarray);
echo '</pre>';


// Sorting of array (Reverse order also)

 sort($fruits);
 echo '<pre>';
print_r($fruits);
echo '</pre>';


//filter, map, reduce of array

$numbers = [1,2,3,4,5,6,7,8,9,10];
$evens = array_filter($numbers, fn($n) => $n % 2 === 0);

echo '<pre>';
print_r($evens);
echo '</pre>';


$arraymap = array_map(fn($n) => $n + 1, $numbers);
echo '<pre>';
print_r($arraymap);
echo '</pre>';


$sum = array_reduce($numbers, fn($carry, $n)=> $carry + $n);
echo $sum;


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays

// ============================================

// Create an associative array
$person = [
    'name'=> 'Ana',
    'surname'=>'kamarauli',
    'age'=>35,
    'hobbies'=>['dance']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key

echo $person['name'].'<br>';

// Set element by key

$person['name']='lika';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

echo '<pre>';
var_dump(isset($person['address']));
echo '</pre>';

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys

ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos =[
    ['title'=>'Todo 1', 'completed'=>true],
    ['title' =>'Todo 2', 'completed'=>false],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';