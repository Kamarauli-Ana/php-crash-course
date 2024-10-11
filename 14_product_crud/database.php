<?php

$pdo = new PDO('mysql:host=localhost; port=4306; dbname=product_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;