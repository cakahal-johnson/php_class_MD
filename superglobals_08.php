<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super||Globals</title>
</head>
<body>
    <h3>PHP Super Globals</h3>
    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILES</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
    </ul>

    <h3>$GLOBALS</h3>
    <p>In PHP this super globals variables is used to access global variables from anywhere in the PHP script i.e it also within functions or methods <br> PHP store all global variables in an array called $GLOBALS[index]. the index holds the name of the variable</p>

    <?php
        $x = 55;
        $y = 65;

        function addi(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addi();
        echo($z); //returns 120

        echo '<br>'

    ?>

    <h3>PHP SERVER</h3>
        <p>this variable which holds information about headers, paths and script locations </p>
        <ul>
            <li>HOST: <?php echo $_SERVER['HTTP_HOST']; ?>  </li>
            <li>Documnet Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?>  </li>
            <li>System Root: <?php echo $_SERVER['SystemRoot']; ?>  </li>
            <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?>  </li>
            <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?>  </li>
            <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?>  </li>
            <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?>  </li>
            <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>  </li>
            <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?>  </li>
            <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?>  </li>
            <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?>  </li>

        </ul>

        <h3>PHP REQUEST</h3>
        <p>this variables which is used to collect data after submitting and HTML form</p>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- php_self: returns the filename of the current executing script -->
            name: <input type="text" name="fname" id=""> <br> <br>
            <input type="submit" value="submit">
        </form>

        <!-- function for PHP action -->
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // REQUEST_METHOD RETURNS THE REQUEST METHOD USED TO ACCESS THE PAGE (SUCH AS POST AND GET)
                // HERE WE COLLECT VALUES OF THE INPUT FILED
                $name = htmlspecialchars($_REQUEST['fname']);
                if(empty($name)){
                    echo "Name is Empty";
                }else{
                    echo $name;
                }
            }
        ?>

        <h3>PHP POST</h3>
        <p>This is a PHP super global variables which is used to collect form data after submitting and HTML form with method= " POST " .$_POST is also widely used to pass variables</p>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- same as above -->
        </form>

        <h3>PHP GET</h3>
        <p>this variable is used to collect form data after submitting an HTML from with method= "get" </p>
        <p>$_GET can also collect data sent in URL</p>
        <!--  -->
        <form method="GET" action="superglobals.php">
            Name: <input type="text" name="name"> <br>
            Email: <input type="email" name="email"> <br>
            <input type="submit" > <br>
        </form>

        welcome <?php echo $_GET["name"]; ?> <br>
        Your email is: <?php echo $_GET["email"]; ?> <br>


        <h3>The differents between GET and POST</h3>
        <li>both is an array so this arrays holds key/values pairs, where the key are names of the form controls and values: are input data type from the user <li>
        <li>_GET: is an array of variables that passed to the current script via the URL parameters</li>

         <li>_POST is also an array of variables passed to the current script via the HTTP POST method</li>

         <h3>uses</h3>
         <li>Get: when we want the content to be visible to everyone which is displayed in the URL, it also has a limits on amount of information to send which is 2000 characters best used when sending non-sensitive data and it's possible to bookmark the page </li>

         <li>POST: when we want the content to invisible to others all name and values are embeded within the bbody of the HTTP request and it has no limit and moreover it's supports advanced functionality such as binary while uploading files to stream_socket_server, it's not being displayed in the URL and it's not possible to bookmark the page</li>
</body>
</html>