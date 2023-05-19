<?php

/*
Sanitizing Inputs: Data submitted through a form which is not sanitized by default. so we have methods to sanitize data manually

*/

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
}

?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <div>
        <label for="">Name:</label>
        <input type="text" name="name" id="">
     </div> <br>

     <div>
        <label for="">Email:</label>
        <input type="email" name="email">

     </div> <br>

     <input type="submit" name="submit" value="Submit">

</form>

<?php
echo "<h3> My Users logins <h3>";

echo '<br>';
echo $name;
echo '<br>';
echo $email;

?>