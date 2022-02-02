


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>


<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "owncar";

  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) {
    die("Sorry we failed to connect :" . mysqli_connect_error());
  }

  ?>





  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['name'];
    $email = $_POST['id'];
    $mail = $_POST['mail'];
    
    

    $sql = "INSERT INTO `mailss` (`S/N`, `Username`, `email`, `text-mail`, `date`) VALUES ('1', '$username', '$email', '$mail', current_timestamp());";
    $result = mysqli_query($conn, $sql);
  
  }
  
  error_reporting(0);
  if ( $result) 
  {
    echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
       <strong>Success</strong>    Thanku For your Feedback.
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
  }
    else
    {error_reporting(0);
    echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Failed</strong> Not insert your information in database.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
  </div>';
  }
  error_reporting(0);

  
  ?>




<h2> Please give us your valuable feedback</h2>
  <form action="/carsite/partial/mail.php" method="POST" class="form-1">

    <div>
      <label for="po">Entre name:</label>
      <input type="text" id="po" class="c1" placeholder="write your name" name="name" required><br>
      <label for="pq">Entre email:</label>
      <input type="email" id="pq" class="c1"  placeholder="write your mail" name="id" required><br>
      <label for="pw">Entre Feedback</label> <br>
      <textarea id="pw" class="c1"  cols="30" rows="10" placeholder="write feedback here" name="mail"  required></textarea><br>
      <input type="submit" class="c2 btn-2 ">
      <button class="btn-2 "><a class="a-1" href="http://localhost/carsite/1page.html">Home</a></button>
    </div>




  </form>
</body>
</html>