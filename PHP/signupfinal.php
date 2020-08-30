<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "signupdb";

$conn = mysqli_connect($host,$user,$password);
$db = mysqli_select_db($conn,$database);
?>


<?php
$username = $_POST["username"];
$password = $_POST["password"];
$emailid = $_POST["email"];
$contact = $_POST["contact"];

$query = "select * from users where username='$username'";

$exec = mysqli_query($conn,$query);
$result = mysqli_num_rows($exec);

if($result == 1){
  echo "user already exists";
}
else{
  $query1="insert into users(username,password,email,contact) values ('$username','$password','$email','contact')";
  $exec1 = mysqli_query($conn,$query1);
  echo "user created";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signup page </title>
      <link rel="icon" href="icon.jfif" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="style1.css">
   
  </head>
  <body>

<form class="box" action="index.html" method="post">
  <h1>Sign UP</h1>
  <input type="text" name="" placeholder="Username">
  <input type="password" name="" placeholder="Password">
  <input type="text" name="" placeholder="emailid">
  <input type="email" name="" placeholder="Mobile No">
  <input type="submit" name="" value="Signup" formaction="DiffLOG.html">
</form>


  </body>
</html>
