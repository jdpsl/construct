<html lang="en">
<head>
  <meta charset="utf-8">
  <title>con &bull; struct v1</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  



  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
  
 
<script>tinymce.init({
	
	  mode : "specific_textareas",
        editor_selector : "mceEditor",

plugins: "link,code,preview,autolink,textcolor,hr,image,media",
extended_valid_elements : "form[name|id|action|method|enctype|accept-charset|onsubmit|onreset|target],input[id|name|type|value|size|maxlength|checked|accept|src|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|onkeyup|onkeydown|required|style],textarea[id|name|rows|cols|maxlength|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|onkeyup|onkeydown|required|style],option[name|id|value|selected|style],select[id|name|type|value|size|maxlength|checked|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|onclick|multiple|style]",
toolbar: "sizeselect | bold italic underline strikethrough | fontselect |  fontsizeselect | bullist numlist | link unlink | alignleft aligncenter alignright alignjustify | forecolor backcolor | hr | outdent indent | image media",
fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

 menubar: false,






    


});


function save_widget(){
	
	
	$('#' + $('#document-writter').val() ).html(tinyMCE.get('content').getContent());
	
	
}




function speak(amsg){




      var msg = new SpeechSynthesisUtterance();
      var voices = window.speechSynthesis.getVoices();
      msg.voice = voices[2]; // Note: some voices don't support altering params
     msg.voiceURI = 'native';
      msg.volume = 1; // 0 to 1
      msg.rate = 1; // 0.1 to 10
      msg.pitch = 1; //0 to 2
      msg.text = amsg;
      msg.lang = 'en-US';


      speechSynthesis.speak(msg);
      lastSaid=amsg;
  

}

jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}


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
  <style>
  
  

  
  
  html body{
	  margin:0px;
	  padding:0px;
	  position:fixed;
	  height:100%; 
	  width:100%;
	  font-family: 'Montserrat', sans-serif;
	      -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;	
	cursor:url("http://media.giphy.com/media/xTiTnwsIlsMTguNfnq/giphy.gif");
	font-size:12px;
	
	box-sizing: border-box;
	overflow:auto;
	
	
	background-size: contain;
	
  }
  
  table{
  color: inherit;
  
  
  }
  ::selection {
    background-color: #000;
    color: #fff;
}

  
 .ui-widget-content { width: 200px; height: 200px;

  }
  
  
  .padding{
	  
	  
	  padding: 0.5em;
	  
	  
  }
  
  .mce-btn{
	  background:white !important;
  }
  .mce-panel{
	  background-color:white !important;
	  
  }
  
  table{
	  
	  font-size:12px;
  }
 #propertiess { width: 250px; height: 450px; 
 border:1px solid black;
 background:white;
 position:fixed;
 
right:20px;
top:50px;
overflow-y: auto;


z-index:999;
  }
  
  
   #propertiess:active{
	   
	   box-shadow:0px 0px 15px rgba(0,0,0,.5);
	   cursor:move;
	   
   }
  
  
  
  
  #draggable-editor{
	  
	  width:550px;
	  height:auto;
	  position:fixed;
	  top:-500px;
	  left:-500px;
	  z-index:999;
	  
  }
  
  
  
  
  
  
      #draggable-javascript-console{
	  
	  width:550px;
	  height:auto;
	  position:fixed;
	  top:50px;
	  left:150px;
	  z-index:999;
	  
  }
  
    #draggable-code-editor{
	  
	  width:500px;
	  height:auto;
	  position:fixed;
	  top:-500px;
	  left:-500px;
	  z-index:999;
	  
  }
  
    #draggable-layers{
	  
	  width:200px;
	  height:auto;
	  position:fixed;
	  top:50px;
	  right:300px;
	  
	  

	  z-index:999;
  }
  
  
  .loading{
	  
	  width:100%;
	  
	  
	  
  }
  
  
  #thelayers{
	  
	  max-height:300px;
	  overflow-y:auto;
	   list-style-type: none;
    padding: 0px;
    margin: 0px;
	  
	  
  }
  
  
  #thelayers li{
	  
	  padding:5px;
	  
  }
  #thelayers li:nth-child(even) {background: #eee}
#thelayers li:nth-child(odd) {background: #FFF}



