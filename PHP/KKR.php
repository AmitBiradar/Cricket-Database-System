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
              <h1 class="text-center">Kolkata Knight Riders</h1>
             <center>
				 <img src="kolkata.png">
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
            <h2>PLAYERS</h2>
          </div>
        </div>
      </div>
      <div class="container ">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="dineshp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="dinesh.png" data-holder-rendered="true"></a>
            <h3>DINESH KARTHIK</h3>
             <?php
            $sql = "SELECT * FROM players where pname='dinesh_karthik'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="russel.png" data-holder-rendered="true">
            <h3>ANDRE RUSSEL</h3>
             <?php
            $sql = "SELECT * FROM players where pname='andre_russel'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="narine.png" data-holder-rendered="true">
            <h3>SUNIL NARINE</h3>
             <?php
            $sql = "SELECT * FROM players where pname='sunil_narine'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="carlos.png" data-holder-rendered="true">
            <h3>CARLOS BRATHWAITE</h3>
             <?php
            $sql = "SELECT * FROM players where pname='carlos_brathwaite'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="kuldeep.png" data-holder-rendered="true">
            <h3>KULDEEP YADAV</h3>
             <?php
            $sql = "SELECT * FROM players where pname='kuldeep_yadav'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="krishna.png" data-holder-rendered="true">
            <h3>PRASIDH KRISHNA</h3>
             <?php
            $sql = "SELECT * FROM players where pname='prasidh_krishna'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="gill.png" data-holder-rendered="true">
            <h3>SHUBMAN GILL</h3>
             <?php
            $sql = "SELECT * FROM players where pname='shubman_gill'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="nitish.png" data-holder-rendered="true">
            <h3>NITISH RANA</h3>
            
			   <?php
            $sql = "SELECT * FROM players where pname='nitish_rana'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="chris.png" data-holder-rendered="true">
            <h3>CHRIS LYNN</h3>
             <?php
            $sql = "SELECT * FROM players where pname='chris_lynn'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="uthappa.png" data-holder-rendered="true">
            <h3>ROBIN UTHAPPA</h3>
             <?php
            $sql = "SELECT * FROM players where pname='robin_uthappa'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="johnson.png" data-holder-rendered="true">
            <h3>MITCHELL JOHNSON</h3>
             <?php
            $sql = "SELECT * FROM players where pname='mitchell_johnson'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="tom.png" data-holder-rendered="true">
            <h3>TOM CURRAN</h3>
             <?php
            $sql = "SELECT * FROM players where pname='tom_curran'";
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
        
          </div>
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