<?php
$connection = mysqli_connect ("localhost","root","","db_uts");

///check connection
if ($connection){
	echo "Connection Success";
}else{
	echo "Connection Failed!" . mysqli_connect_error();
	die;
}

?>
