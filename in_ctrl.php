<?php
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if($conn){}//echo "working on .... ";}
	else echo " there is error ";
require_once("header.php");
require_once('phpfunc.php');

$i=0;
$debug;
echo"<div class='container' style='height:100vh'>";

//if(isset($_POST['event_name__'],$_POST['category__'],$_POST['genre__'],$_POST['startdate__'],$_POST['enddate__'],$_POST['city__'],$_POST['country__'],$_POST['scope__'],$_POST['frequency__'],$_POST['organization__'],$_POST['event_email__'],$_POST['currency__'],$_POST['sponsors__'],$_POST['total_audience_count__'],$_POST['contact_name__'],$_POST['contact_email__'],$_POST['contact_mob__']) )
if(!empty($_POST['event_name__'])&&!empty($_POST['category__'])&&!empty($_POST['genre__'])&&!empty($_POST['startdate__'])&&!empty($_POST['enddate__'])&&!empty($_POST['city__'])&&!empty($_POST['country__'])&&!empty($_POST['scope__'])&&!empty($_POST['frequency__'])&&!empty($_POST['organization__'])&&!empty($_POST['event_email__'])&&!empty($_POST['currency__'])&&!empty($_POST['sponsors__'])&&!empty($_POST['total_audience_count__'])&&!empty($_POST['contact_name__'])&&!empty($_POST['contact_email__'])&&!empty($_POST['contact_mob__']))
{
//=================Form First DATA EXCEPT IMAGE ========================================
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
            $key_numbers = (int)$_POST['key_number'];
            for ($i=0; $i < $key_numbers; $i+=2) { 
                $_POST['key_numbers__'][$i]    = htmlspecialchars($_POST['key_numbers__'][$i]);
            }
//========================Form 2 DATA ============================================================

            $target_audience = (int)$_POST['target_audience'];
            $age_group    = (int)$_POST['age_group'];
            $total_audience = (int)$_POST['total_audience_count__'];
            for ($i=0; $i < $target_audience; $i+=2) { 
                $_POST['audience__'][$i]    = htmlspecialchars($_POST['audience__'][$i]);
            }
            $age_limit = array();
            for ($i=0; $i <$age_group ; $i+=2)
            { 
                if(substr($_POST['age_range__'][$i],0,2)=='11')
                {
                    array_push($age_limit,0,11);
                }
                elseif (substr($_POST['age_range__'][$i],0,2)=='12')
                {
                    array_push($age_limit,12,18);
                }  
                elseif (substr($_POST['age_range__'][$i],0,2)=='18')
                {
                    array_push($age_limit,18,25);
                } 
                elseif (substr($_POST['age_range__'][$i],0,2)=='25')
                {
                    array_push($age_limit,25,40);
                }
                elseif (substr($_POST['age_range__'][$i],0,2)=='40')
                {
                    array_push($age_limit,40,65);
                } 
                elseif (substr($_POST['age_range__'][$i],0,2)=='65')
                {
                    array_push($age_limit,65,100);
                } 
            }
            $_POST['edu_background__']  = htmlspecialchars($_POST['edu_background__']);
            $_POST['profession__']  = htmlspecialchars($_POST['profession__']);
            $_POST['income_level__']        = htmlspecialchars($_POST['income_level__']);
            $_POST['audience_description__']    = htmlspecialchars($_POST['audience_description__']);

//===========================Form 3 data ============================================================

            foreach ($_POST['social_media__'] as $key => $value)
            {
                $_POST['social_media__'][$key] = htmlspecialchars($value);
            }

            $_POST['non_media_explorer__'] = htmlspecialchars($_POST['non_media_explorer__']);
            $_POST['tele__'] = htmlspecialchars($_POST['tele__']);
            $_POST['radio__'] = htmlspecialchars($_POST['radio__']);
            $_POST['print__'] = htmlspecialchars($_POST['print__']);
            // $_POST['off_line_promo__'] = htmlspecialchars($_POST['off_line_promo__']);
            foreach ($_POST['media_name__'] as $key => $value) 
            {
                $_POST['media_name__'][$key] = htmlspecialchars($value);
            }  
            foreach ($_POST['package___'] as $key => $value)
            {
                $_POST['package___'][$key] = htmlspecialchars($value);
                $_POST['price_package___'][$key] = htmlspecialchars($_POST['price_package___'][$key]);
                $_POST['descritpion_package___'][$key] = htmlspecialchars($_POST['descritpion_package___'][$key]);
                $_POST['pack_number_package___'][$key] = htmlspecialchars($_POST['pack_number_package___'][$key]);
            }
            foreach ($_POST['deliver___'] as $key => $value)
            {
                $_POST['deliver___'][$key] = htmlspecialchars($value);
                $_POST['image_deliver___'][$key] = htmlspecialchars($_POST['image_deliver___'][$key]);
                $_POST['descritpion_deliver___'][$key] = htmlspecialchars($_POST['descritpion_deliver___'][$key]);
            }
            foreach ($_POST['element___'] as $key2d => $value2d)
            {
                foreach ($value2d as $key => $value)
                {
                    $_POST['element___'][$key2d][$key] = (int)$value;
                }
            }
            $_POST['contact_name__'] = htmlspecialchars($_POST['contact_name__']);
            $_POST['contact_email__'] = htmlspecialchars($_POST['contact_email__']);
            $_POST['contact_mob__'] = htmlspecialchars($_POST['contact_mob__']);
            $_POST['office___'] = htmlspecialchars($_POST['office___']);


///////////////////////////////////////////////////////////////////////////////////////////////////////



	if(get_magic_quotes_gpc()){

//==================Form First DATA EXCEPT IMAGE ========================================
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
            //$_POST['finance_price__'] = stripslashes($_POST['finance_price__']);
            $_POST['currency__'] = stripslashes($_POST['currency__']);
            $_POST['pincode__'] = stripcslashes($_POST['pincode__']);
            for ($i=0; $i < $key_numbers; $i+=2) 
            { 
                $_POST['key_numbers__'][$i]    = stripcslashes($_POST['key_numbers__'][$i]);
            }

//========================Form 2 DATA ============================================================
             for ($i=0; $i < $target_audience; $i+=2) { 
            $_POST['audience__'][$i]    = stripslashes($_POST['audience__'][$i]);
            }
            $_POST['edu_background__']  = stripslashes($_POST['edu_background__']);
            $_POST['profession__']  = stripslashes($_POST['profession__']);
            $_POST['income_level__']        = stripslashes($_POST['income_level__']);
            $_POST['audience_description__']    = stripslashes($_POST['audience_description__']);

//===========================Form 3 data ============================================================
            foreach ($_POST['social_media__'] as $key => $value)
            {
                $_POST['social_media__'][$key] = stripslashes($value);
            }
            $_POST['non_media_explorer__'] = stripslashes($_POST['non_media_explorer__']);
            $_POST['tele__'] = stripslashes($_POST['tele__']);
            $_POST['radio__'] = stripslashes($_POST['radio__']);
            $_POST['print__'] = stripslashes($_POST['print__']);
            //$_POST['off_line_promo__'] = stripslashes($_POST['off_line_promo__']);
            foreach ($_POST['media_name__'] as $key => $value)
            {
                $_POST['media_name__'][$key] = stripslashes($value);
            }  
            foreach ($_POST['package___'] as $key => $value)
            {
                $_POST['package___'][$key] = stripslashes($value);
                $_POST['price_package___'][$key] = stripslashes($_POST['price_package___'][$key]);
                $_POST['descritpion_package___'][$key] = stripslashes($_POST['descritpion_package___'][$key]);
                $_POST['pack_number_package___'][$key] = stripslashes($_POST['pack_number_package___'][$key]);
            }
            foreach ($_POST['deliver___'] as $key => $value)
            {
                $_POST['deliver___'][$key] = stripslashes($value);
                $_POST['image_deliver___'][$key] = stripslashes($_POST['image_deliver___'][$key]);
                $_POST['descritpion_deliver___'][$key] = stripslashes($_POST['descritpion_deliver___'][$key]);
               
            }
            foreach ($_POST['element___'] as $key2d => $value2d)
            {
                foreach ($value2d as $key => $value)
                {
                    $_POST['element___'][$key2d][$key] = (int)$value;
                }
            }
            $_POST['contact_name__'] = stripslashes($_POST['contact_name__']);
            $_POST['contact_email__'] = stripslashes($_POST['contact_email__']);
            $_POST['contact_mob__'] = stripslashes($_POST['contact_mob__']);
            $_POST['office___'] = stripslashes($_POST['office___']);
        }
///////////////////////////////////////////////////////////////////////////////////////////////////////
//==================Form First DATA Except Image  ========================================
        	
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
        		$budget	  = (int)($_POST['budget__']);
        		$tags 	  = pg_escape_string($_POST['tags__']);
                $pincode  = (int)($_POST['pincode__']);
                $address  = $address."__".$pincode;
                $_SESSION["currency"] = pg_escape_string($_POST['currency__']);
                $insert_array = array($name,$category,$genre,$city,$address,$country,$scope,$frequency,$website,$email,$organizer,$start_date,$end_date,$link_for_req,$description,$team_descritpion,$budget,$tags);
                $query = "insert into event (name,category,genre,city,address,country,scope,frequency,website,email,organizer,start_date,end_date,link_for_req,description,team_descritpion,budget,tags) values($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18)RETURNING event_id";
                $_SESSION["event_id"] = pg_prepare_single_insert_v1($conn, $query,$insert_array);
                $event_id= $_SESSION['event_id'];

            if(isset($_FILES['logo__']))
            {
                $valid_file_extensions = array(".jpg", ".jpeg", ".gif", ".png");
                $file_extension = strrchr($_FILES['logo__']["name"], ".");
                if (in_array($file_extension, $valid_file_extensions))
                {
                    
                    $img = $event_id.$file_extension;
                    //$img->resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
                    $pathToImage = "event_logos/$img";
                    if(move_uploaded_file($_FILES['logo__']['tmp_name'], $pathToImage))
                    {
                        $_SESSION["logo"] = $pathToImage;
                    }
                    else
                    {   
                        $debug = $debug.'cant move to folder';
                        $_SESSION["logo"] = "event_logos/default_logo.png";
                    }
                }
            }
            else
            {
                $debug = $debug.'file not uploaded';
                $_SESSION["logo"] = "event_logos/default_logo.png";
            }

function insert_arr_psql_custom($conn,$event_id,$values)
{
    $exp_value = explode("___", $values);
    $insert_array = array();
    $query = "INSERT INTO sponsorship(event_id,type)VALUES($1,$2)";
    foreach ($exp_value as $value) 
    {
        if($value !='' && $value !='Financial')
        {
            $sub_insert = array($event_id,$value);
            array_push($insert_array,$sub_insert);
        }
        if($value =='Financial')
        {
            $insert_finance = array($event_id,$value,(int)$_POST['finance_price__']);
            $query_ = "INSERT INTO sponsorship_finance(event_id,type,fund)VALUES($1,$2,$3)";
            pg_prepare_single_insert($conn,$query_,$insert_finance);
        }
    }
    pg_prepare_multi_insert($conn, $query,$insert_array);
}

            insert_arr_psql_custom($conn,$event_id,pg_escape_string($_POST['sponsors__']));


            $query = "INSERT INTO key_numbers(event_id,type_name,type_count)VALUES ($1,$2,$3)";
            $insert_array = array();
            for ($i=0; $i < $key_numbers; $i+=2)
            {
                $type_name =pg_escape_string($_POST['key_numbers__'][$i]);
                $type_count =(int)$_POST['key_numbers__'][$i+1];
                if($type_count >0){
                    $sub_insert = array($event_id,$type_name,$type_count);
                    array_push($insert_array,$sub_insert);
                }
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);


            
//========================Form 2 DATA ============================================================
                $logo  = $_SESSION["logo"];
                $currency = $_SESSION["currency"];
                $gender_ratio = (int)$_POST['gender_ratio__'];
                $audience_description     = pg_escape_string($_POST['audience_description__']);
                $query = "insert INTO eventplus(event_id,logo,currency,total_audience,gender_ratio,audience_description)VALUES($1,$2,$3,$4,$5,$6)";
                $insert_array = array($event_id,$logo,$currency,$total_audience,$gender_ratio,$audience_description);
                pg_prepare_single_insert($conn, $query,$insert_array);
                $query = "INSERT INTO demographics(event_id,type_name,type_count)VALUES ($1,$2,$3)";
                $insert_array = array();
                for ($i=0; $i < $target_audience; $i+=2)
                {
                    $type_name =pg_escape_string($_POST['audience__'][$i]);
                    $type_count =(int)$_POST['audience__'][$i+1];
                    if($type_count >0){
                        $sub_insert = array($event_id,$type_name,$type_count);
                        array_push($insert_array,$sub_insert);
                    }
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);

                $insert_array = array();
                $query = "INSERT INTO age_group(event_id,low_age,up_age,ratio)VALUES($1,$2,$3,$4)";
                for ($i=0; $i < $age_group; $i+=2)
                { 
                    $ratio =  (int)$_POST['age_range__'][$i+1];
                    if($ratio>0){
                        $sub_insert = array($event_id,$age_limit[$i],$age_limit[$i+1],$ratio);
                        array_push($insert_array,$sub_insert);
                    }
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);

function insert_arr_psql($conn,$event_id,$values,$type_name)
{
    $exp_value = explode("___", $values);
    $insert_array = array();
    $query = "INSERT INTO audience_demographics(event_id,type_name,type_value)VALUES($1,$2,$3)";
    foreach ($exp_value as $value)
    {
        if($value !='')
        {
            $sub_insert = array($event_id,$type_name,$value);
            array_push($insert_array,$sub_insert);
        }
    }
    pg_prepare_multi_insert($conn, $query,$insert_array);
}
               
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['edu_background__']),"edu_background");
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['profession__']),"profession");
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['income_level__']),"income_level");

                       

