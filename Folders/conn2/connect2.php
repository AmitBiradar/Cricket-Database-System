<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="box" method="get" action="http://localhost:8080/cricket5.html">
 <input type="text" name="username" placeholder="username">
 <input type="password" name="password" placeholder="password">
 
    <input type="submit" value="login">

</form>
</body>
</html>

<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "logindb";
//Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}

?>