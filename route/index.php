<?php

// demo Database
$books = [
 [
    'name' => 'Androids Dream of Electric Sheep',
    'author' => 'Phillips K. Dick',
    'releaseYear' => 1968,
    'purchaseUrl' => "https://www.google.com"
 ],

 [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseUrl' => "https://www.cnn.com"
 ],

 [
    'name' => 'The Martian',
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseUrl' => "https://www.bbc.com"
 ],


];

// refactor using array_filter
$filteredBooks7 = array_filter($books, function($book){
    // return $book['releaseYear'];
    return $book['author'] === 'Andy Weir';
});

// require "index.view.php";



?>