.currentSelection{
	
	border:1px solid blue;
	
	
}
  .alayeritem{
    
    
   box-shadow:0px 0px 40px black; 
    z-index:999999 !important;
    
  }
  
  </style>
  <script>
  var slideshow=0;
  
  var enable_grid = false;
  var grid_size = 50;
  
  var grid_color= '#000000';
  
  

  
  
  function edit_doc_from_widget(theIt){
	  
	  
	  
	    var ed = tinyMCE.get('content');

    // Do you ajax call here, window.setTimeout fakes ajax call
    ed.setProgressState(1); // Show progress

        ed.setProgressState(0); // Hide progress
        ed.setContent(  $('#' + theIt ).html()      );
  

	  $('#document-writter').val( theIt   );
	  
	  
	  $('#draggable-code-editor').css('display','none');
	  $('#draggable-editor').css('display','block');
	  
	  $("#draggable-editor").css({top: 50, left: 200});
	  
  }
  
  
  function edit_code_from_widget(theIt){
	  
	  	  $('#draggable-editor').css('display','none');
	  $('#draggable-code-editor').css('display','block');
	  editor.setValue($('#' +    theIt       ).html());

	  
	  
	   
	   $('#code-writter').val( theIt);
	  
	    $("#draggable-code-editor").css({top: 50, left: 200});
  }
  
  
  
  
  function giveControl(theID){

	  
	  document.getElementById('file_control').value=theID;
	   document.getElementById('draggable-files').style.display="block";
	  
	  
  }
  
  
  function ajax(theDIV, thePAGE, callback) {
	  
	   callback = callback || 'unused';
	  
	  document.getElementById(theDIV).innerHTML = "<img src='icons/loading.gif' class=loading>";
	  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById(theDIV).innerHTML = xhttp.responseText;
	  


		  
	
	  
	  
	  
    }
  }
  xhttp.open("GET", thePAGE, true);
  xhttp.send();
}
  
  
    function ajax_return(thePAGE) {
	  document.getElementById(theDIV).innerHTML = "<img src='icons/loading.gif' class=loading>";
	  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      return xhttp.responseText;
    }
  }
  xhttp.open("GET", thePAGE, true);
  xhttp.send();
}
  
  var divcounter=2;
  
  
  
  
  function updateDiv(divID){
	  document.getElementById(divID).style.left=$('#x').val();
	   document.getElementById(divID).style.top=$('#y').val();
	    document.getElementById(divID).style.width=$('#w').val();
		
		
		
		document.getElementById(divID).style.height=$('#h').val();
		document.getElementById(divID).style.background=$('#bg').val();
		document.getElementById(divID).style.border=$('#b').val();
		
	
		document.getElementById(divID).style.color=$('#tc').val();
	  
  }
  
  
  $(function() {
	  
	  
	  	  
	  
	  
	  $('#myrange').on("input change", function() { 
		$('#' + $('#itemno').val() ).css( 'transform' , 'rotate( ' + $('#myrange').val() + 'deg)'  )    ;
		$('#myrange2').val($('#myrange').val());
});

$('#myrange2').on("input change", function() { 
		$('#' + $('#itemno').val() ).css( 'transform' , 'rotate( ' + $('#myrange2').val() + 'deg)'  ) ;
        $('#myrange').val($('#myrange2').val());
});
	  
	  
	  
    $( 'div[id^="draggable"]'  ).draggable();
$( '#propertiess'  ).draggable();
	
	
$( 'div[id^="tools"]'  ).draggable();
	
		$('div[id^="tools"]').draggable({cancel : '.CodeMirror, input, textarea, .mce-ico, select, option,#return'});
	
	
	
	
	
	
	
	
		  $( 'div[id^="tools"]' ).mousedown(function() {
			$(this).addClass('clicked');

			});
	
		  $( 'div[id^="tools"]' ).mouseup(function() {
			  
			  if ( enable_grid == true ){
			  		var ax = $(this).offset().left;
					var ay = $(this).offset().top;
					ax = Math.round(ax / grid_size) * grid_size;	
					ay = Math.round(ay / grid_size) * grid_size;	
					$(this).offset({ top: ay, left: ax   });
			  }
			  
			 $(this).removeClass('clicked');

		
});
	
	
	
	
	  $( 'div[id^="draggable"]' ).mousedown(function() {
			$(this).addClass('clicked');
			//$(this).css('box-shadow', '0px 0px 15px rgba(0,0,0,.5)');
			$("#itemno").val(this.id);
			

			
			
		
});
	
		  $( 'div[id^="draggable"]' ).mouseup(function() {
			  
			  if ( enable_grid == true ){
			  
			  		var ax = $(this).offset().left;
			var ay = $(this).offset().top;
			
			
		ax = Math.round(ax / grid_size) * grid_size;	
		ay = Math.round(ay / grid_size) * grid_size;	


		$(this).offset({ top: ay, left: ax   });
			  
			  }
			  
			  $( 'div[id^="draggable"]' ).removeClass('currentSelection');
			  $(this).addClass('currentSelection');
			
			 $(this).removeClass('clicked');
			//$(this).css('box-shadow', 'none');
			$("#x").val($(this).offset().left);
			$("#y").val($(this).offset().top);
			$("#w").val($(this).width());
			$("#h").val($(this).height());
			$("#bg").val($(this).css("background"));
			$("#tc").val($(this).css("color"));
			$("#b").val($(this).css("border"));
		
});
	
	
	

	
	$( "#propertiess input" ).change(function() {
  updateDiv(  $('#itemno').val()  );
});
	
	
	$('div[id^="draggable"]').draggable({cancel : '.CodeMirror, input, textarea, .mce-ico, select, option,#return, #thelayers li'});

	
	
  });
  
  
  


  
  
