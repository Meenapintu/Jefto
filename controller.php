<?php
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if($conn){ echo "done ";}
	else echo " there is error ";

require_once('phpfunc.php');
//if(isset($_POST['category__'],$_POST['genre__'],$_POST['description__'],$_POST['startdate__'],$_POST['enddate__'],$_POST['city__'],$_POST['country__'],$_POST['address__'],$_POST['tags__'],$_POST['scope__'],$_POST['key_numbers__'],$_POST['frequency__'],$_POST['team_description__'],$_POST['budget__'],$_POST['sponsors__'],$_POST['finance_price__'])and $_POST['event_name__']){

 			$_POST['event_name__'] 	= htmlspecialchars($_POST['event_name__']);
            $_POST['category__'] 	= htmlspecialchars($_POST['category__']);
            $_POST['genre__'] 		= htmlspecialchars($_POST['genre__']);
            $_POST['description__'] = htmlspecialchars($_POST['description__']);
            $_POST['startdate__']	= htmlspecialchars($_POST['startdate__']);
            $_POST['enddate__'] 	= htmlspecialchars($_POST['enddate__']);
            $_POST['city__'] 		= htmlspecialchars($_POST['city__']);
            $_POST['country__'] 	= htmlspecialchars($_POST['country__']);
            $_POST['address__'] 	= htmlspecialchars($_POST['address__']);
            $_POST['tags__'] 		= htmlspecialchars($_POST['tags__']);
            $_POST['scope__'] 		= htmlspecialchars($_POST['scope__']);
            $_POST['currency__'] = htmlspecialchars($_POST['currency__']);
            $_POST['pincode__'] = htmlspecialchars($_POST['pincode__']);
            $_POST['frequency__'] 	= htmlspecialchars($_POST['frequency__']);
            $_POST['organization__'] = htmlspecialchars($_POST['organization__']);
            $_POST['event_site__']	= htmlspecialchars($_POST['event_site__']);
            $_POST['event_email__'] = htmlspecialchars($_POST['event_email__']);
            $_POST['reg_link__']	= htmlspecialchars($_POST['reg_link__']);
            $_POST['team_description__'] = htmlspecialchars($_POST['team_description__']);
            $_POST['budget__']		= htmlspecialchars($_POST['budget__']);
            $_POST['sponsors__'] 	= htmlspecialchars($_POST['sponsors__']);
            $_POST['finance_price__'] = htmlspecialchars($_POST['finance_price__']);

	if(get_magic_quotes_gpc()){
            $_POST['event_name__'] 	= stripslashes($_POST['event_name__']);
            $_POST['category__']	= stripslashes($_POST['category__']);
            $_POST['genre__']		= stripslashes($_POST['genre__']);
            $_POST['description__'] = stripslashes($_POST['description__']);
            $_POST['startdate__'] 	= stripslashes($_POST['startdate__']);
            $_POST['enddate__'] 	= stripslashes($_POST['enddate__']);
            $_POST['city__'] 		= stripslashes($_POST['city__']);
            $_POST['country__'] 	= stripslashes($_POST['country__']);
            $_POST['address__'] 	= stripslashes($_POST['address__']);
            $_POST['tags__'] 		= stripslashes($_POST['tags__']);
            $_POST['scope__'] 		= stripslashes($_POST['scope__']);
            $_POST['frequency__'] 	= stripslashes($_POST['frequency__']);
            $_POST['organization__'] = stripcslashes($_POST['organization__']);
            $_POST['event_site__']	= stripcslashes($_POST['event_site__']);
            $_POST['event_email__']	= stripcslashes($_POST['event_email__']);
            $_POST['reg_link__']	= stripcslashes($_POST['reg_link__']);
            $_POST['team_description__'] = stripslashes($_POST['team_description__']);
            $_POST['budget__'] 		= stripslashes($_POST['budget__']);
            $_POST['sponsors__'] 	= stripslashes($_POST['sponsors__']);
            $_POST['finance_price__'] = stripslashes($_POST['finance_price__']);
            $_POST['currency__'] = stripslashes($_POST['currency__']);
            $_POST['pincode__'] = stripcslashes($_POST['pincode__']);
        }


        	
        		$name = pg_escape_string($_POST['event_name__']);
        		//$logo image save form condition //
        		$category = pg_escape_string($_POST['category__']);
        		$genre 	  = pg_escape_string($_POST['genre__'])	;
        		$city 	  = pg_escape_string($_POST['city__']);
        		$address 	  = pg_escape_string($_POST['address__']);
        		$country 	  = pg_escape_string($_POST['country__']);
        		$scope 	  = pg_escape_string($_POST['scope__']);
        		$frequency 	  = pg_escape_string($_POST['frequency__']);
        		$website 	  = pg_escape_string($_POST['event_site__']);
        		$email 	  = pg_escape_string($_POST['event_email__']);
        		$organizer 	  = pg_escape_string($_POST['organization__']);
        		$start_date 	  = pg_escape_string($_POST['startdate__']);
        		$end_date 	  = pg_escape_string($_POST['enddate__']);
        		$link_for_req 	  = pg_escape_string($_POST['reg_link__']);
        		$description 	  = pg_escape_string($_POST['description__']);
        		$team_descritpion 	  = pg_escape_string($_POST['team_description__']);
        		$budget	  = pg_escape_string($_POST['budget__']);
        		$tags 	  = pg_escape_string($_POST['tags__']);
                $pincode  = pg_escape_string($_POST['pincode__']);

                $address  = $address."__".$pincode;
        		$event_id = $name;
               
                $_SESSION["currency"] = pg_escape_string($_POST['currency__']);
        		echo $event_id;

if(isset($_FILES['logo__'])){
        $valid_file_extensions = array(".jpg", ".jpeg", ".gif", ".png");
        $file_extension = strrchr($_FILES['logo__']["name"], ".");
       // $event_id
        if (in_array($file_extension, $valid_file_extensions)) {
            $unique = date('YmdHisTU');
            $img = $event_id.$unique.$file_extension;
            //$img->resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
            $pathToImage = "event_logos/$img";
            if(move_uploaded_file($_FILES['logo__']['tmp_name'], $pathToImage)){

            $_SESSION["logo"] = $pathToImage;
           // echo $pathToImage;
             }
             else{
                $_SESSION["logo"] = "event_logos/default_logo.png";
             }
     }
   }        
                 
            $insert_array = array($name,$category,$genre,$city,$address,$country,$scope,$frequency,$website,$email,$organizer,$start_date,$end_date,$link_for_req,$description,$team_descritpion,$budget,$tags);
           
            $query = "insert into event (name,category,genre,city,address,country,scope,frequency,website,email,organizer,start_date,end_date,link_for_req,description,team_descritpion,budget,tags) values($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18)RETURNING event_id";
       		
             $_SESSION["event_id"] = pg_prepare_single_insert_v1($conn, $query,$insert_array);
             echo $_SESSION['event_id'];
            
echo"done everything";

?>
