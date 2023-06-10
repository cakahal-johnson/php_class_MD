<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<style>
    .error
    {
        color: #ff0000;

    }
</style>
<body>
    <?php 

      // setting the variables
      $nameErr = $emailErr = $genderErr = $website = "";
      $name = $email = $gender = $website = "";

      //here we set the conditions
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        }else{
            $name = test_input($_POST["name"]);
            // checking if name only contains Letters and whitespace
            if(!preg_match("/^[a-zA-Z' ]*$/", $name)){
                $nameErr = "Only letters and white space allowed";
            }

        }

        if(empty($_POST['email'])){
            $emailErr = "Email is required";
        }else{
            $email = test_input($_POST["email"]);
            // php method for email val
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "INVALID EMAIL FORMAT";
            }
      }


      if(empty($_POST["website"])){
        $websiteErr = "website is required";
    }else{
        $website = test_input($_POST["website"]);
        // checking if name only contains Letters and whitespace
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "Invalid URL";
        }

    }

    if(empty($_POST["comment"])){
        $comment = "";

    }else{
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST['gender'])){
        $gender = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    

    // here is the test_input()
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    
    
    
    ?>

    <h3>PHP Form</h3>
    <p><span class="error">* require field</span></p>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

          <label for="">Name:</label>
          <input type="text" name="name" value="<?php echo $name; ?>">
          <span class="error">* <?php $nameErr; ?></span>
          <br><br>

          <label for="">email:</label>
          <input type="text" name="email" value="<?php echo $email; ?>">
          <span class="error">* <?php $emailErr; ?></span>
          <br><br>

          <label for="">website:</label>
          <input type="text" name="website" value="<?php echo $website; ?>">
          <span class="error">* <?php $websiteErr; ?></span>
          <br><br>

          <label for="">comment:</label>
          <input type="text" name="comment" value="<?php echo $comment; ?>">
          <span class="error">* <?php $commentErr; ?></span>
          <br><br>
          
          <label for="">Gender</label>
          <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
          <input type="radio" name="gender" <?php if (isset($gender) && $gender == "others") echo "checked"; ?> value="others">Others
          <span class="error">* <?php $genderErr; ?></span>
          <br><br>

          <input type="submit" name="submit" value="Submit>

          <?php
               echo "<h3> My DataBase </h3>";
               echo $name;
               echo "<br>";
               echo $email;
               echo "<br>";
               echo $website;
               echo "<br>";
               echo $comment;
               echo "<br>";
               echo $gender;
        
          ?>
          



          


    </form>







    
</body>
</html>
