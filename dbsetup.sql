
CREATE TABLE event(		/*  for long time these fields are going to update rarely */
	event_id    varchar(50) not null primary key,
	name 		varchar(100) not null,
	category 	varchar(30) not null,
	genre		varchar(30) not null,
	city		varchar(30) not null,
	country		varchar(30) not null,
	scope		varchar(20) not null,// social or non 
	frequency   varchar(20) not null, 
	website     varchar(50) ,
	email		varchar(50) ,
	organiser   varchar(50) not null,
	CREATE INDEX CONCURRENTLY names ON event(name,event_id)
	CREATE INDEX CONCURRENTLY category ON event(category,event_id)
	CREATE INDEX CONCURRENTLY genre ON event(genre,event_id)
	CREATE INDEX CONCURRENTLY city ON event(city,event_id)
	CREATE INDEX CONCURRENTLY country ON event(country,event_id)
)

CREATE TABLE eventplus(				/* These fields may change every time */
	event_id   		varchar(50) not null,
	logo			text() not null,
	address			varchar(500) not null,
	start_date		date() not null,
	end_date    	date() not null,
	link_for_req	text() ,
	description  	varchar(1500) not null,   /*   this is event description */ 
	gender			int() not null,
	team_descritpion 	varchar(1500),
	currency 			varchar(5) not null,
	non_media_exposure  text(),
	budget 				numeric()
	FOREIGN KEY(event_id) REFERENCES event(event_id)
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

CREATE TABLE demographics(    /* there are name and count of them fields like key values */
	event_id 			varchar(50) not null,
	type_name  			varchar(50),
	type_count 			int(),
	FOREIGN KEY(event_id) REFERENCES event(event_id)
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

CREATE TABLE onlinepromotion(	/*  there are two fields one site  and their link */
	event_id 			varchar(50) not null,
	site_name 			varchar(50) ,
	link  				text,
	FOREIGN KEY(event_id) REFERENCES event(event_id)
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

CREATE TABLE offlinepromotion(  /* There are  names for string of off line  medial news paper and some description of them also if */ 
	event_id 			varchar(50) not null,
	names 				varchar(500),
	descrition  		varchar(1500),
	FOREIGN KEY(event_id) REFERENCES event(event_id)
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

CREATE TABLE event_contact(  /*  the contact information that have to be filled up as event require part */
	event_id  varchar(50) not null,
	password varchar(20),
	contact_name varchar(30) not null,
	contact_email	varchar(50) not null,
	contact_mobile varchar(15) not null,
	contact_office varchar(15),
	FOREIGN KEY(event_id) REFERENCES event(event_id)
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

CREATE TABLE event_contactplus(   /* user can add more contact information if he wish to do ..*/
	event_id varchar(50),
	user_info_name	varchar(),
	user_info_value	text,
	FOREIGN KEY(event_id) REFERENCES event(event_id) 
	CREATE INDEX CONCURRENTLY events ON event(event_id)
)

/* offer table required */

CREATE TABLE offers(
	event_id varchar(50)REFERENCES event ON DELETE CASCADE,
	offer_id varchar(30) primary key,
	offer_name varchar(15),
	cost		int,
	currency    varchar(5),
	description  varchar(1500),
	total 	    int 
)

CREATE TABLE Deliverable(
	event_id varchar(50)REFERENCES event ON DELETE CASCADE,
	deliver_id varchar(30) primary key,
	deliverable_name  varchar(30),
	description  varchar(50),
	Deliverable_image text,
	total		int

)

CREATE TABLE offer_deliver(
		offer_id varchar(30)REFERENCES event ON DELETE CASCADE,
		deliver_id varchar(30)REFERENCES event ON DELETE CASCADE,
		quantity  int 
)