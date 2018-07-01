<?php 
	require_once("psp.php");
	$connection_string = "host=ec2-54-217-250-0.eu-west-1.compute.amazonaws.com  dbname=d73g42v8d095dg user=fcmhpgjorxzufu password=02658abc9e07a08442bb2560b5e3e5726226f804e4bf4a9bff5e32d4770594cd";
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
