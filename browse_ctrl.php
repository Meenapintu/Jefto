<?php
require_once('connect.php');
require_once('phpfunc.php');
$event_id = array();
$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.website,event.start_date,event.end_date,event.link_for_req,event.budget,eventplus.logo,eventplus.total_audience FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id";
$event = pg_prepare_SELECT($conn,$query,$event_id);

?>