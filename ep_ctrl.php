<?php
session_start();
//echo $_GET['e'];
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if(!$conn)//{ //echo "done ";}
	echo " there is error ";

require_once('phpfunc.php');

//user inner if 3 table required entry for this 
$event_id = array((int)$_GET['e']);
$query = "SELECT event.event_id,event.name,event.city,event.address,event.country,event.frequency,event.website,event.email,event.organizer,event.start_date,event.end_date,event.link_for_req,event.description,event.team_descritpion,event.budget,event.tags,eventplus.logo,eventplus.currency,eventplus.total_audience,eventplus.gender_ratio,eventplus.audience_description,event_contact.contact_name,event_contact.contact_email,event_contact.contact_mobile,event_contact.contact_office   FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id left  JOIN event_contact ON event_contact.event_id=event.event_id WHERE event.event_id=$1";
$event = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT sponsorship.event_id, sponsorship.type,sponsorship_finance.type as ftype,sponsorship_finance.fund from sponsorship  left JOIN sponsorship_finance  on sponsorship.event_id=sponsorship_finance.event_id where sponsorship.event_id=$1";
$spon  = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,low_age,ratio from age_group where event_id=$1";
$age_group = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,type_name,type_count from key_numbers where event_id=$1";
$keyn = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,type_name,type_count from demographics where event_id=$1";
$demo = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,type_name,type_value from audience_demographics where event_id=$1";
$ad = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,site_name,link from online_profile where event_id=$1";
$op = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,site_name,link from onlinepromotion where event_id=$1";
$olp = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,names,description from offlinepromotion where event_id=$1";
$olf = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,offer_id,offer_name,cost,currency,description,total from offers where event_id=$1";
$offer = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,deliverable_id,deliverable_name,description,deliverable_image from deliverable where event_id=$1";
$der = pg_prepare_SELECT($conn,$query,$event_id);

$query = "SELECT event_id,offer_id,deliverable_id,quantity from offer_deliver where event_id=$1";
$od = pg_prepare_SELECT($conn,$query,$event_id);

//echo count($v);
//echo"all done";


?>