<?php





include('include/testlogin.php');


if ( !isset($_POST['layoutname']) and !isset($_POST['contents'])) {

echo "{'layoutname','contents'}";

die();
}




// Change directory
chdir("user/".$username."/layouts/");


$filepath=basename($_POST['layoutname']);

file_put_contents($filepath,$_POST['contents']);




?>
