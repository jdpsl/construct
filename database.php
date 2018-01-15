 <div class=padding>

   <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-database').style.display='none';">
   
        <img style="float:right;width:20px;margin:5px;"  src="icons/insert.png" title="add a new list group"  onclick="document.getElementById('draggable-database').style.display='none';">
   
   
   
  <p>
  Lists
  <hr>
  </p>
  <?php
  
   $directory = "databases/*";
 
//get all image files with a .jpg extension.
$images = glob("" . $directory . "*.db");
 
$imgs = '';
// create array
foreach($images as $image){ 
?>
<div id=file onclick="ajax('draggable-database','list_tables.php?list=<?php echo basename($image); ?>');"> <img src='icons/list.png' class=folder>

<?php echo basename($image); ?>
</div>

<?php
 }
  
  
  
  ?>

  
  </div>