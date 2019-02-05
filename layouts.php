<?php

include('include/testlogin.php');

$dir = "user/".$username."/layouts/";



// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    if ( $file != "." and $file != ".."){
    ?>
      <div id=file>
       <img src="icons/document.svg" class="folder">
       
      <?php echo $file; ?>
      
      
      <img class="fileicon" id="trash" src='icons/trash.png' >
      <img class="fileicon" id="insertfile"  src='icons/open-in-browser.png' onclick="window.open('standalonecomplex.php?layout=<?php echo $file; ?>');" title="Open in new window">
      <img class="fileicon" id="insertfile" src='icons/edit.png' title="Edit Layout" onclick="window.location.href='user.php?layout=<?php echo $file; ?>'">
      </div>
    
    <?php
    
    }
    
    }
    closedir($dh);
  }
}
?>
