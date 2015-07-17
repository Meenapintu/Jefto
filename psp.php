<?php 

class dbms{
	protected $conn = null;
	public function __construct($connection)
	{
		echo " object successfully created  ";
	}
	public function setup($connection)
	{
		$this->conn = $connection;
		
		
	$query = "CREATE TABLE IF NOT EXISTS event(		/*  for long time these fields are going to update rarely */
			event_id   	bigserial  primary key,
			name 		varchar(100) not null,
			category 	varchar(30) not null,
			genre		varchar(30) not null,
			city		varchar(30) not null,
			address		varchar(500) not null,
			country		varchar(30) not null,
			scope		varchar(20) not null,
			frequency   varchar(20) not null, 
			website     varchar(50) ,
			email		varchar(50) ,
			organizer   varchar(50) not null,
			start_date		date not null,
			end_date    	date not null,
			link_for_req	text ,
			description  	varchar(1500) not null,   /*   this is event description */ 
			team_descritpion 	varchar(1500),
			budget 				bigint,
			tags 				varchar(100)
		)";
	
	$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  event created successfully\n";
	   }

	 
	$query = " CREATE TABLE IF NOT EXISTS  eventplus(				/* These fields may change every time */
			event_id   		bigserial  REFERENCES event ON DELETE CASCADE,
			logo			text ,
			currency 			varchar(5) not null,
			total_audience   	int,
	 		gender_ratio		int not null,
	 		audience_description text
		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  event plus created successfully\n";
	   }

	   	$query = "CREATE TABLE IF NOT EXISTS sponsorship(    /* there are name and count of them fields like key values */
			event_id 			bigserial  REFERENCES event ON DELETE CASCADE,
			type  			varchar(50)
		)";
 
 	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  demographics created successfully\n";
	   }

	   $query = "CREATE TABLE IF NOT EXISTS sponsorship_finance(    /* there are name and count of them fields like key values */
			event_id 			bigserial  REFERENCES event ON DELETE CASCADE,
			type  			varchar(50),
			fund           bigint
		)";
 
 	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  demographics created successfully\n";
	   }

	 $query = " CREATE TABLE IF NOT EXISTS age_group(
	 		event_id		bigserial REFERENCES event ON DELETE CASCADE,
	 		low_age         int,
	 		up_age			int,
	 		ratio 			int
	 		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  event plus created successfully\n";
	   }

	   $query = "CREATE TABLE IF NOT EXISTS key_numbers(    /* there are name and count of them fields like key values */
			event_id 			bigserial  REFERENCES event ON DELETE CASCADE,
			type_name  			varchar(50),
			type_count 			int
		)";
 
 	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  demographics created successfully\n";
	   }
	$query = "CREATE TABLE IF NOT EXISTS demographics(    /* there are name and count of them fields like key values */
			event_id 			bigserial  REFERENCES event ON DELETE CASCADE,
			type_name  			varchar(50),
			type_count 			int
		)";
 
 	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  demographics created successfully\n";
	   }
	 $query = "CREATE TABLE IF NOT EXISTS audience_demographics(    /* there are name and count of them fields like key values */
			event_id 			bigserial  REFERENCES event ON DELETE CASCADE,
			type_name  			varchar(50),
			type_value			varchar(50)
		)";
 
 	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  demographics created successfully\n";
	   }
   $query = "CREATE TABLE IF NOT EXISTS online_profile(	/*  there are two fields one site  and their link */
			event_id 			bigserial REFERENCES event ON DELETE CASCADE,
			site_name 			varchar(50) ,
			link  				text
		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table on line promo created successfully\n";
	   }

	$query = "CREATE TABLE IF NOT EXISTS onlinepromotion(	/*  there are two fields one site  and their link */
			event_id 			bigserial REFERENCES event ON DELETE CASCADE,
			site_name 			varchar(50) ,
			link  				text
		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table on line promo created successfully\n";
	   }

	$query = "CREATE TABLE IF NOT EXISTS offlinepromotion(  /* There are  names for string of off line  medial news paper and some description of them also if */ 
			event_id 			bigserial REFERENCES event ON DELETE CASCADE,
			names 				varchar(500),
			description  		varchar(1500)
		)";
		$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table off line promo created successfully\n";
	   }
	$query = "CREATE TABLE IF NOT EXISTS event_contact(  /*  the contact information that have to be filled up as event require part */
			event_id  bigserial REFERENCES event ON DELETE CASCADE,
			password varchar(20),
			contact_name varchar(30) not null,
			contact_email	varchar(50) not null,
			contact_mobile varchar(15) not null,
			contact_office varchar(15)
		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  event_contact created successfully\n";
	   }
	$query = "CREATE TABLE IF NOT EXISTS event_contactplus(   /* user can add more contact information if he wish to do ..*/
			event_id bigserial REFERENCES event ON DELETE CASCADE,
			user_info_name	varchar(50),
			user_info_value	text	
		)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  event_contactplus created successfully\n";
	   }

	   //

	  $query = "CREATE TABLE IF NOT EXISTS subscription(
	  	email  varchar(50),
	  	user_type smallint,
	  	PRIMARY KEY (email, user_type)
	  	)";

	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table  subscription created successfully\n";
	   }
	/* offer table required */

	/*$query = "CREATE TABLE IF NOT EXISTS offers(
			event_id varchar(50)REFERENCES event ON DELETE CASCADE,
			offer_name varchar(15),
			cost		int,
			currency    varchar(5),
			description  varchar(1500),
			deliverable	 text
		)";*/
	//$query = "DROP TABLE offers";
	/*$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table offers  created successfully\n";
	   }
		*/
	$query = "CREATE TABLE IF NOT EXISTS offers(
		event_id bigserial REFERENCES event ON DELETE CASCADE,
		offer_id  int,
		offer_name varchar(30),
		cost		int,
		currency    varchar(5),
		description  varchar(1500),
		total 	    int 
	)";

	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table offers  created successfully\n";
	   }
	$query = "CREATE TABLE IF NOT EXISTS deliverable(
		event_id bigserial REFERENCES event ON DELETE CASCADE,
		deliverable_id  int,
		deliverable_name  varchar(50),
		description  varchar(50),
		deliverable_image text
	)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table offers  created successfully\n";
	   }
	$query = "CREATE TABLE IF NOT EXISTS offer_deliver(
		event_id bigserial REFERENCES event ON DELETE CASCADE,
		offer_id  int,
		deliverable_id int,
		quantity  int 
	)";
	$psql = pg_query($this->conn, $query)or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "Table offers  created successfully\n";
	   }

	}




	public function index()
	{
	$query = "CREATE INDEX  CONCURRENTLY names ON event(name,event_id)";
	//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index names created successfully\n";
	   }
	$query = "CREATE INDEX   CONCURRENTLY category ON event(category,event_id)";
	//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index category created successfully\n";
	   }
	$query = "CREATE INDEX  CONCURRENTLY genre ON event(genre,event_id)";
	//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index genre created successfully\n";
	   }
	$query = "CREATE INDEX  CONCURRENTLY city ON event(city,event_id)";
	//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index city created successfully\n";
	   }
	$query = "CREATE INDEX  CONCURRENTLY country ON event(country,event_id)";
	//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index country created successfully\n";
	   }

	$query = "CREATE INDEX CONCURRENTLY events ON event(event_id)";
		//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index country created successfully\n";
	   }

	/*$query = "CREATE INDEX CONCURRENTLY offers ON offers(offer_id)";
		//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index country created successfully\n";
	   }

	   $query = "CREATE INDEX CONCURRENTLY deliverable ON deliverable(deliver_id)";
		//$psql = pg_query($this->conn, $query) or die(pg_errormessage());
	   if(!$psql){
	      echo pg_last_error($this->conn);
	   } else {
	      echo "index country created successfully\n";
	   }*/


	}
}

?>
