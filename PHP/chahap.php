<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<style type="text/css">
  rcb{
 color="black"  
}
</style>

</head>
<body>
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","ipldb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<!-- Main Container -->
<div class="container"> 
  <!-- Header -->
  <header class="header">
    <h4 class="logo">PLAYER PROFILE</h4>
  </header>
  <!-- Hero Section -->
  <section class="intro">
    <div class="column">
      <h3 style="color: black">AB_DE_VILLIERS</h3>
    <img src="abd.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Abraham Benjamin de Villiers (born 17 February 1984), commonly known as AB de Villiers, is a former international cricketer who has captained South African cricket team across all three formats. He was named as the ICC ODI Player of the Year three times during his 15-year international career.

He played for Titans in South African domestic cricket and Delhi Daredevils & Royal Challengers Bangalore in the Indian Premier League (IPL). In limited overs cricket he is an attacking batsman.[2] He has the record of hitting the fastest ODI century in just 31 balls. He also records the fastest ODI 50,100 and 150.</p>
      <p style="color: purple">RCB vs CSK</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='abde_villiers' and matchid='1'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['Rs'] ."</p>";
                echo "<p>BALLS FACED : ".$row['BF'] ."</p>" ;
                echo "<p>NO. OF 4's : ". $row['4s']."</p>";
                echo "<p>NO. OF 6's : ". $row['6s']."</p>";
                echo "<p>STRIKE RATE : ". $row['sr']."</p>";
                
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
    </div>
  </section>
  <!-- Stats Gallery Section -->
  <!-- Footer Section -->
  <!-- Copyrights Section -->
  <div class="copyright"> ROYAL CHALLENGERS BANGLORE</div>
</div>
<!-- Main Container Ends -->
</body>
</html>
