<?php



if ( isset($_POST['login'])){

 $db = new SQLite3('../users.db');
    $results = $db->query("select * from user where username = '" . addslashes($_POST['user']) . "' and password = '".addslashes($_POST['pass'])."'      ");
$login=1;
while ($row = $results->fetchArray()) {



if ( $row['username'] == $_POST['user'] and sha1($row['password']) == sha1($_POST['pass']) ){
setcookie("UID", $row['uid']);
setcookie("username", $row['username']);
setcookie("info", sha1($row['pass']));
   header("Location: /user.php");
die();


}else{

header("Location: /");
die();



}


}


if ( $login== 1 ){
header("Location: /");
die();
}




}




?>
<html>
<head>
  <title>construct</title>
</head>
<body>
 <style>
  html body{
	  margin:0px;
	  padding:0px;
	  position:fixed;
	  height:100%;
	  width:100%;
	  color:white;
	  font-family: 'Montserrat', sans-serif;
	      -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;	
	cursor:url(h"ttp://media.giphy.com/media/xTiTnwsIlsMTguNfnq/giphy.gif");
 
background:black;
 }
  
  .login{
	  
	  width:40%;

	  padding:20px;
	  background:rgba(0,0,0,.2);
	
	  
  }
  
  button{
	  border:1px solid white;
	  background:white;
	  padding:10px;
	  color:black;
	  
  }
  button:hover{
	  background:black;
	  color:white;
  }
  
  p {
    text-indent: 50px;
}
input{
	border:1px solid white;
	padding:10px;
	width:100px;
}

input:focus{
	
	
	
box-shadow:0px 0px 20px white;
}

#myvid{
	
	z-index:-1;
position:fixed;
top:0px;
left:0px;
	width:100%;
	
	
}


.login2{

position:absolute;
width:calc(100% - 20px);
padding:10px;
background:rgba(0,0,0,.2);
text-align:right;


}


.logo{


position:absolute;
display:block;
top:10px;
left:10px;

}
  </style>
  
  
  
  








<video autoplay loop muted id=myvid poster="vid/bg.jpg">

<?php
if (preg_match('/webkit/', $userAgent)) { 
            ?> <source src="vid/bg.webm" type="video/webm"><?php
        } else{?><source src="vid/bg.mp4" type="video/mp4"><?php }
?>
    





</video>

<script>

document.getElementById('myvid').play();

</script>
  
  
  
<div class=login2>

<img src="icons/logo.png" class=logo>

<form method=post>
<input type=hidden name=login value="login">
<input name=user id=user type=text placeholder="username" autofocus>
<input name=pass type=password placeholder="password">
<button type=submit>Login</button>
</form>
</div>

  
  
  
<table border=0 style="width:100%;height:100%;">
<tr>
<td valign=middle align=center>

<div class=login>



<div align=left>
<b><i>con &bull; struct</i></b><br> <p>philosophy of science, an ideal object, where the existence of the thing may be said to depend upon a subject's mind.</p>
</div>

</div>

</td></tr>
</table>




</body>
</html>