function toggleVisability(theOBJ){
	
	
	var vis= theOBJ.style.display;
	
	if ( vis != "block" ){
		theOBJ.style.display="block";
		
	}else{
		
			theOBJ.style.display="none";
	}
	
}



function toggleBar(){
	
	
	var vis= document.getElementById('topbar').style.display;
	
	if ( vis != "block" ){
		document.getElementById('topbar').style.display="block";
		document.getElementById('amenu').style.display="none";
		
	}else{
		
			document.getElementById('topbar').style.display="none";
			document.getElementById('amenu').style.display="block";
	}
	
}


function reSortItems(){
	
				  var curLayer=$( "#thelayers li" ).size() ;

$("#thelayers li").each(function(){

  
  $('#' + $(this).html() ).css('z-index',curLayer);
  curLayer--;
  
  
    });
	
}

function additem(atype){
	
	var tmp='onclick="giveControl(' + "'draggable" + divcounter + "');" + '"'; 
	
	$("#thelayers").prepend('<li>draggable' + divcounter + '</li>');
	
	  $( "#thelayers" ).sortable({
        update: function( ) {
				reSortItems();
        }
    });
	
	
	
		reSortItems();
	$( '#thelayers li' ).mouseover(function() { $('#' + $(this).html()).addClass('alayeritem')           });
		$( '#thelayers li' ).mouseout(function() { $('#' + $(this).html()).removeClass('alayeritem')           });
	
	
	
	
	
	
	doList();
	
	$( 'body' ).append( '<div atype="'+atype+'"    class="ui-widget-content" id="draggable' + divcounter + '" style=position:fixed;top:50px;left:50px;z-index:' + divcounter + '><table border=0 width=100% style="width:100%;height:100%;font-weight:bold;"><tr><td valign=center><div align=center><a ' +  tmp  + '><img src=icons/gear.gif style="width:25%;margin-bottom:10px"><br>Setup Widget</a></div></td></tr></table></div>' );$('#draggable' + divcounter ).draggable(); divcounter++;
	
	
	 $(function() {
    $( 'div[id^="draggable"]'  ).draggable();
$( '#propertiess'  ).draggable();
	
	  $( 'div[id^="draggable"]' ).mousedown(function() {
			$(this).addClass('clicked');
			//$(this).css('box-shadow', '0px 0px 15px rgba(0,0,0,.5)');
			$("#itemno").val(this.id);
			
	
			
			
		
});
	
		  $( 'div[id^="draggable"]' ).mouseup(function() {
			$(this).removeClass('clicked');
			
			
			  if ( enable_grid == true ){
			  
			  		var ax = $(this).offset().left;
			var ay = $(this).offset().top;
			
			
	ax = Math.round(ax / grid_size) * grid_size;	
		ay = Math.round(ay / grid_size) * grid_size;	



		$(this).offset({ top: ay, left: ax   });
			  
			  }
		  $( 'div[id^="draggable"]' ).removeClass('currentSelection');
			  $(this).addClass('currentSelection');
			
			 $(this).removeClass('clicked');
			//$(this).css('box-shadow', 'none');
			$("#x").val($(this).offset().left);
			$("#y").val($(this).offset().top);
			$("#w").val($(this).width());
			$("#h").val($(this).height());
			$("#bg").val($(this).css("background"));
			$("#tc").val($(this).css("color"));
			$("#b").val($(this).css("border"));
			
		
});
	
	
	

	
	$( "input" ).change(function() {
  updateDiv(  $('#itemno').val()  );
});
	
	
  });
  
  switch(atype){
	  
	  
	  case "div":
	  
	  $('#draggable-files').css('display','block');
	  
	  
	  
	 $('#file_control').val('draggable' + (divcounter - 1));
	  break;
	  
	  
  }
  
  
  
  return divcounter - 1;
	
}



