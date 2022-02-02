<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "owncar";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Sorry we failed to connect :" . mysqli_connect_error());

}
$result = mysqli_query($conn,"SELECT * FROM myusers");
?> 



 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

</head>

<body>
<table>
  
  
  <tr>
    <td>Name</td>
    <td>email</td>
    <td>adhar</td>
    <td>city</td>
    <td>mobile</td>
    <td>cat_type</td>
    <td>Car_model</td>
    <td>car_num</td>
  </tr>
</table>
  </form>
  







<?php
if (mysqli_num_rows($result) > 0) {
?>
 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Username"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["Adhar"]; ?></td>
    <td><?php echo $row["City"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["Car_type"]; ?></td>
    <td><?php echo $row["Car_model"]; ?></td>
    <td><?php echo $row["Car_num"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

</body>
</html>







