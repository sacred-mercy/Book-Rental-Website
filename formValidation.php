<!DOCTYPE HTML>

<html lang="en">

<head>

    <style>

        .error {
            color: #FF0000;
        }

    </style>
    <title></title>

</head>

<body>

<?php
  
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  
  $name = $email = $gender = $comment = $website = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
      
      $nameErr = "Please enter a valid name";
      
    } else {
      
      $name = test_input($_POST["name"]);
      
      // check if name only contains letters and whitespace
      
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        
        $nameErr = "Only letters and white space allowed";
        
      }
      
    }
    
    if (empty($_POST["email"])) {
      
      $emailErr = "valid Email address";
      
    } else {
      
      $email = test_input($_POST["email"]);
      
      // check if e-mail address is well-formed
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $emailErr = "The email address is incorrect";
        
      }
      
    }
    
    if (empty($_POST["website"])) {
      
      $website = "";
      
    } else {
      
      $website = test_input($_POST["website"]);
      
      // check if URL address syntax is valid
      
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        
        $websiteErr = "Enter a valid Website URL";
        
      }
      
    }
    
    if (empty($_POST["comment"])) {
      
      $comment = "";
      
    } else {
      
      $comment = test_input($_POST["comment"]);
      
    }
    
    if (empty($_POST["gender"])) {
      
      $genderErr = "Please select a gender";
      
    } else {
      
      $gender = test_input($_POST["gender"]);
      
    }
    
  }
  
  function test_input($data): string
  {
    
    $data = trim($data);
    
    $data = stripslashes($data);
    
    return htmlspecialchars($data);
    
  }

?>

<h2>PHP Form Validation Example</h2>

<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    FullName: <label>
        <input type="text" name="name">
    </label>

    <span class="error">* <?php echo $nameErr; ?></span>

    <br><br>

    E-mail address: <label>
        <input type="text" name="email">
    </label>

    <span class="error">* <?php echo $emailErr; ?></span>

    <br><br>

    Website: <label>
        <input type="text" name="website">
    </label>

    <span class="error"><?php echo $websiteErr; ?></span>

    <br><br>

    Comment: <label>
        <textarea name="comment" rows="2" cols="10"></textarea>
    </label>

    <br><br>

    Gender:

    <label>
        <input type="radio" name="gender" value="female">
    </label>Female

    <label>
        <input type="radio" name="gender" value="male">
    </label>Male

    <span class="error">* <?php echo $genderErr; ?></span>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
  
  echo "<h2> Final Output:</h2>";
  
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

</body>

</html>
