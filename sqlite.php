<?php








include('include/testlogin.php');
// Change directory
chdir("user/".$username."/databases/");



if ( isset($_GET['q']) and isset($_GET['db']) and  isset($_GET['method']) ){

$dbfile = basename($_GET['db']);


    $db = new SQLite3($dbfile);
    
    if ( $_GET['method'] == "EXEC"){
    
       $results = $db->exec($_GET['q']);
    
    }else{
    
    $results = $db->query($_GET['q']);
    $tmp=array();
    
    $i=0;
    while ($row = $results->fetchArray()) {


    $tmp[$i]=$row;
    
  $i++;
    
    }
    
      $json = json_encode($tmp );
    
    echo $json;
    
    }
  
}else{

echo "{'q','db','method':{'QUERY','EXEC'}}";



}
?>
