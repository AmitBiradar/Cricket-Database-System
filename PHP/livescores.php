<!-- 
      ___           ___           ___           ___           ___           ___                         ___     
     /__/\         /__/\         /  /\         /  /\         /  /\         /  /\                       /  /\    
    _\_ \:\        \  \:\       /  /:/_       /  /::\       /  /::\       /  /:/_                     /  /::|   
   /__/\ \:\        \__\:\     /  /:/ /\     /  /:/\:\     /  /:/\:\     /  /:/ /\    ___     ___    /  /:/:|   
  _\_ \:\ \:\   ___ /  /::\   /  /:/ /:/_   /  /:/~/:/    /  /:/~/:/    /  /:/ /:/_  /__/\   /  /\  /  /:/|:|__ 
 /__/\ \:\ \:\ /__/\  /:/\:\ /__/:/ /:/ /\ /__/:/ /:/___ /__/:/ /:/___ /__/:/ /:/ /\ \  \:\ /  /:/ /__/:/ |:| /\
 \  \:\ \:\/:/ \  \:\/:/__\/ \  \:\/:/ /:/ \  \:\/:::::/ \  \:\/:::::/ \  \:\/:/ /:/  \  \:\  /:/  \__\/  |:|/:/
  \  \:\ \::/   \  \::/       \  \::/ /:/   \  \::/~~~~   \  \::/~~~~   \  \::/ /:/    \  \:\/:/       |  |:/:/ 
   \  \:\/:/     \  \:\        \  \:\/:/     \  \:\        \  \:\        \  \:\/:/      \  \::/        |  |::/  
    \  \::/       \  \:\        \  \::/       \  \:\        \  \:\        \  \::/        \__\/         |  |:/   
     \__\/         \__\/         \__\/         \__\/         \__\/         \__\/                       |__|/    


    CricAPI is a product of Wherrelz Corporation 

    By using this product you agree to the terms and conditions as defined & updated on the website.

 -->
<!DOCTYPE html>
<html>
<head>
  <title>live scores</title>
  <style type="text/css">
    .amit{
         width: 500px;
  padding: 40px;
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: transparent;
  text-align: center;
  border-radius: 50px;
  border :2px solid black;
    }
    .amit:hover
    {
      background-color: #2C9AB7;
      background-size: cover;
    }
    body{
     background-image: url("std22.jpg");
     
      
     background-size: cover;
    }
    .yo{
      width: 100px;
  border-radius:; 
  height: 100px;
  
    }
  </style>
</head>
<body >
   <center>
   <h1 style="color: black">LIVE SCORES</h1>
   </center>
   <a href="cricket5.html">
    <img src="ipl.jpg" class="yo">
  </a>
  
</body>
</html>
<?php
   echo "<div class='amit'>";
	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=7EpBdxxLfjbP5Hm65RfHqwSQalL2');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
?>
	<h4><?php echo($item->title); ?></h4>
   
<?php }
echo "</div>"; ?>
