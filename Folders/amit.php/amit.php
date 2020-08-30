<?php
    
    $servername ="localhost";
    $username ="root";
    $password ="";
    $db="youtube";
    $conn = mysqli_connect($servername,$username,$password);

    if($conn)
    {
        echo "connected";
    }
    else
    {
    	echo "not connected";
    }	
?>