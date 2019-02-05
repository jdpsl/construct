<?php

include('include/testlogin.php');


if ( isset($_GET['file'])  ){

 $file = file_get_contents($_GET['file']);
 echo $file;
  
}
?>
