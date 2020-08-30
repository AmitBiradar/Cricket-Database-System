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
      <h3 style="color: black">ROHIT_SHARMA</h3>
    <img src="rohit.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Rohit Gurunath Sharma (born 30 April 1987) is an Indian international cricketer who plays for Mumbai in domestic cricket and captains Mumbai Indians in the Indian Premier League as a right-handed batsman and an occasional right-arm off break bowler. He is the vice-captain of the Indian national team in limited-overs formats.

Outside cricket, Sharma is an active supporter of animal welfare campaigns. He is the official Rhino Ambassador for WWF-India and is a member of People for the Ethical Treatment of Animals (PETA). He has worked with PETA in its campaign to raise awareness of the plight of homeless cats and dogs in India.</p>
      <p style="color: blue">MI vs KKR</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='rohith_sharma' and matchid='2'";
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
  <div class="copyright">MUMBAI INDIANS</div>
</div>
<!-- Main Container Ends -->
</body>
</html>
