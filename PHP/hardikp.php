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
      <h3 style="color: black">HARDIK PANDYA</h3>
    <img src="hardik.png" alt="" class="profile"> </div>
    <div class="column">
      <p style="color: black">Hardik Himanshu Pandya (born 11 October 1993) is an Indian international cricketer who plays for Baroda in domestic cricket and Mumbai Indians in the Indian Premier League (IPL). He is an all-rounder who bats right-handed and bowls right-arm fast-medium. He is the younger brother of Krunal Pandya. Pandya has played 11 tests, 45 ODIs, and 38 T20Is.
      Hardik Pandya was born on 11 October 1993 in Surat, Gujarat. His father, Himanshu Pandya, ran a small car finance business in Surat which he shut down and shifted to Vadodara when Hardik was five; he did so in order to facilitate his sons with better cricket training facilities. He enrolled his two sons (Hardik and Krunal) into Kiran More's cricket academy in Vadodara.[2] Financially weak, the Pandya family lived in a rented apartment in Gorwa, with the brothers using a second-hand car to travel to the cricket ground.[3] Hardik studied at the MK High School until ninth grade before dropping out to focus on cricket.[4]

</p>
      <p style="color: blue">MI vs KKR</p>  
		  <?php
            $sql = "SELECT * FROM batting where batsman='hardik_pandya' and matchid='2'";
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
