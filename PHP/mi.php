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
              <h1 class="text-center" style="color: blue">MUMBAI INDIANS</h1>
             <center>
				 <img src="mumbai1.jpg" width="350">
				</center>
              <p>&nbsp;</p>
              
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
            <a href="rohithp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="rohit.png" data-holder-rendered="true"></a>
            <h3>ROHIT SHARMA(C)</h3>
             <?php
            $sql = "SELECT * FROM players where pname='rohith_sharma'";
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
            <a href="hardikp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="hardik.png" data-holder-rendered="true"></a>
            <h3>HARDIK PANDYA</h3>
             <?php
            $sql = "SELECT * FROM players where pname='hardik_pandya'";
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
            <a href="jaspritp.php"><img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="bumrah.png" data-holder-rendered="true"></a>
            <h3>JASPRIT BUMRAH</h3>
             <?php
            $sql = "SELECT * FROM players where pname='jasprit_bumrah'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="yuvraj.png" data-holder-rendered="true">
            <h3>YUVRAJ SINGH</h3>
             <?php
            $sql = "SELECT * FROM players where pname='yuvraj_singh'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="pollard.png" data-holder-rendered="true">
            <h3>KIERON POLLARD</h3>
            <?php
            $sql = "SELECT * FROM players where pname='kieron_pollard'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="malinga.png" data-holder-rendered="true">
            <h3>LASITH MALINGA</h3>
              <?php
            $sql = "SELECT * FROM players where pname='lasith_malinga'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="kock.png" data-holder-rendered="true">
            <h3>QUINTON DE KOCK</h3>
             <?php
            $sql = "SELECT * FROM players where pname='quinton_de_kock'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="krunal.png" data-holder-rendered="true">
            <h3>KRUNAL PANDYA</h3>
<?php
            $sql = "SELECT * FROM players where pname='krunal_pandya'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="yadav.png" data-holder-rendered="true">
            <h3>SURYAKUMAR YADAV</h3>
            <?php
            $sql = "SELECT * FROM players where pname='surya_kumar_yadav'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="mayank.png" data-holder-rendered="true">
            <h3>MAYANK MARKANDE</h3>
            <?php
            $sql = "SELECT * FROM players where pname='mayank_markande'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="mitchell.png" data-holder-rendered="true">
            <h3>MITCHELL McCLENAGHAN</h3>
             <?php
            $sql = "SELECT * FROM players where pname='mitchell_mcclenaghan'";
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
            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="ishan.png" data-holder-rendered="true">
            <h3>ISHAN KISHAN</h3>
             <?php
            $sql = "SELECT * FROM players where pname='ishan_kishan'";
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