<?php

function hello($name)
{
    echo "Hello I am $name";
}

hello('Ana');
echo '<br>';
hello('Nutsa');


// Create sum of two functions
echo '<br>';
function sum($a, $b)
{
    return ($a + $b)/3;
}

echo sum(4,5);

