<?php

include('include/testlogin.php');


if ( isset($_GET["layout"])){
$layout = file_get_contents("user/".$username."/layouts/" . basename($_GET['layout']) ) or die("Could not open layout");

$layout = json_decode($layout, true);
$layoutcount=count($layout);
}








?><html lang="en">
<head>
  <meta charset="utf-8">
  <title>con &bull; struct v1</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  



  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
 <!--  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> -->
  
 <script src="js/functions.js"></script>


<script>tinymce.init({
	
	  mode : "specific_textareas",
        editor_selector : "mceEditor",

plugins: "link,code,preview,autolink,textcolor,hr,image,media",
extended_valid_elements : "form[name|id|action|method|enctype|accept-charset|onsubmit|onreset|target],input[id|name|type|value|size|maxlength|checked|accept|src|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|onkeyup|onkeydown|required|style],textarea[id|name|rows|cols|maxlength|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|onkeyup|onkeydown|required|style],option[name|id|value|selected|style],select[id|name|type|value|size|maxlength|checked|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|multiple|style]",
toolbar: "sizeselect | bold italic underline strikethrough | fontselect |  fontsizeselect | bullist numlist | link unlink | alignleft aligncenter alignright alignjustify | forecolor backcolor | hr | outdent indent | image media",
fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

 menubar: false,






    


});






</script>


<!-- code editor -->

<link rel="stylesheet" href="code/lib/codemirror.css">

<script src="code/lib/codemirror.js"></script>


<script src="code/addon/edit/matchbrackets.js"></script>
<script src="code/mode/htmlmixed/htmlmixed.js"></script>
<script src="code/mode/xml/xml.js"></script>
<script src="code/mode/javascript/javascript.js"></script>
<script src="code/mode/css/css.js"></script>
<script src="code/mode/clike/clike.js"></script>
<script src="code/mode/php/php.js"></script>




<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 
 
 <link rel="stylesheet" href="css/style.css">
 
<script>


<?php
  
  if ( isset($_GET["layout"])){
  ?>  var divcounter=  <?php
  
  echo ($layoutcount + 1) . ";";
  
  }else{
  
   ?>   var divcounter=1; <?php
  }
  
  
  ?>

</script>
  

  
</head>
<body <?php if ( isset($_GET["layout"])){ echo "style='".  $layout['body'] . "'"; } ?> >




<canvas id="myCanvas" width=100% style="padding:0px;margin:0px;display:none;position:fixed;top:0px;left:0px;z-index:-1;"></canvas>

<script>



var c = document.getElementById("myCanvas");

var ctx = c.getContext("2d");


function render_grid(){
 c.width = $(document).width();
            c.height = $(document).height();

ctx.clearRect(0, 0, c.width, c.height);

var curX = 0;
var tmpX=0;
for (i = 0; i < 1000; i++) { 

tmpX = curX * grid_size;
ctx.beginPath();

ctx.moveTo(tmpX, 0);
ctx.lineTo(tmpX, c.height);
ctx.strokeStyle = grid_color;
ctx.lineWidth = .1;
ctx.stroke();


curX++;


}

$( window ).resize(function() {
 render_grid();
});


var curY = 0;
var tmpY=0;
for (i = 0; i < 800; i++) { 

tmpY = curY * grid_size;
ctx.beginPath();

ctx.moveTo(0, tmpY);
ctx.lineTo(c.width, tmpY);
ctx.lineWidth = .1;
ctx.stroke();


curY++;


}


}




function toggle_grid(){
	
	if ( document.getElementById('myCanvas').style.display == 'block' ){
		document.getElementById('myCanvas').style.display='none';
		enable_grid=false;
	}else{
		
		enable_grid=true;
		document.getElementById('myCanvas').style.display='block';
		render_grid();
	}
	
	
	
}

toggle_grid();

var pageElements;

function doList(){
	
	
	 pageElements = [];
$('li').each(function(i, elem) {
    pageElements.push($(elem).text());
});
	
}


function startSlideshow(currSlide){
	
	
		  		$(function() {

			$('#slideshow' + currSlide + ' > div:gt(0)').hide();

			setInterval(function() {
			  $('#slideshow' + currSlide + ' > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slideshow' + currSlide);
			},  3000);

		});
	
	
}


  function add_slideshow(theSlideshow){
	  
	 
	  
	 var curDiv =  additem('slideshow');
	  		
		ajax('draggable' + curDiv, 'slideshow.php?slideshow='+theSlideshow+'&id=' + slideshow, 'slideshow');
		
	setTimeout( startSlideshow(slideshow), 100);
	  
		 
	  
	  slideshow++;
	  
	  
  }
  

