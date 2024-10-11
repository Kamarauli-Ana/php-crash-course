<?php

require_once 'Person.php';
require_once 'Student.php';

// What is class and instance


$person = new Person('Ana', 'Kamarauli');
echo $person->hello();
echo '<br>';
$person = new Person('Giorgi', 'Dvali');
echo $person->hello();
echo '<br>';
$person->setAge(35);
echo $person->getAge().'<br>';

$student = new Student('lika', 'limarenko', '123');
echo $student->hello();
echo $student->studentId;