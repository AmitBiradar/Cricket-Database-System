<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>

/*<H1>ORANGE CAP</H1>

<table>
  <tr>
    <th>POSITION</th>
    <th>TEAM</th>
    <th>PLAYER</th>
     <th>RUNS</th>
      <th>MATCHES</th>
      
  </tr>
<tr>
  <td>1</td>
    <td>ROYAL CHALLENGERS BANGALORE</td>
    <td>VIRAT KOHLI</td>
     <td>520</td>
      <td>6</td>
       
  </tr
  <tr>
  <td>2</td>
    <td>ROYAL CHALLENGERS BANGALORE</td>
    <td>A B DE VILLIERS</td>
     <td>490</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>3</td>
    <td>MUMBAI INDIANS</td>
    <td>ROHITH SHARMA</td>
     <td>485</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>4</td>
    <td>KOLKATA KNIGHT RIDERS</td>
    <td>RUSSEL</td>
     <td>450</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>5</td>
    <td>CHENNAI SUPER KINGS</td>
    <td>MS DHONI</td>
     <td>440</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>6</td>
    <td>CHENNAI SUPER KINGS</td>
    <td>SURESH RAINA</td>
     <td>425</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>7</td>
    <td>MUMBAI INDIANS</td>
    <td>HARDIK PANDYA</td>
     <td>400</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>8</td>
    <td>KOLKTA KNIGHT RIDERS</td>
    <td>VIRAT KOHLI</td>
     <td>400</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>9</td>
    <td>CHENNAI SUPER KINGS</td>
    <td>AMBATI RAYUDU</td>
     <td>390</td>
      <td>6</td>
       
  </tr>
  <tr>
  <td>10</td>
    <td>ROYAL CHALLENGERS BANGALORE</td>
    <td>MARCUS STOINIS</td>
     <td>350</td>
      <td>5</td>
       
  </tr>
</table>*/
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","ipldb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
 <?php
            $sql = "SELECT pname,prun from players t1 
            inner join(
            select max(prun) Maxrun from players)t2
            on t1.prun=t2.Maxrun";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
                echo "<div class=''>";
                echo "<p>BATSMAN:".$row['pname'] ."</p>";
                echo "<p>".$row['prun'] ."</p>" ;
              
        }

        // Free result set
        mysqli_free_result($result);
      }
    } ?>
</body>
</html>
