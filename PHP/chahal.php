<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
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
      <h3 style="color: black">YUZVENDRA CHAHAL</h3>
    <img src="chahal.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Yuzvendra Singh Chahal (born 23 July 1990) is an Indian cricketer and former chess player who represents India in both One Day Internationals (ODIs) and Twenty20 Internationals (T20Is), and has also represented India internationally in chess at youth levels. He plays for Haryana in Indian domestic cricket and Royal Challengers Bangalore in the Indian Premier League.[1] He is a leg break bowler. Chahal was second player in T20I history to have taken a 6 wicket haul.[2]</p>
      <p style="color: purple">RCB vs CSK</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='yuzvendra_chahal' and matchid='1'";
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
