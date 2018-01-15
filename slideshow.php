<?php

if ( !isset($_GET['slideshow'])){die();}
if ( !isset($_GET['id'])){die();}

?>


<style>

  #slideshow<?php echo urlencode($_GET['id']); ?> {
		 
		    position: relative;
		    width: 100%px;
		    height: 100%px;
	
		}

		#slideshow<?php echo urlencode($_GET['id']); ?> > div {
		    position: absolute;

		}
  
  
  #slideshow<?php echo urlencode($_GET['id']); ?> img{
	  width:100%;
	  height:100%;
	  
  }

</style>

<div class=slideshow id="slideshow<?php echo urlencode($_GET['id']); ?>">
<?php


$db = new SQLite3('databases/system.db');

$results = $db->query('SELECT file_path from slideshow where slideshow_id = "'.addslashes($_GET['slideshow']).'";');



while ($row = $results->fetchArray()) {
   
   
   
	echo "<div>";
	echo "<img src='".$row['file_path']."'>";
	echo "</div>";
}



?>





</div>