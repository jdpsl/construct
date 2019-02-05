<?php





include('include/testlogin.php');


if ( !isset($_POST['widgetname']) and !isset($_POST['contents'])) {

echo "{'Method':{'POST'},'Inputs':{'widgetname','contents'}}";

die();
}




// Change directory
chdir("user/".$username."/widgets/");


$filepath=basename($_POST['widgetname']);

file_put_contents($filepath,$_POST['contents']);




?>
