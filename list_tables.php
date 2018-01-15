 <div class=padding>

   <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-database').style.display='none';">
   
        <img style="float:right;width:20px;margin:5px;"  src="icons/insert.png" title="add a new list group"  onclick="document.getElementById('draggable-database').style.display='none';">
   
   
   
  <p>
  Tables
  <hr>
  </p>
<?php
    $db = new SQLite3('databases/system.db');
    $tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");

	
	
    while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
        echo '<div id=file><img src="icons/list.png" class="folder">' . $table['name'] . '</div>';
    }
?>
</div>