<DOCTYPE html>
    <html>


    <head>
        <link rel="shortcut icon" type="image/x-icon" href="./img/ll2.jpg">
        
        <title> Form </title>
        <link rel="stylesheet" href="form.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
           
    body {
      /* background-image: url(./img/123.jpg); */


      background-image: url(./back.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;

    }

            
            .h2-2 {
                text-align: center;
                margin-top: 30px;
                margin-bottom: -21px;
            }

            .form-control {
                border: 2px solid black;
                border-radius: 4px;
                padding: 5px;
                width: 400px;
                margin-top: 5px;
                margin-left: -39px;
            }

            .form-1 {
                margin-left: 400px;

                margin-top: 20px;
            }

            .btn-1 {
                border: 2px solid black;
                background-color: black;
                color: yellow;
                padding: 8px;
                border-radius: 4px;
                width: 200px;
                margin-bottom: 3px;

            }

            .btnn {
               
                padding-top: 4px;
    padding-bottom: 8px;
    padding-left: 16px;
    padding-right: 16px;
    margin-left: 361px;

                
            }

            #inp-1 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-2 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-3 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-4 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-5 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-9 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-10 {
                margin-left: 79px;

                margin-top: -37px;
            }

            #inp-6 {
                margin-left: 79px;

                margin-top: -37px;
            }

            .g-1 {
                margin-top: 15px;
                color: aqua;


            }


            .form-group {
                font-family: 'Oswald', sans-serif;
                color: darkblue;
            }

            .a-1 {
                color: yellow;
                text-decoration: none;
            }
            .alert-success {
                color: #0a0b0be0;
    background-color: #7fca91;
    border-color: #035916;
            }
        </style>


    </head>
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
        $Username = $_POST['Username'];
        $email = $_POST['email'];
        $adhar = $_POST['adhar'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $Cartype = $_POST['Car-type'];
        $Carmodel = $_POST['Car-model'];
        $Carnum = $_POST['Car-num'];

        $sql = "INSERT INTO `car-information` (`Car-id`, `Username`, `email`, `Adhar`, `City`, `mobile`, `Car_type`, `Car_model`, `Car_Number`, `date`) VALUES (NULL, '$Username', '$email', '$adhar', '$city', '$mobile', '$Cartype', '$Carmodel', '$Carnum', ' current_timestamp()')";
        // $sql = "INSERT INTO `car-information` (`Car-id`, `Username`, `email`, `Adhar`, `City`, `mobile`, `Car_type`, `Car_model`, `Car_Number`, `date`) VALUES ('NULL', '$Username', '$email', '$adhar', '$city', '$mobile', '$Cartype', '$Carmodel', '$Carnum', 'current_timestamp()')";
        
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
             <strong>Success</strong> Insert your information in database.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
        } else {
            echo '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Failed</strong> Not insert your information in database.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
        }
    }
    ?>

    <?php
    ?>

    <body>
<!-- <div>
    <script>
       var favoriteMovie = sessionStorage.getItem('favoriteMovie');;
    </script>
</div> -->
        <h2 class="h2-2" style="color:rgb(30, 30, 58);"> Resistration Form <br><br></h2>

        <form action="/carsite/partial/myform.php" method="POST" class="form-1">
            <div class="form-group">
                <label for="exampleInputEmail1" class="l-1">Name</label>
                <input type="username" id="inp-1" name="Username" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email_id</label>
                <input type="email" id="inp-2" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adhar</label>
                <input type="username" class="form-control" name="adhar" required id="inp-3" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="username" class="form-control" id="inp-4" name="city" required aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mobile</label>
                <input type="username" class="form-control" name="mobile" required id="inp-5">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Car-type</label>
                <input type="username" class="form-control" name="Car-type" required id="inp-9">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Car-Model</label>
                <input type="username" class="form-control" name="Car-model" required id="inp-10">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">CarNumber</label>
                <input type="username" class="form-control" name="Car-num" required id="inp-6"><br><br><br>
            </div>


            <!-- <button type="submit" class="btn  btn-1 btn-primary">Submit</button> -->
            <!-- <button type="submit" class="a-2" href="">  Back</button> -->


        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you sure!</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm Submit</button>
      </div>
    </div>
  </div>
</div>






            <!-- <button type="submit"  href="./1page.html" class="btn  btn-2 btn-primary"   role="button" >Back</button>  -->

            <!-- <button type="submit" class="btn btn-primary btnn" href="http://localhost/carsite/1page.html">Home</button> -->
        
            <a  class="btn btn-primary btnn" href="http://localhost/carsite/1page.html" role="button">Home</a>
            <!-- <a  class="btn btn-primary btnn" href="http://localhost/carsite/1page.html" role="button"></a> -->
        

        </form>


        <!-- function show() { -->
        <!-- document.getElementById("write").innerHTML = serialNumber; -->
    <!-- } -->







        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>


    