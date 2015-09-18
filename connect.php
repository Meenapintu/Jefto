<?php
session_start();
//echo $_GET['e'];
$connection_string = "host=localhost  dbname=jefto user=ram password=dfedderftrfr23";
$conn = pg_connect($connection_string);
if(!$conn)//{ //echo "done ";}
	echo " there is error ";

?>