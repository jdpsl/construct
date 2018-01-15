<div class=padding>
<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-files').style.display='none';">
<img src="icons/insert.png" style="width:20px;float:right;margin:5px;" title="new container" alt="new container">
<p>
slideshow(s)
<hr>
</p>

<div class=showcontrol>
Controller: <input type=text id=file_control disabled>
<hr>
</div>
<img src="icons/layout.png" class=tool-icon title="Layout(s)" onclick="">
<img src="icons/insert.png" class=tool-icon title="Files(s)" onclick="">
<img src="icons/widget.png" class=tool-icon title="Widgets(s)" onclick="">
<img src="icons/picture.png" class=tool-icon title="Image(s)">
<img src="icons/sound.png" class=tool-icon title="audio(s)">
<img src="icons/film.png" class=tool-icon title="video(s)">
<img src="icons/canvas.png" class=tool-icon title="canvas(s)">
<img src="icons/camera.png" class=tool-icon title="camera(s)">


<img src="icons/paragraph.png" class=tool-icon title="paragraph(s)">
<img src="icons/code.png" class=tool-icon title="iframe(s)">

<img src="icons/slideshow.png" class=tool-icon title="slideshow(s)" onclick="ajax('draggable-files','edit_slideshow.php');">
<img src="icons/map.png" class=tool-icon title="map(s)">
<img src="icons/form.png" class=tool-icon title="form(s)">
<img src="icons/console.png" class=tool-icon title="script(s)">
<hr>


<?php



// Open / Create Database
$db = new SQLite3('databases/system.db');


/*
// Create Table
$db->exec('CREATE TABLE slideshow (id INTEGER PRIMARY KEY,
slideshow_id INTEGER,
title TEXT,
file_path TEXT




)');
*/

// insert into table
/*
$db->query('insert into slideshow values(NULL,1,"test","container/images/patterns/1.jpg");');
$db->query('insert into slideshow values(NULL,1,"test","container/images/patterns/2.jpg");');

$db->query('insert into slideshow values(NULL,2,"test","container/images/patterns/3.jpg");');
*/



// query and retreive
$results = $db->query('SELECT slideshow_id, title from slideshow group by slideshow_id');



while ($row = $results->fetchArray()) {
   ?>
   
   

   
	<div id=file> <img src='icons/slideshow.png' class=folder>
	<?php echo $row['title']; ?> 
	
	<img src="icons/choose.png" class="fileicon" id="insertfile" onclick="add_slideshow(<?php echo $row['slideshow_id']; ?>);">
	
	</div>
	
	<?php
}


?>







</div>





