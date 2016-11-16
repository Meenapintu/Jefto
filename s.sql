/*SELECT * FROM event left  JOIN eventplus ON event.event_id = eventplus.event_id left  JOIN event_contact ON event_contact.event_id=event.event_id WHERE event.event_id=4;
//
sponsorship sponsorship_finance age_group key_numbers demographics online_profile  onlinepromotion offlinepromotion*/


select sponsorship.event_id, sponsorship.type,sponsorship_finance.fund from sponsorship  left JOIN sponsorship_finance  on sponsorship.event_id=sponsorship_finance.event_id where sponsorship.event_id=9;


select event_id,low_age,ratio from age_group where event_id=8;

select event_id,type_name,type_count from key_numbers where event_id=8

select event_id,type_name,type_count from demographics where event_id=8

select event_id,type_name,type_value from audience_demographics where event_id=8

select event_id,site_name,link from online_profile where event_id=8

select event_id,site_name,link from onlinepromotion where event_id=8

select event_id,names,description from offlinepromotion where event_id=8;

select event_id,offer_id,offer_name,cost,currency,description,total from offers where event_id=8

select event_id,deliverable_id,deliverable_name,description,deliverable_image from deliverable where event_id=8

select event_id,offer_id,deliverable_id,quantity from offer_deliver where event_id=8
