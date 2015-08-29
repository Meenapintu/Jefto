<?php
require_once('connect.php');
require_once('phpfunc.php');
$event_id = array();
$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.website,event.start_date,event.end_date,event.link_for_req,event.budget,eventplus.logo,eventplus.total_audience FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id";
$event = pg_prepare_SELECT($conn,$query,$event_id);
$query = "SELECT event_id,offer_id,offer_name,MIN(cost)as cost,currency from offers group by event_id";
$offer = pg_prepare_SELECT($conn,$query,$event_id);

function get_offer($event_id,$offer){
	$l = sizeof($offer);
	for($i=0;$i<$l;$i++){
		if($offer[$i]['event_id']==$event_id) return $offer[$i]['cost'];
	}
	return 0;
}
?>