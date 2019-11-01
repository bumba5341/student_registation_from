<?php


// This file connect with the database server 


	$server_name="localhost";
	$user="root";
	$db=mysqli_connect($server_name,$user,'') or die("Unable to connect");

  /* if (!$db) {
    die("Connection failed: " . mysqli_connect_error($db));
}
echo "Connected successfully";*/

?>