</script>




 <div id=topbar class=topbar style="display:block">
 
  <img src="icons/logo.png" style="width:200px;float:left;margin:5px;margin-right:20px;" >

 
   <img src="icons/hide.png" class=topicon onclick="toggleBar()" title="hide control bar. you can enable it again by pressing the menu button in the bottom right hand corner">
   
   	<img src="icons/info.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-info'))" title="object properties">

		 
   
   
   	<img src="icons/settings.png" class=topicon onclick="toggleVisability(document.getElementById('propertiess'))" title="object properties">
	<img src="icons/documentproperties.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-document-properties'))" title="document properties">

   <img src="icons/grid.png" class=topicon title="Toggle grid" alt="Toggle grid" onclick="toggle_grid();" >
 
  <img src="icons/console.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-javascript-console'))" title="object properties">
  <img src="icons/database.png" class=topicon onclick="ajax('draggable-database','database.php');toggleVisability(document.getElementById('draggable-database'))" title="Databases">
<!--     <img src="icons/jod.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-jod'))" title="Jeff's Object Database (JOD) "> -->

	<img src="icons/layers.png" class=topicon title="Toggle Layers" alt="Toggle Layers" onclick="toggleVisability(document.getElementById('draggable-layers'))">
	


 


	
<img src="icons/tools.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-tools'))" title="Tools" alt="Tools">
	 
	 <img src="icons/form.png" class=topicon onclick="" title="Tools" alt="Tools">
	 
 

 
   <img src="icons/folder.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-files'))" title="my files">
   <img src="icons/layout.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-layout'))" title="save layout" alt="save layout">
 

      

 <img src="icons/insert.png" class=topicon onclick="additem('div');">
      

	  
	  
	  
	  
 
 </div>
 
 <img src="icons/menu.png" id=amenu style="display:none;position:fixed;bottom:20px;right:20px;width:40px;z-index:999999999999;" onclick="toggleBar()">
 
 


<div id="propertiess" class="properties" style="display:block;">

<div class=padding>
 <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('propertiess').style.display='none';">
 
  <p>Properties
  <hr></p>
  
  <img src="icons/trash.png" style='width:20px;float:left;margin:5px;' title="nuke item" alt="nuke item" onclick="delete_item($('#itemno').val());">


  
<img src="icons/code.png" style='width:20px;float:right;margin:5px;' title="Edit current code" onclick="edit_code_from_widget(  $('#itemno').val()  );">
<img src="icons/edit.png" style='width:20px;float:right;margin:5px;' title="Edit as paragraph" onclick="edit_doc_from_widget($('#itemno').val());">

<img src="icons/insert.png" style='width:20px;float:right;margin:5px;' title="Insert File" onclick="giveControl($('#itemno').val() );">





  <img src="icons/filter.png" style='width:20px;float:right;margin:5px;' title="Filters" onclick="toggleVisability(document.getElementById('tools-filter'))">
  <div style='clear:both'></div>
  <hr>
  <table border=0 width=100%>
  <tr><td>item:</td><td><input id=itemno type=text disabled></td></tr>
      <tr><td>width:</td><td><input id=w  type=text></td></tr>
	<tr><td>height:</td><td><input id=h type=text></td></tr>
	
  <tr><td>x:</td><td><input id=x type=text></td></tr>
   <tr><td>y:</td><td><input id=y type=text></td></tr>

	<tr><td>border:</td><td><input id=b  type=text></td></tr>


	 <tr><td>background: <img src="icons/filter.png" title="Advanced Background Options" style='width:15px;vertical-align:middle;display:inline-block;'></td><td><input id=bg type=text></td></tr>
	 <tr><td>text color:</td><td><input id=tc type=text></td></tr>
	 <tr><td>movable:</td><td><select id=lock onchange="$('#' + $('#itemno').val()).draggable($('#lock').val());"><option>enable</option><option>disable</option></select></td></tr>
	 <tr><td>position:</td><td><select id=ft><option>static</option><option>relative</option><option>absolute</option><option>fixed</option></select>
	 <tr><td>scroll:</td><td><select id=ft><option>yes</option><option>no</option></select>
	 </td></tr>
	 
  
</table>
  <hr>
  <div style="float:right;font-style:italic;font-size:12px;">
 <a onclick="toggleVisability(document.getElementById('advanced_properties'))"> Advanced </a>
 
 <div id=advanced_properties style='display:none;'>
 <?php include('advancedproperties.php'); ?>
 </div>
 
 
 
 
  </div>
  </div>
