<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource = curl_init();
 curl_setopt($resource, CURLOPT_URL, $url);
 curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
 $result = curl_exec($resource);
 curl_close($resource);
 echo $result;

// Get response status code

// set_opt_array

// Post request
?>