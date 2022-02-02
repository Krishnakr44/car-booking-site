<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="./img/ll2.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <title>Feedback</title>
  <style>
    .alert-success {
    color: #111512;
    background-color: #57e078;
    border-color: #c3e6cb;}
    label {
    padding-left: 41px;
    display: inline-block;
    margin-bottom: .5rem; }
    body {
      background-color:bisque;
      background-image: url(./img/back.jpg);

    }
    .form {
      background-color: blueviolet;

    }

    div.c1 {
      margin: auto;
      font-size: large;
      color: blueviolet;
    }
    textarea {
    background-blend-mode: color-dodge;
    background-color: burlywood;
    margin-left: 122px;
    overflow: auto;
    resize: vertical;
    background-clip: content-box;
    /* caret-color: bisque; */
    background-position: center;
    text-align: center;}

    button, input {
    backface-visibility: initial;
    overflow: visible;
    background-color: burlywood;
    padding-left: 37px;
    background-blend-mode: darken;
}
.btn-2{
  background-clip: inherit;
    padding-left: 20px;
    background-color: cornsilk;
    padding-right: 20px;
    margin-left: 103px;
    margin-top: 30px;
}
  </style>
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
    $Username = $_POST['username'];
    $email = $_POST['emaila'];
    $feedback = $_POST['feedback'];


   $sql= "INSERT INTO `feedback` (`S/N`, `name`, `email`, `feedback`, `date`) VALUES ('3', '$Username', '$email', '$feedback', '2021-01-02 10:27:46')";
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
  //  else
  //   {error_reporting(0);
  //   echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
  //       <strong>Failed</strong> Not insert your information in database.
  //  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //    <span aria-hidden="true">&times;</span>
  //  </button>
  // </div>';
  // }
  // error_reporting(0);

  
  ?>



  <h2> Please give us your valuable feedback</h2>
  <form action="/carsite/partial/fedbk.php" method="POST" class="form-1">

    <div>
      <label for="po">Entre name:</label>
      <input type="text" id="po" class="c1" name="username" placeholder="write your name" required><br>
      <label for="pq">Entre email:</label>
      <input type="email" id="pq" class="c1" name="emaila" placeholder="write your mail" required><br>
      <label for="pw">Entre Feedback</label> <br>
      <textarea id="pw" class="c1" name="feedback" cols="30" rows="10" placeholder="write feedback here" required></textarea><br>
      <input type="submit" class="c2 btn-2 ">
      <button type="button" class="btn-2 "><a class="a-1" href="http://localhost/carsite/1page.html">Home</a></button>
      <!-- <button type="button" class="c2 btn-2"><a  href="./1page.html">Home</a></button> -->
    </div>




  </form>

</body>

</html>