function delete_item(deleteMe){
	
	if (! isNaN(deleteMe.replace('draggable','')       )) {
	
	
	var test = confirm('Are you sure you want to remove this item?');
	if ( test ){
	$( '#' + deleteMe ).remove();
	$("#draggable-layers li:contains('"+deleteMe+"')").remove();
	}
	
	
	
	
	
	
	}
	
}



function start_editor(id){
    CodeMirror.fromTextArea(id, {
  lineNumbers: true,
          mode: "text/javascript",
      matchBrackets: true
    });
}



function showHelp(){
	
	
	$('#draggable-examples').css('display','block');

	$('#draggable-examples').css('top','50');
	$('#draggable-examples').css('left','700');
	

	
	
}




function form_to_php(divId){

var method='GET';
$("#" + divId + "  form").each(function() {
 method=$(this).attr('method')
});
var tmp="";
$("#" + divId + "  input").each(function() {
  tmp= tmp + "$_" + method + "['"  + $(this).attr('name') + "']\n"
});
$("#" + divId + "  textarea").each(function() {
  tmp= tmp + "$_" + method + "['" + $(this).attr('name')  + "']\n"
});
return ('<textarea style="width:100%"><\?php extract($_' + method + ');' + " ?>\n" + tmp + '</textarea>');




}
  </script>
  
  <style>
  
  .topbar{
	  z-index:9999999999999;
	  position:fixed;
	  top:0px;
	  left:0px;
	  width:100%;
	  height:45px;
	  background:rgba(255,255,255,.8);
	  color:white;
	  box-shadow:0px 0px 5px rgba(0,0,0,.8);
	  
  }
  
  td input{
	  width:100px;
	  font-size:12px;
	  
  }
  
  #draggable-jod{
	  width:450px;

	  height:400px;
	  z-index:999;
	  
  }
  
  #draggable-files{
	  
	  	  width:550px;
	
	  min-height:400px;
	  max-height:75%;
	  overflow-y:auto;
	  position:fixed;
		top:50px;
		left:200px;
	  z-index:999;
	  
  }
  
  
  #draggable-jod{
	position:fixed;
		top:50px;
		left:50px;

	  
  }
  
  #draggable-tools{
	  
	  
	  	  	  width:100px;

	  height:400px;
	  position:fixed;
		top:50px;
		left:20px;
	  overflow-y: auto;
	  z-index:999;
  }
  
  
  .tool-icon{
	  width:20px;
	  display:inline-block;
	  
	  
  }
  
    button{
	  border:1px solid black;
	  background:white;
	  padding:5px;
	  
  }
  button:hover{
	  background:black;
	  color:white;
  }
  

input{
	border:1px solid black;
	padding:5px;
}


ol li{
	
	background:#ccc;
	font-weight:bold;
padding:5px;
	
}


#file:nth-child(even) {background: #eee}
#file:nth-child(odd) {background: #FFF}

#file{
	
	list-style-type: none;
}

#file:hover{
	
	background: #ffffff;
	border:1px solid black;

	z-index:999;
	}

.folder{
	width:20px;
	margin:5px;
	vertical-align:middle;
}


.fileicon{
	width:20px;
	margin:5px;
	vertical-align:middle;
	float:right;
}

#trash{
	border-left:1px solid black;
	margin-left:10px;
	padding-left:5px;
}
#trash:hover {

padding-left:0px;
margin-left:15px;
box-shadow:0px 0px 15px red;
border-left:0px;
	
	
}


#insertfile:hover{
	


box-shadow:0px 0px 15px blue;
	
}


.topicon{
	width:25px;
	float:right;
	margin:5px;
	
}


.clicked{
	box-shadow:0px 0px 15px rgba(0,0,0,.8);
	z-index:9999999999999999999;
	
	cursor:move;
	
}


