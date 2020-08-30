<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Agency Page Template</title>
    <!-- Bootstrap -->
    <link href="bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
</nav>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","ipldb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">ROYAL CHALLENGERS BANGALORE</h1>
              <p class="text-center">.</p>
              <p>&nbsp;</p>
				<center>
				<img src="rcb.png" width="200" height="250" align="middle">
				</center>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mt-2 text-center">
            <h2><strong>PLAYERS</strong></h2>
          </div>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="viratp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="virat.png" data-holder-rendered="true"></a>
            <h3>VIRAT KOHLI</h3>
            <?php
            $sql = "SELECT * FROM players where pname='virat_kohli'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS:".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="abdp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="abd.png" data-holder-rendered="true"></a>
            <h3>A B DE VILLIERS</h3>
            <?php
            $sql = "SELECT * FROM players where pname='abde_villiers'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="chahalp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="chahal.png" data-holder-rendered="true"></a>
            <h3>YUZVENDER CHAHAL</h3>
            <?php
            $sql = "SELECT * FROM players where pname='yuzvendra_chahal'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }

    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="umi.png" data-holder-rendered="true">
            <h3>UMESH YADAV</h3>
            <?php
            $sql = "SELECT * FROM players where pname='umesh_yadav'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="PAWAN.jpg" data-holder-rendered="true">
            <h3>PAWAN NEGI</h3>
            <?php
            $sql = "SELECT * FROM players where pname='pawan_negi'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="ali.png" data-holder-rendered="true">
            <h3>MOEEN ALI</h3>
            <?php
            $sql = "SELECT * FROM players where pname='moeen_ali'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="patel.png" data-holder-rendered="true">
            <h3>PARTHIV PATEL</h3>
            <?php
            $sql = "SELECT * FROM players where pname='parthiv_ptel'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="tim.png" data-holder-rendered="true">
            <h3>TIM SOUTHEE</h3>
            <?php
            $sql = "SELECT * FROM players where pname='tim_southee'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="siraj.png" data-holder-rendered="true">
            <h3>MOHAMMAD SIRAJ</h3>
            <?php
            $sql = "SELECT * FROM players where pname='mohammad_siraj'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="sundar.png" data-holder-rendered="true">
            <h3>WASHINGTON SUNDAR</h3>
            <?php
            $sql = "SELECT * FROM players where pname='washington_sundar'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="marcus.png" data-holder-rendered="true">
            <h3>MARCUS STOINIS</h3>
            <?php
            $sql = "SELECT * FROM players where pname='marcus_stoinis'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="saini.png" data-holder-rendered="true">
            <h3>NAVDEEP SAINI</h3>
            <?php
            $sql = "SELECT * FROM players where pname='navdeep_saini'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS:".$row['prun'] ."</p>";
                echo "<p>WICKETS: ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAM:". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
      
    } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 mt-4 mb-2 text-center">
           
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="../../Users/Amit Biradar/Documents/Unnamed Site 2/js/jquery-3.2.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="../../Users/Amit Biradar/Documents/Unnamed Site 2/js/popper.min.js"></script> 
    <script src="../../Users/Amit Biradar/Documents/Unnamed Site 2/js/bootstrap-4.0.0.js"></script>
  </body>
</html>