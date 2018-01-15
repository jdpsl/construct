  <p>Advanced Properties
  <hr></p>
<?php

$file=file_get_contents("css.txt");

$file=explode("\n", $file);

echo "<table>";

foreach ( $file as $line ){
	
	$tmp=explode("\t",$line);
	
	echo "<tr>";
	
	
		echo "<td title='".$tmp[1]."' alt='".$tmp[1]."'>" . $tmp[0] . "</td><td><input type=text></td>";
	
	
	echo "</tr>";
	
	
}




echo "</table>";

?>