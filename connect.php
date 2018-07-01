<?php
session_start();
//echo $_GET['e'];
$connection_string = "host=ec2-54-217-250-0.eu-west-1.compute.amazonaws.com  dbname=d73g42v8d095dg user=fcmhpgjorxzufu password=02658abc9e07a08442bb2560b5e3e5726226f804e4bf4a9bff5e32d4770594cd";
$conn = pg_connect($connection_string);
if(!$conn)//{ //echo "done ";}
	echo " there is error ";

?>
