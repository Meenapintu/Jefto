<?php

echo $_POST['event_name__'];
echo $_POST['sponsors__'];

session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if($conn){ echo "done ";}
	else echo " there is error ";


require_once('phpfunc.php');
//if(isset($_POST['category__'],$_POST['genre__'],$_POST['description__'],$_POST['startdate__'],$_POST['enddate__'],$_POST['city__'],$_POST['country__'],$_POST['address__'],$_POST['tags__'],$_POST['scope__'],$_POST['key_numbers__'],$_POST['frequency__'],$_POST['team_description__'],$_POST['budget__'],$_POST['sponsors__'],$_POST['finance_price__'])and $_POST['event_name__']){

	 //$data = htmlspecialchars($data);
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
            //$_POST['tags__'] = stripslashes($_POST['tags__']);
            //foreach ($variable as $key => $value) {
            	# code...
           // }
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
            //$_POST['tags__'] = stripslashes($_POST['tags__']);
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
        		//$gender 	  = pg_escape_string($_POST['']);
        		$team_descritpion 	  = pg_escape_string($_POST['team_description__']);
        		//$currency 	  = pg_escape_string($_POST['curr']);
        		$budget	  = pg_escape_string($_POST['budget__']);
        		$tags 	  = pg_escape_string($_POST['tags__']);
                $pincode  = pg_escape_string($_POST['pincode__']);
                $address  = $address."__".$pincode;
        		$event_id = $name;
                $_SESSION["event_id"] = $event_id;
                $_SESSION["currency"] = pg_escape_string($_POST['currency__']);
        		echo $event_id;
       //$assoc_arr = array("event_id"=>$event_id ,"name"=>$name,"category"=>$category,"genre"=>$genre,"city"=>$city,"address"=>$address,"country"=>$country,"scope"=>$scope,"frequency"=>$frequency,"website"=>$website,"email"=>$email,"organizer"=>$organizer,"start_date"=>$start_date,"end_date"=>$end_date,"link_for_req"=>$link_for_req,"description"=>$description,"team_descritpion"=>$team_descritpion,"budget"=>$budget,"tags"=>$tags);


       	 //$assoc_a = array($event_id ,$name,$category,$genre,$city,$address,$country,$scope,$frequency,$website,$email,$organizer,$start_date,$end_date,$link_for_req,$description,$team_descritpion,$budget,$tags);

//=======================================================================================
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
        

        
            //$user = $_SESSION['username'];
            //$sav = mysql_query('insert into users_ask(unique_id ,username, ask,ask_media,privacy) values ("'.$unique.'", "'.$_SESSION['username'].'","'.$img.'","'.$img.'","public")')or die(mysql_error());
            //$sav = mysql_query('update users_log set profile_pic="'.$img.'"where username="'.$_SESSION['username'].'"')or die(mysql_error());   
       }
   }

//========================================================================================
			//event_id ,name,category,genre,city,address,country,scope,frequency,website,email,organizer,start_date,
			//end_date,link_for_req,description,team_descritpion,budget,tags

			    //$res=  pg_insert($conn, "event", $assoc_arr) or die(pg_errormessage());
       //$json = json_encode($assoc_arr);
       		//$query = "insert into event (event_id,name,category,genre,city,address,country,scope,frequency,website,email,organizer,start_date,end_date,link_for_req,description,team_descritpion,budget,tags) values('".$event_id."','".$name."','".$category."','".$genre."','".$city."','".$address."','".$country."','".$scope."','".$frequency."','".$website."','".$email."','".$organizer."','".$start_date."','".$end_date."','".$link_for_req."','".$description."','".$team_descritpion."','".$budget."','".$tags."')";
       		//values($1,$2,$3,$4,$5,$6,$7,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18,$19)";
                 
                $insert_array = array($event_id,$name,$category,$genre,$city,$address,$country,$scope,$frequency,$website,$email,$organizer,$start_date,$end_date,$link_for_req,$description,$team_descritpion,$budget,$tags);
           
            $query = "insert into event (event_id,name,category,genre,city,address,country,scope,frequency,website,email,organizer,start_date,end_date,link_for_req,description,team_descritpion,budget,tags) values($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18,$19)";
       		
            pg_prepare_single_insert($conn, $query,$insert_array);
            /*$sqlName = 'event_insert_q';
             if (!pg_prepare ($conn,$sqlName, $query)) {
             die("Can't prepare '$sql': " . pg_last_error());
             }
             $rs = pg_execute($conn,$sqlName,$insert_array);
              $sql = sprintf(
                'DEALLOCATE "%s"',
                pg_escape_string($sqlName)
              );
              if(!pg_query($sql)) {
                die("Can't query '$sql': " . pg_last_error());
              }

            echo "</br>";
       		echo $query;
       		echo "</br>";*/
       		//$psql = pg_query($conn, $query) or die(pg_errormessage());
	  // if(!$psql){
	    //  echo pg_last_error($conn);
	   //} else {
	   //   echo "data inserted  successfully\n";
	   //}

//}
echo"done everything";

?>
