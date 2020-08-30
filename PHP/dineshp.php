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
      <h3 style="color: black">DINESH KARTHIK</h3>
    <img src="dinesh.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Dinesh Karthik (born 1 June 1985) is an Indian wicket-keeper-batsman who made his debut for the Indian cricket team in 2004. He is regarded as one of the greatest Wicket Keeper Bastman India has ever produced, and is currrent captain of Indian Premier League team, Kolkata Knight Riders from the 2018 season. He is well known for his Power Hitting and Pressure Absorbing Ability.

He made his maiden Test century against Bangladesh and then was India's leading scorer in the Test tour of England,[1] helping India win their first series in England in 21 years. After suffering a drop in form in September 2007 he was dropped from the Test team, and since then has only made sporadic international appearances, although he continues to score heavily in domestic cricket.</p>
      <p style="color: purple">KKR vs MI</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='dinesh_karthik' and matchid='2'";
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
  <div class="copyright">KOLKATA KNIGHT RIDERS</div>
</div>
<!-- Main Container Ends -->
</body>
</html>
