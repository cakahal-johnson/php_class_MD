<?php

//Outting PHP 

    // output with single qoute
    echo 'php has awesome! syntax ';

    echo '<br>'; // br tag is to break into newline

    // output with double qoute
    echo "still as above";

    echo '<br>'; // br tag is to break into newline


    // output without case sensitive
    ECHO "still an echo";

    echo '<br>'; // br tag is to break into newline

    // outputting a number
    echo 123456;

    // outputting an HMTL TAG
    echo '<h1> hello world! </h1>';

    // we can also use print as in python to output in php
    print 'outputting printing as in python ';

    echo '<br>'; // br tag is to break into newline

    // Using print_r - Gives a bit more info. where can use to echo out an arrays
    echo '<br>'; // br tag is to break into newline

    print_r(['Cakahal', 'johnson']);

    echo '<br>'; // br tag is to break into newline

    print_r([1, 2, 3, 4]);

    echo '<br>'; // br tag is to break into newline
    echo '<br>'; // br tag is to break into newline

    //var_dump - it outputs  an arrays data even more with the dataType and length
    echo '<br>'; // br tag is to break into newline
    echo '<br>'; // br tag is to break into newline

    var_dump(['Cakahal','Johnson']);
    var_dump([1, 2, 3, 4]);

    echo '<br>'; // br tag is to break into newline
    echo '<br>'; // br tag is to break into newline

    //We can also use Escape characters
    echo "Name is:\tCakahal Johnson\n i'm 50 years old";

    // PHP comments 

    // Two slash is for single line comment

    /*
    this is a multi-line comment

    where you have a long description to take note of
    
    */

    /**
     * one
     * two
     * three
     * four
     * five
     */
    
     //NB: while using php in an open extension crt/ is abortive
     // then while inside the html we use both php and html comment




    echo '<br>'; // br tag is to break into newline

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php // "php is awesome" ?>

<!-- combining PHP with HTML -->
<h2>Welcome <?php echo 'to PHP Output class'; ?> </h2>

<!-- using the ? = i need to only have single qoute -->
<h3>Welcome <?= 'Let call it a Day see ya! next time...' ?>

</body>
</html>

