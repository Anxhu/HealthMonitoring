<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$databasename = "contacts";

	$con = mysqli_connect($server,$user,$password,$databasename);
	if ($con) {
	//echo "connection okk";
}
else {
	echo "Connection failed".mysqli_connect_error();
}



?>