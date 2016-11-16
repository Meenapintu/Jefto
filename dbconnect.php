<?php 
	require_once("psp.php");
	$connection_string = "host=localhost  dbname=jefto user=ram password=dfedderftrfr23";
	try {
		$conn = pg_connect($connection_string);
	} catch (Exception $e) {
		echo $e;
	}
	//or die(pg_last_error());
	if($conn){ echo "done ";}
	else echo " there is error ";

	$dbm = new dbms();
	$dbm->setup($conn);
	$dbm->index();

?>