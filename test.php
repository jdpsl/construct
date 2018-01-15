<html>



<?php

for ( $i=0; $i < 200; $i++){


?>
<style>

#pixle<?php echo $i; ?>{
width:1px;
height:1px;
background:blue;
display:inline-block;
}

</style>
<div id=pixle<?php echo $i; ?>></div>







<?php } ?>

</html>