</div>


 <!-- -->
<div id="draggable-files" class="ui-widget-content" style="display:none;">
<div class=padding>
<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-files').style.display='none';">
<img src="icons/upload.png" style="width:20px;float:right;margin:5px;" title="upload" alt="upload">
<img src="icons/insert.png" style="width:20px;float:right;margin:5px;" title="new container" alt="new container">

<p>
File(s)
<hr>
</p>
<div class=showcontrol>
<img src="icons/code.png" style='width:20px;float:right;margin:5px;' title="Edit current code" onclick="edit_code_from_widget($('#file_control').val());">
<img src="icons/edit.png" style='width:20px;float:right;margin:5px;' title="Edit as paragraph" onclick="edit_doc_from_widget($('#file_control').val());">

Controller: <input type=text id=file_control disabled>
<hr>
</div>
<img src="icons/layout.png" class=tool-icon title="Layout(s)" onclick="ajax('draggable-files','layouts.php');">
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
<img src="icons/form.png" class=tool-icon title="form(s)"  onclick="ajax('draggable-files','edit_form.php');">
<img src="icons/console.png" class=tool-icon title="script(s)">
<hr>



<?php
$dir = "user/" . $username . "/widgets/";
$dh  = opendir($dir) or die("error");
while (false !== ($filename = readdir($dh))) {
	if ( trim($filename) != "." and trim($filename) != ".." ){
		?>
    <div id=file>
	
	<?php if ( !is_dir($dir . "/" . $filename)){ ?>
	<img src="icons/document.svg" class=folder>
	
		<?php echo $filename; ?>

		
		
		
		<img src="icons/trash.png" class=fileicon id=trash> 
		<img src="icons/edit.png" class=fileicon id=insertfile title="Edit Document"> 
		<img src="icons/code.png" class=fileicon id=insertfile title="Edit Code"> 
		<img src="icons/choose.png" class=fileicon id=insertfile onclick="ajax(document.getElementById('file_control').value, '<?php echo $dir .$filename; ?>');">      
		
		<?php } ?>
		
	</div>
	
	<?php
	}

}


?>

</div>
</div>

 <!-- -->
 
 
 
 
 
 
 
 <!--save layout -->
<div id="draggable-layout" class="ui-widget-content" style="display:none;">
<div class=padding>
<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-layout').style.display='none';">
<img src="icons/save.png" style="width:20px;float:right;margin:5px;" title="save layout" alt="save layout" onclick="if ( $('#layout_control').val().toString() != ''   ){savelayout($('#layout_control').val().toString());}else{alert('Please Enter a Name for the Layout');}">


<p>
Layouts(s)
<hr>
</p>
<div class=showcontrol>

Layout Name: <input type=text id=layout_control <?php

if ( isset($_GET['layout'])){


echo "value='".$_GET['layout']."'";

}


?>>
<hr>
</div>


<div id=layout_files>
<?php include ('layouts.php'); ?>
</div>

</div>
</div>

 <!--end save layout-->
 
 
 
<div id="draggable-jod" style="display:none;" class="ui-widget-content" >
<div class=padding>
<p>
JOD
<hr>

<input type=text>
<hr>Result


</p>

</div>
</div>



 <!-- -->
<div id=draggable-editor class="ui-widget-content">
<div class=padding>

<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-editor').style.display='none';">

<img style="float:right;width:20px;margin:5px;"  src="icons/save.png" title="save"  alt="save" onclick="save_widget()"	>
<p>
Editing: <input type=text  id=document-writter  value="static_file.html">

<hr>
</p>

    <textarea  class="mceEditor"  name=content></textarea>
</div>
</div>

 <!-- -->
<div id=draggable-code-editor class="ui-widget-content">
<div class=padding>
<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-code-editor').style.display='none';">
<img style="float:right;width:20px;margin:5px;"  src="icons/save.png" title="save"  alt="save" onclick="$('#' + $('#code-writter').val() ).html(editor.getValue());">
<p>
Editing: <input type=text id=code-writter value="myfile.php"> <img src="icons/choosefile.png" style="display:inline-block;margin:5px;vertical-align:middle;width:20px;" title="choose file">

<hr>
</p>


