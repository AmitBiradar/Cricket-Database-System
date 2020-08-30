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
              <h1 class="text-center">CHENNAI SUPER KINGS</h1>
              
              <p>&nbsp;</p>
             <center>
				  <a href="cricket5.html"><img src="chennai.png" width="200"></a>
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
            <a href="dhonip.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="dhoni.png" data-holder-rendered="true"></a>
            <h3>MS DHONI</h3>
            <?php
            $sql = "SELECT * FROM players where pname='ms_dhoni'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="rainap.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="suresh.png" data-holder-rendered="true"></a>
            <h3>SURESH RAINA</h3>
            <?php
            $sql = "SELECT * FROM players where pname='suresh_raina'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
            
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <a href="jadejap.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="jadeja.png" data-holder-rendered="true"></a>
            <h3>RAVINDRA JADEJA</h3>
          <?php
            $sql = "SELECT * FROM players where pname='ravindra_jadeja'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="raydu.png" data-holder-rendered="true">
            <h3>AMBATI RAYDU</h3>
            <?php
            $sql = "SELECT * FROM players where pname='ambati_raydu'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="tahir.png" data-holder-rendered="true">
            <h3>IMRAN TAHIR</h3>
          <?php
            $sql = "SELECT * FROM players where pname='imran_tahir'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="harbhajan.png" data-holder-rendered="true">
            <h3>HARBHAJAN SINGH</h3>
           <?php
            $sql = "SELECT * FROM players where pname='harbhajan_singh'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="mohit.png" data-holder-rendered="true">
            <h3>MOHIT SHARMA</h3>
            <?php
            $sql = "SELECT * FROM players where pname='mohit_sharma'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="thakur.png" data-holder-rendered="true">
            <h3>SHRADHUL THAKUR</h3>
            <?php
            $sql = "SELECT * FROM players where pname='shradhul_thakur'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="santner.png" data-holder-rendered="true">
            <h3>MITCHELL SANTNER</h3>
             <?php
            $sql = "SELECT * FROM players where pname='mitchell_santner'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="vijay.png" data-holder-rendered="true">
            <h3>MURALI VIJAY</h3>
             <?php
            $sql = "SELECT * FROM players where pname='murali_vijay'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="watson.png" data-holder-rendered="true">
            <h3>SHANE WATSON</h3>
             <?php
            $sql = "SELECT * FROM players where pname='shane_watson'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
          </div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="bravo.png" data-holder-rendered="true">
            <h3>DWAYNE BRAVO</h3>
             <p><?php
            $sql = "SELECT * FROM players where pname='dwayne_bravo'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>RUNS : ".$row['prun'] ."</p>";
                echo "<p>WICKETS : ".$row['pwickets'] ."</p>" ;
                echo "<p>TEAMS : ". $row['team']."</p>";
                echo "</div>";
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?></p>
          
        </div>
        <div class="row">
          <div class="col-sm-12 mt-4 mb-2 text-center">
           
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