<?php


include('include/testlogin.php');

if ( !isset($_GET["layout"])){
echo '{"layout"}';
die();
}




$layout = file_get_contents("user/".$username."/layouts/" . basename($_GET['layout']) ) or die("Could not open layout");

$layout = json_decode($layout, true);


?>
<html>
<head>
<title>Stand Alone Complex</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  



  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script src="js/three.js"></script>
 <script>
 
 
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
 
 
 </script>
<style>
  
  

  
  
  html body{
	  box-sizing: border-box;
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

</head>
<body style='<?php echo $layout['body']; ?>'>

<?php

foreach(array_keys($layout) as $key){

if ( $key != 'body' ){

?>
<div id="<?php echo $key; ?>" style="<?php echo $layout[$key]['css']; ?>">
<?php echo $layout[$key]['html']; ?>
</div>


<?php
}



}


?>
</body>
</html>