#draggable-document-properties{
	width:550px;
	height:auto;
	top:50px;
	left:200px;
	z-index:9999999;
	position:fixed;
	
}



#draggable-database{
	
	
	width:550px;
	height:auto;
	top:50px;
	left:200px;
	z-index:9999999;
	position:fixed;
	max-height:75%;
	
}



#draggable-info{
	
	
	width:550px;
	height:auto;
	top:50px;
	left:200px;
	z-index:9999999;
	position:fixed;
	max-height:75%;
	background:rgba(255,255,255,.9);
	
}

#draggable-examples{
	
	
	width:550px;
	height:auto;
	top:-800px;
	left:-800px;
	z-index:9999999;
	position:fixed;
	max-height:75%;
	overflow:auto;
	
}


#amenu{
	
	
	background:white;
	padding:1px;
	border-radius:30px;
	
}





#tools-filter{
	
	
	z-index:9999999999;
}



  </style>
  
</head>
<body>




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
   <img src="icons/save.png" class=topicon onclick="toggleVisability(document.getElementById('draggable-files'))" title="save layout" alt="save layout">
 

      

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
<img src="icons/form.png" class=tool-icon title="form(s)"  onclick="ajax('draggable-files','edit_form.php');">
<img src="icons/console.png" class=tool-icon title="script(s)">
<hr>



<?php
$dir = "container";
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
		<img src="icons/choose.png" class=fileicon id=insertfile onclick="ajax(document.getElementById('file_control').value, 'container/<?php echo $filename; ?>');">      
		
		<?php } ?>
		
	</div>
	
	<?php
	}

}


?>

</div>
</div>

 <!-- -->
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


</ul>


<hr>
<img src="icons/trash.png" style="width:20px;">

</div>
</div>




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
   <ol>
   
   <li>
   Strings
   <br>
   <textarea>"evaluated string"
   'unevaluated string'</textarea>
   </li>
   
      <li>
   variable
   <br>
   <textarea>var myVariable = "theValue";</textarea>
   </li>
   
      <li>
   Comments
   <br>
   <textarea>// Javascript and php single line comments
/* javascript and php
multi line */

<!-- html comment -->

# perl comment

</textarea>
   </li>
   
   
  <li>
   
   get a form value
   <textarea id=exp7>
    $('#draggable2').val();
   </textarea>
</li>

  <li>
   
  set a form value
   <textarea id=exp7>
    $('#draggable2').val('new value');
   </textarea>
</li>
   
   
   
     <li>
   
   
   get css property
   <textarea id=exp4>
   $('#draggable2').css('background');
   </textarea>

  </li>
  <li>
   
      set a css property
   <textarea id=exp5>
    $('#draggable2').css('background','black');
   </textarea>

  </li>
   
    <li>
   
   set box with contents
   <textarea id=exp7>
    $('#draggable2').html('change the inside of box');
   </textarea>
</li>








  <li>
   
  if statement
   <textarea id=exp7>
    if ( "a" == "a" ){ 
	// do something
	}
   </textarea>
</li>


  <li>
   
  switch statement
   <textarea id=exp7>
switch (myVariable){
	case "one":
		// do something
		break;
	case 2:
		// something else
		break;
	default:
		// if not matched
		break;
	}</textarea>
</li>



  <li>
   
  for loop
   <textarea id=exp7>
for ( i=0; i > 10; i++ ){
	// do something with i
}</textarea>
</li>


  <li>
   
  while
   <textarea id=exp7>
var i=0;
while ( i != 1 ){
	// do something
}</textarea>
</li>


  <li>
   
  search replace
   <textarea id=exp7>
"my string".replace("my","old");</textarea>
</li>


   
   
   <li>
   simple animation<br>
   <textarea id=exp1>	$( "#draggable2" ).click(function() {
		 $( "#draggable2" ).animate({
 			opacity: 1,     
			left: "+=50",     
			height: "toggle"   
		}, 1000, function() {
    // Animation complete.
 		 });  	 
    }); 
</textarea>
 </li>
 
 
 
 
 
 
 
 
 
 <li>
   add a block
   <textarea id=exp2>
   additem();
   </textarea>
   
  </li>
  <li>
    add a slideshow
   <textarea id=exp3>
   add_slideshow();
   </textarea>
 
  </li>

  <li>
   
   
         ajax
   <textarea id=exp6>
    ajax('draggable2','container/cal.php');
   </textarea>
 
  </li>
 
  <li>
   
  speak
   <textarea id=exp7>
