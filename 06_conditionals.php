<?php

$age=35;
$salary=20000;

if ($age>30 && $salary===20000){
    echo "more then 30";
} elseif($age >25){
    echo"more then 25";
} else{
    echo"unknow";
};

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if
echo '<br>';
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// echo $age < 40 ? 'young' : 'Old' ;

// Short ternary

// Null coalescing operator

$var = $name ?? 'Jonathan';
echo print_r($var);  //es boloshi 1 umatebs da eg gasarkvevi maqvs ratom print-r ze//
echo '<br>';

$varr = isset($name)? $name : 'John';
echo '<pre>';
echo var_dump($varr);
echo '</pre>';

echo '<br>';


// echo '<pre>';
echo var_dump($var);
// echo '</pre>';

echo '<br>';


$person = [
    'name'=> 'emili'
];

// if (!isset($person['name'])){
//     $person['name'] = 'unknown';
// };

$person['name'] ??= 'unknown';//es igives aketebs rasac zeda xazi ubralod ase mokled sheidzleba chawera//

echo '<pre>';
var_dump($person);
echo '</pre>';


// switch

$userRole = 'admin';
switch($userRole){
    case 'admin':
    echo "you can do anything";
    break;
   case 'editor':
    echo "you can do edit";
    break;
    case 'user':
        echo "you did not have this role";
        break;
        default:
        echo "invalid role";
}
