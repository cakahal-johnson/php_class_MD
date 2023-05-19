<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asso||Array</title>
</head>
<body>
    <h3>Asso||Array</h3>
    <?php

    // let's create an Object called books
    $books = [
        "Java Class Section",
        "Python Class Section",
        "JavaScript Class Section",
        "PHP Class Section",
    ];

    // here is for Asso-Arrays that has keys and values
    $cars =[
       [
          'name' => 'Benz',
          'model' => 'GLK',
          'email' => 'example@email.com',
          'url' => 'https://www.google.com'

       ],

       [
          'name' => 'Lexus',
          'model' => 'Rx570',
          'email' => 'example@email.com',
          'url' => 'https://www.google.com'

       ],

    ]


    ?>

    <!-- using this function to call out the Object -->
    <p>
         <?= $books[2] . '<br>'; ?> <!-- // the equal sign is called the echo -->
         
         <?php echo $books[3] . '<br>' ?> <!-- // the equal sign is called the echo -->
    </p>

    <br>

     <!-- where we foreach method -->
     <ol>
          <?php foreach($books  as $book)
            echo "<li>  $book  </li>";
            
          ?>

     </ol>

     <br>
     <!-- where we foreach method -->
     <ol>
          <?php foreach($books  as $book)
            // echo "<li>  $book <sup>TM</sup>  </li>";
            echo "<li>  {$book} <sup>TM</sup>  </li>";

          ?>

     </ol>

      <br>
      <h3>Looping for Associate Arrays</h3>
      <ul>
        <?php foreach ($cars as $car) : ?>

            <li>
                <a href="<?= $car['url'] ?>">
                    <?= $car['name']; ?>
                </a>
            </li>



        <?php endforeach ?>



     </ul> 


</body>
</html>