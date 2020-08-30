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
      <h3 style="color: black">SURESH_RAINA</h3>
    <img src="suresh.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Suresh Kumar Raina (About this soundpronunciation (help·info); born 27 November 1986) is an Indian international cricketer. An aggressive left-handed middle-order batsman and an occasional off-spin bowler, he is also regarded as one of the best fielders in world cricket. He plays for Uttar Pradesh in all forms of domestic cricket. He was the captain of the Gujarat Lions in the Indian Premier League, and is the vice-captain of the Chennai Super Kings.[2] He has also captained the Indian cricket team and is the second-youngest player ever to captain India. He is the first Indian batsman to hit a century in all three formats of international cricket.[3]

Raina made his ODI debut in July 2005 against Sri Lanka at the age of 19. However, his Test debut came about five years later, in July 2010, against the same opposition. He scored a hundred on his Test debut. He was a part of the Indian squad that won the 2011 World Cup.</p>
      <p style="color: yellow">RCB vs CSK</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='suresh_raina' and matchid='1'";
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
  <div class="copyright">CHENNAI SUPER KINGS</div>
</div>
<!-- Main Container Ends -->
</body>
</html>
