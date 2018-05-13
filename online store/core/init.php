<?php
$db = mysqli_connect("127.0.0.1","root","","online store");
    if(mysqli_connect_error()){
	echo "database connection failed with the following errors:".mysqli_connect_error();
	die();
}