<button onclick='editor.replaceSelection ("<div id= >\n"+editor.getSelection()+"\n</div>");'>div</button>
<button onclick='editor.replaceSelection ("<img id= src= >");'>img</button>
<button onclick='editor.replaceSelection ("<p id= >\n"+editor.getSelection()+"\n</p>");'>p</button>
<button onclick='editor.replaceSelection ("<b>"+editor.getSelection()+"</b>");'>b</button>
<button onclick='editor.replaceSelection ("<hr>");'>hr</button>
<button onclick='editor.replaceSelection ("<form method=get action= id= >\n"+editor.getSelection()+"\n</form>");'>form</button>
<button onclick='editor.replaceSelection ("<input type=text name= id= >");'>input</button>
<button onclick='editor.replaceSelection ("<button id= >"+editor.getSelection()+"</button>");'>button</button>
<button onclick='editor.replaceSelection ("<textarea id= >"+editor.getSelection()+"</textarea>");'>textarea</button>
<button onclick='editor.replaceSelection ("<style id= >\n"+editor.getSelection()+"\n</style>");'>style</button>
<button onclick='editor.replaceSelection ("<script id= >\n"+editor.getSelection()+"\n</script>");'>script</button>
<button onclick='editor.replaceSelection ("<br>");'>br</button>

<button onclick='editor.replaceSelection ("<script src=\"js/three.js\"></script>");'>three.js</button>
<button onclick='editor.replaceSelection ("<script src=\"js/p5/p5.js\"></script>");'>p5.js</button>




  

<hr>
</div>
	<textarea id=myTextarea class=myTextarea><html></html></textarea>

	<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("myTextarea"), {
      lineNumbers: true,
          mode: "application/x-httpd-php",
      matchBrackets: true
    });
	
	
</script>


</div>




 <!-- -->
<div id=draggable-javascript-console class="ui-widget-content" style="display:block;">
<div class=padding>
<img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-javascript-console').style.display='none';">
<img style="float:right;width:20px;margin:5px;"  src="icons/help.png" title="help" onclick="showHelp();">

<p>
Javascript Console
<hr>
</p>
<button onclick="editorConsole.save();try{document.getElementById('return').innerHTML=eval(document.getElementById('console').value);}catch(err){   document.getElementById('return').innerHTML='Error: ' + err.message;        }  ">Execute</button>


</div>
	<textarea id=console class=myTextarea></textarea>

	<script>
    var editorConsole = CodeMirror.fromTextArea(document.getElementById("console"), {
      lineNumbers: true,
          mode: "text/javascript",
      matchBrackets: true
    });
	
	
</script>




<div id=return style="background:#eee;padding:20px;max-height:200px;overflow-y:auto;user-select:text !important;">

<i>The result will appear here</i>


</div>
</div>

 <!-- -->
<div id=draggable-layers class="ui-widget-content" style="display:none;">

<div class=padding>
 <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-layers').style.display='none';">
 
<p>layers
<hr>
</p>
<ul id=thelayers>


 <?php
if ( isset($_GET["layout"])){
foreach(array_keys($layout) as $key){

if ( $key != 'body' ){

?>
<li class="ui-sortable-handle"><?php echo $key; ?></li>


<?php
}



}

}
?>

</ul>


<hr>
<img src="icons/trash.png" style="width:20px;">

</div>
</div>

<script>

  $( "#thelayers" ).sortable({
        update: function( ) {
				reSortItems();
        }
    });
	
	
	
		reSortItems();
	$( '#thelayers li' ).mouseover(function() { $('#' + $(this).html()).addClass('alayeritem')           });
		$( '#thelayers li' ).mouseout(function() { $('#' + $(this).html()).removeClass('alayeritem')           });
	
	
	
	
	
	
	doList();

</script>


 <!-- -->
<div id=draggable-tools class="ui-widget-content" style="display:block">
<div class=padding>
 <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-tools').style.display='none';">
 
<p>Tools
<hr>
</p>
<div align=center>

<img src="icons/film.png" class=tool-icon title="insert video">
<img src="icons/sound.png" class=tool-icon title="insert audio">
<img src="icons/camera.png" class=tool-icon title="insert camera stream">
<img src="icons/canvas.png" class=tool-icon title="insert html5 canvas">
<img src="icons/picture.png" class=tool-icon title="insert image">
<img src="icons/paragraph.png" class=tool-icon title="insert paragraph">
<img src="icons/insert.png" class=tool-icon title="insert file" onclick="additem('div');">
<img src="icons/settings.png" class=tool-icon title="object settings">
<img src="icons/code.png" class=tool-icon title="insert iframe">
<img src="icons/slideshow.png" class=tool-icon title="insert slideshow - some jquery at https://css-tricks.com/examples/SimpleSlideshow/" onclick="add_slideshow();">
<img src="icons/map.png" class=tool-icon title="insert map">
<img src="icons/form.png" class=tool-icon title="insert form">
<hr>

