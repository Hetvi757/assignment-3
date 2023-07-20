<?php require 'feedback.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Feedback Form</title>
  <link rel="stylesheet" href="feedback.css">
   <link rel="scriptsheet" href="feedback.js">
</head>

<body>

  <?php
  // Defining variables
  $name = $surname = $phone = $emailid="";
  $_SAVE=false;
  // Checking for a POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SAVE=false;
    $name = ($_POST["name"]);
    $surname = ($_POST["surname"]);
    $phone= ($_POST["[phone"]);
    $emailid = ($_POST["emailid"]);
    
    // echo "<h2>Your Input:</h2>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $message;
    if($_CONN){
      $query = "INSERT INTO student(name, surname,phone,emailid) VALUES('".$name."','".$surname."','".$phone."','"$emailid."')";
      $result = $conn->multi_query($query);
      $_SAVE=true;
    }
  }
  ?>

<div class="wrapper">
        <h2>feedback form</h2>
        <div id="error_message">
           
        </div>
        <form action="" id="myform" onsubmit = "return validate();">
          <div class="input_field">
              <input type="text" placeholder="Name" id="name">
          </div>
          <div class="input_field">
              <input type="text" placeholder="surname" id="surname">
          </div>
          <div class="input_field">
              <input type="text" placeholder="Phone" id="phone">
          </div>
          <div class="input_field">
              <input type="text" placeholder="Email" id="email">
          </div>
          <div class="input_field">
              <textarea placeholder="Message" id="message"></textarea>
          </div>
          <div class="btn">
              <input type="submit">
          </div>
        </form>
      </div>
      <?php
        if($_SAVE){
          echo '<p style="color:#ffffff ; text-align:center; margin-top:10px; ">Thank you! Your feedback has been submitted.</p>';
        }
      ?>
    </div>
  </div>

  
</body>

</html>