<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP||Functions</title>
</head>

<body>
<?php

// demo Database
$books = [
 [
    'name' => 'Androids Dream of Electric Sheep v2',
    'author' => 'Philips K. Dick',
    'releaseYear' => 2021,
    'purchaseUrl' => "https://www.google.com"
 ],

 [
    'name' => 'Androids Dream of Electric Sheep',
    'author' => 'Philips K. Dick',
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
    'releaseYear' => 2021,
    'purchaseUrl' => "https://www.bbc.com"
 ],

 [
    'name' => 'The one-chance',
    'author' => 'Cakahal Johnson',
    'releaseYear' => 2023,
    'purchaseUrl' => "https://www.bbc.com"
 ],
 [
    'name' => 'The one-chance var1',
    'author' => 'Cakahal Johnson',
    'releaseYear' => 2021,
    'purchaseUrl' => "https://www.bbc.com"
 ],
 [
    'name' => 'The one-chance v2',
    'author' => 'Cakahal Johnson',
    'releaseYear' => 2021,
    'purchaseUrl' => "https://www.bbc.com"
 ],


];

// refactor using array_filter
$filteredBooks7 = array_filter($books, function($book){
    // return $book['releaseYear'];
    return $book['author'] === 'Andy Weir';
});

// require "index.view.php";
// function 1 in php
function filterByAuthor($books){
    $filteredBooks = [];

    foreach ($books as $book){
        if ($book['author'] === 'Cakahal Johnson'){
            $filteredBooks[] = $book; // here we append the function to our loop variables
        }
    }

    return $filteredBooks; // here we assign the function in our filterBook variables
}

// Filter Function for the Author
function filterByAuthor2($books, $author){
    $filteredBooks = [];

    foreach($books as $book){
        if($book['author'] === $author){ // here author is the variable 
            $filteredBooks[] = $book; // here we append the function to our loop variables

        }
    }

    return $filteredBooks;
}

// here we filter the Function3 By Year
function filterByAuthor3($books, $year){
    $filteredBooks = [];

    foreach ($books as $book){
        if($book['releaseYear'] === $year){
            $filteredBooks[] = $book;
        }

    }

    return $filteredBooks;
}

// here we use the filter Function where by we want to filter by released  year we have to assign the index using LAMBDA Function which Anonymous or Naming FUcntion
$filterByauthor4 = function($books, $year){
    $filteredBooks = [];
    foreach($books as $book){
        if ($book['releasedYear'] === $year){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
};
$filterByBooksY = filterByAuthor3($books, 2021);

// GENERIC FUNCTION OR NAMING FUNCTION

function filter($items, $key, $value){
    $filtereditems = [];

    foreach($items as $item){
        if($item[$key] === $value){
            $filteredBooks[] = $item;
        }
    }

    return $filteredBooks;
};

$filteredBooks5 = filter($books, 'author', 'Cakahal Johnson'); // here is where you can change the args* for now

// GENERIC REFACTOR FUNCTION OR NAMING FUNCTION
function filter6($items, $fn){
    $filtereditems =[];

    foreach($items as $item){
        if($fn($item)){
            $filtereditems[] = $item;
        }
    }
    return $filtereditems;
}

// we call the naming function
$filteredBooks6 = filter6($books, function($book){
    return $book['releaseYear'] <= 2023;
});

// final refactor
$filteredBooks7 = array_filter($books, function($book){
    // return $book['releaseYear'] >= 2023;
    //return $book['releaseYear'] < 2023;
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2023;
    // return $book['author'] === 'Cakahal Johnson'


});




?>

<!-- Function 1 HTML section starts below -->
<ul>
    <!-- looping through the arrays -->
    <?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
               
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?> 
<!-- Function 1 HTML section ends above -->

<!-- Function 2 HTML section starts below -->
<ul>
    <!-- looping through the arrays -->
    <?php foreach($books as $book) : ?>
        <?php if ($book['author'] = 'Cakahal Johnson') : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 2 HTML section ends above -->

<!-- Function 3 HTML section starts below -->
<ul>
    <!-- looping through the arrays -->
    <?php foreach($books as $book) : ?>
        <?php if ($book['author'] === 'Andy Weir') : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 3 HTML section ends above -->

<!-- Function 4 HTML section starts below 
filtering through the arrays to get the books for without hard coding the author in the Html but at the Function
-->
<ul>
    <!-- looping through the arrays -->
    <?php foreach(filterByAuthor($books) as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 4 HTML section ends above -->

<!-- Function 5 HTML section starts below 
filtering through the arrays to get the books for without hard coding the author inside HTML function Params* args*
-->
<ul>
    <!-- looping through the arrays -->
    <?php foreach(filterByAuthor2($books, 'Philips K. Dick') as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 5 HTML section ends above -->

<!-- Function 6 HTML section starts below 
filtering through the arrays to get the books for without hard coding the Year inside HTML function Params* args*
-->
<ul>
    <!-- looping through the arrays -->
    <?php foreach(filterByAuthor3($books, 2023) as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
Function 6 HTML section ends above

<!-- Function 7 HTML section starts below 
filtering through the arrays to get the books for without hard coding the Year inside HTML function Params* args*
-->
<ul>
    <!-- looping through the arrays -->
    <?php foreach($filterByBooksY as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 7 HTML section ends above -->

<h3>generic function</h3>
<ul>
    <!-- looping through the arrays -->
    <?php foreach($filteredBooks5 as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<h3>generic refactor function</h3>
<ul>
    <!-- looping through the arrays -->
    <?php foreach($filteredBooks6 as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<h3>generic final refactor function</h3>
<ul>
    <!-- looping through the arrays -->
    <?php foreach($filteredBooks7 as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
                - By <?= $book['author'] ?>
               
            </a>
        </li>
    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>
<!-- Function 7 HTML section ends above -->





</body>

</html>