//===========================Form 3 data ============================================================
                $insert_array = array();
                $query = "INSERT INTO online_profile(event_id,site_name,link)VALUES($1,$2,$3)";
                $length = sizeof($_POST['social_media__']);
                for ($i=0; $i <$length; $i+=2)
                { 
                    $sub_insert = array($event_id,$_POST['social_media__'][$i],$_POST['social_media__'][$i+1]);
                    array_push($insert_array,$sub_insert);
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                $insert_array = array();
                $query = "INSERT INTO offlinepromotion(event_id,names,description)VALUES($1,$2,$3)";
                $exp_value = explode("___", $_POST['non_media_explorer__']);
                foreach ($exp_value as $value) 
                {
                    if($value !='')
                    {
                        $sub_insert = array($event_id,$value,"No description");
                        array_push($insert_array,$sub_insert);
                    }
                }
                if($_POST['tele__'] !='')
                {
                    $sub_insert =array($event_id,'airplay',$_POST['tele__']);
                    array_push($insert_array,$sub_insert);
                }
                if($_POST['radio__'] !='')
                {
                    $sub_insert =array($event_id,'radio',$_POST['radio__']);
                    array_push($insert_array,$sub_insert);
                }
                if($_POST['print__'] !='')
                {
                    $sub_insert =array($event_id,'Newspaper',$_POST['print__']);
                    array_push($insert_array,$sub_insert);
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                foreach ($_POST['media_name__'] as $key => $value)
                {
                    $_POST['media_name__'][$key] = stripslashes($value);
                }  
                $insert_array = array();
                $query = "INSERT INTO onlinepromotion(event_id,site_name,link)VALUES($1,$2,$3)";
                $length = sizeof($_POST['media_name__']);
                for ($i=0; $i <$length; $i=$i+2)
                { 
                    $sub_insert =array($event_id,$_POST['media_name__'][$i],$_POST['media_name__'][$i+1]);
                    array_push($insert_array,$sub_insert);
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                $insert_array = array();
                $query = "INSERT INTO offers(event_id,offer_id,offer_name,cost,currency,description,total)VALUES($1,$2,$3,$4,$5,$6,$7)";
                foreach ($_POST['package___'] as $key => $value)
                {
                    $sub_insert =array($event_id,(int)$key,$value,(int)$_POST['price_package___'][$key],$_SESSION['currency'],$_POST['descritpion_package___'][$key],(int)$_POST['pack_number_package___'][$key]);
                    array_push($insert_array,$sub_insert);
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                $insert_array = array();
                $query = "INSERT INTO deliverable(event_id,deliverable_id,deliverable_name,description,deliverable_image)VALUES($1,$2,$3,$4,$5)";
                foreach ($_POST['deliver___'] as $key => $value) 
                {
                    $sub_insert =array($event_id,(int)$key,$value,$_POST['descritpion_deliver___'][$key],$_POST['image_deliver___'][$key]);
                    array_push($insert_array,$sub_insert);
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                $insert_array = array();
                $query="INSERT INTO offer_deliver(event_id,offer_id,deliverable_id,quantity)VALUES($1,$2,$3,$4)";
                foreach ($_POST['element___'] as $key2d => $value2d) 
                {
                    foreach ($value2d as $key => $value)
                    {
                        if((int)$value >0)
                        {
                            $sub_insert =array($event_id,(int)$key2d,(int)$key,(int)$value);
                            array_push($insert_array,$sub_insert);
                        }
                    }
                }
                pg_prepare_multi_insert($conn, $query,$insert_array);
                $query = "INSERT INTO event_contact(event_id,password,contact_name,contact_email,contact_mobile,contact_office)VALUES($1,$2,$3,$4,$5,$6)";
                $insert_array =array($event_id,null,$_POST['contact_name__'],$_POST['contact_email__'],$_POST['contact_mob__'],$_POST['office___']);
                pg_prepare_single_insert($conn, $query,$insert_array);

                //===================================================================
                        //$unique = date('YmdHisTU')+;
                            $unique = 1000+($event_id);
                        $query = "INSERT INTO temp_rel(event_id,temp_id)VALUES($1,$2)";
                        $insert_array = array($event_id,$unique);
                        pg_prepare_single_insert($conn, $query,$insert_array);
                //==================================================================

/////////////////////////////////////////////////////////////////////////////////////////////////////
$myfile = fopen("event_logos/debug.txt", "wa+") or die("Unable to open file!");
fwrite($myfile,$debug);
fclose($myfile);

echo "redirecting";
header("Location: http://www.jefto.com/profile.php?e=".$unique);
}

else{
    echo "<div class='row error card-panel' >";
    echo "<div class='col s12 m12 l12  center ' style='background:transparent;color:red;'>";
    echo "Sorry ! we caught an error Field not valid or empty please complete form by going back . Sorry for intrupt but this information is necessary to do next process successfully for you .  <h5>Following field are currepted :</h5> ";
    echo "</div>";
    if(empty($_POST['event_name__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Event Name :  ";
        echo $_POST['event_name__'];
        echo "</h6></div>";
    }
    if(empty($_POST['category__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Category : ";
        echo $_POST['category__'];
        echo "</h6></div>";
    }
    if(empty($_POST['genre__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Genre :";
        echo $_POST['genre__'];
        echo "</h6></div>";
    }
    if(empty($_POST['startdate__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Start Date : ";
        echo $_POST['startdate__'];
        echo "</h6></div>";
    }
    if(empty($_POST['enddate__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> End Date : ";
        echo $_POST['enddate__'];
        echo "</h6></div>";
    }
    if(empty($_POST['city__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> City : ";
        echo $_POST['city__'];
        echo "</h6></div>";
    }
    if(empty($_POST['country__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Country : ";
        echo $_POST['country__'];
        echo "</h6></div>";
    }
    if(empty($_POST['scope__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Scope :  ";
        echo $_POST['scope__'];
        echo "</h6></div>";
    }
    if(empty($_POST['frequency__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6>  Happens Every : ";
        echo $_POST['frequency__'];
        echo "</h6></div>";
    }
    if(empty($_POST['organization__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Organization : ";
        echo $_POST['organization__'];
        echo "</h6></div>";
    }
    if(empty($_POST['event_email__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Event Email : ";
        echo $_POST['event_name__'];
        echo "</h6></div>";
    }
    if(empty($_POST['currency__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Currency :";
        echo $_POST['currency__'];
        echo "</h6></div>";
    }
    if(empty($_POST['sponsors__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6>  Sponsors Needed :";
        echo $_POST['sponsors__'];
        echo "</h6></div>";
    }
    if(empty($_POST['total_audience_count__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Expected Audience : ";
        echo $_POST['total_audience_count__'];
        echo "</h6></div>";
    }
    if(empty($_POST['contact_name__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6>  Contact Name : ";
        echo $_POST['contact_name__'];
        echo "</h6></div>";
    }
    if(empty($_POST['contact_email__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6>  Contact Email :";
        echo $_POST['contact_email__'];
        echo "</h6></div>";
    }
    if(empty($_POST['contact_mob__'])){
        echo "<div class='col s12 m12 l12 err-fname'><h6> Contact Mob : ";
        echo $_POST['contact_mob__'];
        echo "</h6></div>";
    }

    echo "<div class='col s12 m12 l12  center ' style='background:transparent;color:red;'>";
    echo "<button type='button' onclick='goBack()' id='back-b' class='waves-effect waves-light btn-large center' style='align-self:center' ><i class='material-icons left' ><img  src='def_img/back.png' style='height:25px;'/></i> Go Back To Form</button>";
    echo "</div><div class='col s12 m12 l12 card-panel center ' style='background:transparent;color:red;'>";
    echo "Sorry ! we caught an error Field not valid or empty please complete form by going back . Sorry for intrupt but this information is necessary to do next process successfully for you .   Thanks <br>Jefto Team </br> ";
    echo "</div></div></div>";
}

   /*echo$_POST['event_name__'];
    echo$_POST['category__'];
    echo$_POST['genre__'];
    echo$_POST['startdate__'];
    echo$_POST['enddate__'];
    echo$_POST['city__'];
    echo$_POST['country__'];
    echo$_POST['scope__'];
    echo$_POST['frequency__'];
    echo$_POST['organization__'];
    echo$_POST['event_email__'];
    echo$_POST['currency__'];
    echo$_POST['sponsors__'];
    echo$_POST[''];
    echo$_POST['total_audience_count__'];
    echo$_POST['contact_name__']$_POST['contact_email__'];
    echo$_POST['contact_mob__']))*/

require_once("footer.php");
?>
</body>
</html>

<script>
function goBack() {
    window.history.back();
}
</script>
