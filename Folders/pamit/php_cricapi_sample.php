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

<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=APIKEY');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
?>
	<h4><?php echo($item->title); ?></h4>
<?php } ?>