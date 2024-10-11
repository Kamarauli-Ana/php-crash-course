<?php

// Print current date

echo time().'<br>';  //mimdinare dro taimstempi//

echo date('Y-m-d H:i:s').'<br>';  //mimdinare dro//

// Print yesterday

echo date('Y-m-d H:i:s', time() -60 * 60 * 24).'<br>';  //gushindeli drois gageba mimdinare dros unda gamovaklot time()-it //



// Different format: https://www.php.net/manual/en/function.date.php

// string to timestamp

echo strtotime('now').'<br>';   //mimdinare dros bechdavs//
echo strtotime('+1 day').'<br>'; //xvalindel dges bechdavs//
echo strtotime('+1 week').'<br>'; //1 kviris shendeg tarigs bechdavs//

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$dateString = '2024-08-30 16:00:00';
$parsedDate = date_parse($dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';



// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
