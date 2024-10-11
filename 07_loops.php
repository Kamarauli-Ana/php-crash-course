<?php

// while

// Loop with $counter

$counter = 0;
while ($counter < 10 ){
    echo "Printing Counter: $counter".'<br>';
    $counter ++;
};
echo '<br>';


// do - while

$counter1 = 0;
do{
    echo "Printing counter: $counter1".'<br>';
    $counter ++;
}
while($counter1 > 0);

echo '<br>';

// do while -- whiles-gan gansxvavebit ertxel mainc shesruldeba radgan is jer sruldeba da shemdeg amowmebs pirobas//


// for

for ($i=0; $i<10; $i++){
    echo "Printing counter: $i".'<br>';
};

echo '<br>';

//--$i --aris indeqsi

// foreach

$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit){
    echo $i.' '.$fruit.'<br>';
};



echo '<br>';
// Iterate Over associative array.


$person = [
    'name'=>'Ana',
    'surname'=>'Kamarauli',
    'email'=>'kamarauli.a@gmail.com',
];

foreach ($person as $key => $value){
    echo $key.' '.$value.'<br>';
    if ($key === 'name'){
        break;
    }
};