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
   Map Number
   <br>
   <textarea>var num = 5;
num.map(0, 10, -50, 50); // 0</textarea>
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
    
    // or
    
    $.get( "sqlite.php", { q: "select * from test", db: "test.db" } )
  .done(function( data ) {
    $('#draggable2').html(data);
  });
  
  
  // or
  
  $.post( "test.php", { name: "John", time: "2pm" } );
  
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
JSON Decode
<textarea>

var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}');
$('#draggable2').html(obj.name + ", " + obj.age);

</textarea>
</li>
 
 
<li>
Chat Client
<textarea>
<input type="text" id="am">
  <button id="myclick">Send</button>
<hr>
<script>
var ws=new WebSocket("ws://localhost:8080");
ws.onopen = function(evt){ ws.send("hello");}
ws.onmessage = function(evt){$('#draggable2').append(evt.data + "<br>");}

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
