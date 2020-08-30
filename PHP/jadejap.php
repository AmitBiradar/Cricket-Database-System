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
      <h3 style="color: black">RAVINDRA_JADEJA</h3>
    <img src="jadeja.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Ravindrasinh Anirudhsinh Jadeja (born 6 December 1988), commonly known as Ravindra Jadeja, is an Indian international cricketer. He is an all-rounder, who plays as a left-handed middle-order batsman and slow left-arm orthodox bowler. He represents Saurashtra in first-class cricket and the Chennai Super Kings in the Indian Premier League.

Jadeja was part of the Indian U-19 cricket team that won the World Cup in Malaysia in 2008 under the captaincy of current Indian Captain Virat Kohli. He made his ODI debut against Sri Lanka on 8 February 2009 and scored an unbeaten 60 off 77 balls in that match. However, his Test debut came almost four years later, on 13 December 2012, against England at Nagpur.

Jadeja was bought for $2 million by the Chennai Super Kings at the 2012 IPL Players Auction. He was bought by the Gujarat Lions in the 2016 IPL Players Auction for ₹9.5 crores after the Chennai Super Kings were banned from the IPL for two seasons. On 22 January 2017, Jadeja became the first Indian left-arm spinner to take 150 One Day International wickets, when he dismissed Sam Billings at Eden Gardens, Kolkata.[1] In March 2017, he became the top ranked bowler in the world leaving behind Ravichandran Ashwin who held that position for a long time.[2]</p>
      <p style="color: yellow">RCB vs CSK</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='ravindra_jadeja' and matchid='1'";
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
