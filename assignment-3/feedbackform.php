<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feedback.css">
    <link rel="scriptsheet" href="feedback.js">
    <link href="feedback.php">
    
</head>
<body>
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
      
</body>