<hr>

<p>Current Tool<hr></p>

</div>
</div>
</div>
 
 
 
  <!-- -->
 <div id=draggable-document-properties class="ui-widget-content" style="display:none">
 <div class=padding>
 <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-document-properties').style.display='none';">
 <p>
 
 Document Properties
 <hr>
 </p>
 
 background: 
 <select id=body-background onchange="$('body').css('background', 'url(' +  $('#body-background').val() + ')');">
<option>none</option>
 <?php
 
 $directory = "container/images/*/";
 
//get all image files with a .jpg extension.
$images = glob("" . $directory . "*.jpg");
 
$imgs = '';
// create array
foreach($images as $image){ $imgs[] = "$image"; }
 
//shuffle array
sort($imgs);
 
//select first 20 images in randomized array
//$imgs = array_slice($imgs, 0, 20);
 
//display images
foreach ($imgs as $img) {
    echo "<option value='container/images/patterns/".rawurlencode(basename($img))."'>" . basename($img) . '</option>';
}
 ?>
 </select>
 OR
 
 <input type=color id=body-bg-color onchange="$('body').css('background',$('#body-bg-color').val());">
 
 
 <hr>

Background Width:

 <button onclick="$('body').css('background-size', '25px')"    >25px</button>
 <button onclick="$('body').css('background-size', '50px')"    >50px</button>
  <button onclick="$('body').css('background-size', '75px')"    >75px</button>
 <button onclick="$('body').css('background-size', '100px')"    >100px</button>
  <button onclick="$('body').css('background-size', '25%')"    >25%</button>
 <button onclick="$('body').css('background-size', '50%')"    >50%</button>
  <button onclick="$('body').css('background-size', '75%')"    >75%</button>
 <button onclick="$('body').css('background-size', '100%')"    >100%</button>
 
 
 <hr>
 body type <button onclick="$('body').css('position','fixed');"   >Fixed</button> <button  onclick="$('body').css('position','relative');"   >Scrollable</button>
 
 
 
 </div>
 </div>
 
 
 
 <!-- -->
  <div id=draggable-database class="ui-widget-content" style="display:none"></div>
 
 
   <div id=draggable-examples class="ui-widget-content" style="display:block">
   <script>
   	$(function(){
    $("#draggable-examples textarea").each(function(){
        //this.value = this.value.replace("AFFURL",producturl);
		
		start_editor(this);
    });
});
   </script>
   <div class=padding>
    <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-examples').style.display='none';">
    
   <p>Examples
   <hr>
   
   </p>
   
   
   <?php include('examples.php'); ?>
   
   
  
   
 </div>  
   </div>
 
 
 
   <div id=draggable-info class="ui-widget-content" style="display:none">
   <div class=padding>
       <img style="float:right;width:20px;margin:5px;"  src="icons/close.png" title="close"  alt="close" onclick="document.getElementById('draggable-info').style.display='none';">
   <p>
   Info
   <hr>
   </p>
  
   	<img src='icons/logo.png' style='width:calc(100% - 40px);vertical-align:middle;display:inline-block;margin:20px;'> <br>
   <img src='icons/me.png' style='width:50%;vertical-align:middle;display:inline-block;margin:20px;'>
    <div style='text-align:center;display:inline-block'>
	
	

   Written / Coded by Jeff Price<hr>staxjp@gmail.com
   </div>
   
   <hr>
   What is this?
   <br>
   A cloud based web editor / desktop
   
   
   </div>
   </div>
 
 
 
 
 
 
 
 
    <div id=tools-filter class="ui-widget-content" style="display:none;position:fixed;top:50px;right:280px;">
   <div class=padding>
   
   <p>
   Filters
   <hr>
   </p>
   rotate<br>
   <div align=center>
<input type=range min=-360 max=360 value=0 id=myrange> <br>
<input type=number min=-360 max=360 value=0 id=myrange2>
</div>
   
   </div></div>
 
 
 
 
 <?php
if ( isset($_GET["layout"])){
foreach(array_keys($layout) as $key){

if ( $key != 'body' ){

?>
<div id="<?php echo $key; ?>" style="<?php echo $layout[$key]['css']; ?>">
<?php echo $layout[$key]['html']; ?>
</div>


<?php
}



}

}
?>
 
 
 
 
</body>
</html>
