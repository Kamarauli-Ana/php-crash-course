<?php
// Magic constants

echo __FILE__.'<br>';
echo __DIR__.'<br>';
echo __LINE__.'<br>';

// Create directory

if (mkdir('test'))
{
    echo "created";
}

// Rename directory

if (rename('test', 'test_dir'))
{
    echo "renamed";
}

// Delete directory

if (rmdir('test'))
{
    echo "removed";
}

// Read files and folders inside directory

$files = scandir('./');
echo '<pre>';
echo var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents

echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', file_get_contents('lorem.txt'));

// file_get_contents from URL

$content = file_get_contents('https://jsonplaceholder.typicode.com/users');
file_put_contents('users.json', $content);



// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file