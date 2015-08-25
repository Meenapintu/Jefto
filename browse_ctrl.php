<?php
session_start();
//echo $_GET['e'];

$connection_string = "host=localhost  dbname=jefto user=ram password=dfedderftrfr23";
$conn = pg_connect($connection_string);
if(!$conn)//{ //echo "done ";}
	echo " there is error ";

require_once('phpfunc.php');
$event_id = array();
$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.website,event.start_date,event.end_date,event.link_for_req,event.budget,eventplus.logo,eventplus.total_audience FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id";
$event = pg_prepare_SELECT($conn,$query,$event_id);

?>