speak("Say something out loud");</textarea>
</li>



  <li>
   
  key keyboard input
   <textarea id=exp7>
document.onkeydown = function(e) {
    e = e || window.event;
    var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
    if (charCode) {
        alert("Character typed: " + String.fromCharCode(charCode));
    }
};</textarea>
</li>




  <li>
   
  Animation Frame
   <textarea id=exp7>
var max=1000;
var floor=10;
var direction=0;
var curr = 0;
var speed = 10;
function draw(){
  if ( direction == 0 ){
  $('#draggable2').css('left','+=' + speed);
    curr= curr + speed;
  }else{
     $('#draggable2').css('left','-=' + speed);
    curr= curr - speed;
  }
  if ( curr == floor ) direction=0;
  if ( curr == max ) direction=1;
 window.requestAnimationFrame(draw); 
}
draw();</textarea>
</li>



  <li>
   
  Generate php from div form
   <textarea id=exp7>
form_to_php('draggable2');</textarea>
</li>




<li>
Center object on screen
<textarea>$('#draggable2').center();</textarea>
</li>





<li>
Websock Client
<textarea>websocket = new WebSocket("ws://localhost:8080");
 websocket.onopen = function(evt) {  websocket.send("hello"); };
 websocket.onmessage = function(evt) { alert(evt.data) };
 websocket.close();
 
 /*
 websocket.onclose = function(evt) { onClose(evt) };
 websocket.onmessage = function(evt) { onMessage(evt) };
 websocket.onerror = function(evt) { onError(evt) };

 */</textarea>
</li>



<li>
Websock Server
<textarea>
#!/usr/bin/perl

  use Net::WebSocket::Server;

    my $origin = 'http://straitlogic.com';

    
    print "starting...\n";
    
    Net::WebSocket::Server->new(
        listen => 8080,
        on_connect => sub {
            my ($serv, $conn) = @_;
            $conn->on(
                handshake => sub {
                    my ($conn, $handshake) = @_;
                    $conn->disconnect() unless $handshake->req->origin eq $origin;
                    print $handshake->req->origin;
                    print "\n";
                },
                utf8 => sub {
                    my ($conn, $msg) = @_;
                    $_->send_utf8($msg . '<br>') for $conn->server->connections;
                    print "sent " . $msg . "\n";
                },
                binary => sub {
                    my ($conn, $msg) = @_;
                    $_->send_binary($msg) for $conn->server->connections;
                     print "sent binary " . $msg . "\n";
                },
            );
        },
    )->start;</textarea>
</li>
 

<li>
Chat Client
<textarea>
<input type="text" id="am">
  <button id="myclick">Send</button>

<script>
var ws=new WebSocket("ws://localhost:8080");
ws.onopen = function(evt){ ws.send("hello");}
ws.onmessage = function(evt){$('#draggable2').append(evt.data);}

$( "#myclick" ).click(function() {

ws.send($('#am').val() );
}); 
</script>
</textarea>
</li>
 
 
 
 <li>
Local Video Camera
<textarea>




<div style="text-align:center;">
  <video id="basic-stream" class="videostream" autoplay></video>
  <p><button id="capture-button">Capture video</button> <button id="stop-button">Stop</button></p>
</div>


<script>
function errorCallback(e) {
  if (e.code == 1) {
    alert('User denied access to their camera');
  } else {
    alert('getUserMedia() not supported in your browser.');
  }
}

var video = document.querySelector('#basic-stream');
var button = document.querySelector('#capture-button');
var localMediaStream = null;

button.addEventListener('click', function(e) {
  if (navigator.getUserMedia) {
    navigator.getUserMedia('video', function(stream) {
      video.src = stream;
      video.controls = true;
      localMediaStream = stream;
    }, errorCallback);
  } else if (navigator.webkitGetUserMedia) {
    navigator.webkitGetUserMedia({video: true}, function(stream) {
      video.src = window.URL.createObjectURL(stream);
      video.controls = true;
      localMediaStream = stream;
    }, errorCallback);
  } else {
    errorCallback({target: video});
  }
});
                        
document.querySelector('#stop-button').addEventListener('click', function(e) {
  video.pause();
  localMediaStream.stop(); 
});
</script>



</textarea>
</li>
 
 
 
 
 


</ol>
   
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
 
 
 
</body>
</html>