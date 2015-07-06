<?php
//echo $_POST;\
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if($conn){ echo"done ";}
else echo"there is error";
require_once('phpfunc.php');


        echo"<table>";
foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    echo"</table>";
    
function execute_query($conn,$query){
    $psql = pg_query($conn, $query) or die(pg_errormessage());
    if(!$psql){
        echo pg_last_error($conn);
    }
    else{
        echo "data inserted  successfully\n";
    }
}

$i=0;



        //$_POST['gender_ratio__'] = htmlspecialchars($_POST['gender_ratio__']);
        foreach ($_POST['social_media__'] as $key => $value) {
            # code...
            $_POST['social_media__'][$key] = htmlspecialchars($value);
        }

        $_POST['non_media_explorer__'] = htmlspecialchars($_POST['non_media_explorer__']);
        $_POST['tele__'] = htmlspecialchars($_POST['tele__']);
        $_POST['radio__'] = htmlspecialchars($_POST['radio__']);
        $_POST['print__'] = htmlspecialchars($_POST['print__']);
        $_POST['off_line_promo__'] = htmlspecialchars($_POST['off_line_promo__']);
         
        foreach ($_POST['media_name__'] as $key => $value) {
            # code...
            $_POST['media_name__'][$key] = htmlspecialchars($value);
        }  
        //$_POST['currency__'] = htmlspecialchars($_POST['currency__']);
        //======================================
        foreach ($_POST['package___'] as $key => $value) {
            # code...
            $_POST['package___'][$key] = htmlspecialchars($value);
            $_POST['price_package___'][$key] = htmlspecialchars($_POST['price_package___'][$key]);
            $_POST['descritpion_package___'][$key] = htmlspecialchars($_POST['descritpion_package___'][$key]);
            $_POST['pack_number_package___'][$key] = htmlspecialchars($_POST['pack_number_package___'][$key]);
        }

        foreach ($_POST['deliver___'] as $key => $value) {
            # code...
            $_POST['deliver___'][$key] = htmlspecialchars($value);
            $_POST['image_deliver___'][$key] = htmlspecialchars($_POST['image_deliver___'][$key]);
            $_POST['descritpion_deliver___'][$key] = htmlspecialchars($_POST['descritpion_deliver___'][$key]);
           
        }
        //element now 

        foreach ($_POST['element___'] as $key2d => $value2d) {
            # code...
            foreach ($value2d as $key => $value) {
                # code...
                $_POST['element___'][$key2d][$key] = (int)$value;

            }
        }
        //======================================
        $_POST['contact_name__'] = htmlspecialchars($_POST['contact_name__']);
        $_POST['contact_email__'] = htmlspecialchars($_POST['contact_email__']);
        $_POST['contact_mob__'] = htmlspecialchars($_POST['contact_mob__']);
        $_POST['office___'] = htmlspecialchars($_POST['office___']);

        //  TILL HERE WORKING CORRECTLY 


        if(get_magic_quotes_gpc()){

            //online_ profile
            foreach ($_POST['social_media__'] as $key => $value) {
                # code...
                $_POST['social_media__'][$key] = stripslashes($value);
            }
                //off_line promotions
            $_POST['non_media_explorer__'] = stripslashes($_POST['non_media_explorer__']);
            $_POST['tele__'] = stripslashes($_POST['tele__']);
            $_POST['radio__'] = stripslashes($_POST['radio__']);
            $_POST['print__'] = stripslashes($_POST['print__']);
            $_POST['off_line_promo__'] = stripslashes($_POST['off_line_promo__']);
             //on_line promotion
            foreach ($_POST['media_name__'] as $key => $value) {
                # code...
                $_POST['media_name__'][$key] = stripslashes($value);
            }  

            //$_POST['currency__'] = stripslashes($_POST['currency__']);
            //======================================
            foreach ($_POST['package___'] as $key => $value) {
                # code...
                $_POST['package___'][$key] = stripslashes($value);
                $_POST['price_package___'][$key] = stripslashes($_POST['price_package___'][$key]);
                $_POST['descritpion_package___'][$key] = stripslashes($_POST['descritpion_package___'][$key]);
                $_POST['pack_number_package___'][$key] = stripslashes($_POST['pack_number_package___'][$key]);
            }

            foreach ($_POST['deliver___'] as $key => $value) {
                # code...
                $_POST['deliver___'][$key] = stripslashes($value);
                $_POST['image_deliver___'][$key] = stripslashes($_POST['image_deliver___'][$key]);
                $_POST['descritpion_deliver___'][$key] = stripslashes($_POST['descritpion_deliver___'][$key]);
               
            }
            //element now 

            foreach ($_POST['element___'] as $key2d => $value2d) {
                # code...
                foreach ($value2d as $key => $value) {
                    # code...
                    $_POST['element___'][$key2d][$key] = (int)$value;

                }
            }
            //======================================
            //event_contact
            $_POST['contact_name__'] = stripslashes($_POST['contact_name__']);
            $_POST['contact_email__'] = stripslashes($_POST['contact_email__']);
            $_POST['contact_mob__'] = stripslashes($_POST['contact_mob__']);
            $_POST['office___'] = stripslashes($_POST['office___']);
        }

        $event_id = $_SESSION["event_id"];


//===================Now save the data ==================//

        
       /* foreach ($_POST['social_media__'] as $key => $value) {
                # code...
                $_POST['social_media__'][$key] = stripslashes($value);

            }*/
             $insert_array = array();
            $query = "INSERT INTO online_profile(event_id,site_name,link)VALUES($1,$2,$3)";
            $length = sizeof($_POST['social_media__']);
            echo $length;
            for ($i=0; $i <$length; $i+=2) { 
                //echo array($event_id,$_POST['social_media__'][$i],$_POST['social_media__'][$i+1]);
                echo "</br>";
                $sub_insert = array($event_id,$_POST['social_media__'][$i],$_POST['social_media__'][$i+1]);
               //echo $query;
                array_push($insert_array,$sub_insert);
           }
           pg_prepare_multi_insert($conn, $query,$insert_array);
            //$query = substr($query,0,-1);
           // echo $query;

            //execute_query($conn,$query);
                //off_line promotions
            /*$_POST['non_media_explorer__'] = stripslashes($_POST['non_media_explorer__']);
            $_POST['tele__'] = stripslashes($_POST['tele__']);
            $_POST['radio__'] = stripslashes($_POST['radio__']);
            $_POST['print__'] = stripslashes($_POST['print__']);
            $_POST['off_line_promo__'] = stripslashes($_POST['off_line_promo__']);*/
             $insert_array = array();
            $query = "INSERT INTO offlinepromotion(event_id,names,description)VALUES($1,$2,$3)";
            $sub_insert =array($event_id,'Non_media',$_POST['non_media_explorer__']);
            array_push($insert_array,$sub_insert);
            $sub_insert =array($event_id,'television',$_POST['tele__']);
            array_push($insert_array,$sub_insert);
            $sub_insert =array($event_id,'radio',$_POST['radio__']);
            array_push($insert_array,$sub_insert);
            $sub_insert =array($event_id,'print',$_POST['print__']);
            array_push($insert_array,$sub_insert);
            $sub_insert =array($event_id,'offline',$_POST['off_line_promo__']);
            array_push($insert_array,$sub_insert);
             pg_prepare_multi_insert($conn, $query,$insert_array);
             ////execute_query($conn,$query);
            //$exp_value = explode("_&&&_ ", $_POST['offline']);
            //insert_arr_psql($event_id,pg_escape_string($_POST['edu_background__'])edu_background");
             //on_line promotion.
            foreach ($_POST['media_name__'] as $key => $value) {
                # code...
                $_POST['media_name__'][$key] = stripslashes($value);
            }  
                
             $insert_array = array();
            $query = "INSERT INTO onlinepromotion(event_id,site_name,link)VALUES($1,$2,$3)";
            $length = sizeof($_POST['media_name__']);
            for ($i=0; $i <$length; $i=$i+2) { 
                $sub_insert =array($event_id,$_POST['media_name__'][$i],$_POST['media_name__'][$i+1]);
               array_push($insert_array,$sub_insert);
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            //$query = substr($query,0,-1);
            //execute_query($conn,$query);
           // $_POST['currency__'] = stripslashes($_POST['currency__']);
            //======================================
             $insert_array = array();
            $query = "INSERT INTO offers(event_id,offer_name,cost,currency,description,total)VALUES($1,$2,$3,$4,$5,$6)";
            foreach ($_POST['package___'] as $key => $value) {
                # code...
            $sub_insert =array($event_id,$value,(int)$_POST['price_package___'][$key],$_SESSION['currency'],$_POST['descritpion_package___'][$key],(int)$_POST['pack_number_package___'][$key]);
                //$_POST['package___'][$key] = stripslashes();
               // $_POST['price_package___'][$key] = stripslashes($_POST['price_package___'][$key]);
               // $_POST['descritpion_package___'][$key] = stripslashes($_POST['descritpion_package___'][$key]);
                //$_POST['pack_number_package___'][$key] = stripslashes($_POST['pack_number_package___'][$key]);
            array_push($insert_array,$sub_insert);
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            //$query = substr($query,0,-1);
            //execute_query($conn,$query);
             $insert_array = array();
            $query = "INSERT INTO deliverable(event_id,deliverable_name,description,deliverable_image)VALUES($1,$2,$3,$4)";
            foreach ($_POST['deliver___'] as $key => $value) {
                # code...
            $sub_insert =array($event_id,$value,$_POST['descritpion_deliver___'][$key],$_POST['image_deliver___'][$key]);
               // $_POST['deliver___'][$key] = stripslashes($value);
               // $_POST['image_deliver___'][$key] = stripslashes($_POST['image_deliver___'][$key]);
               // $_POST['descritpion_deliver___'][$key] = stripslashes($_POST['descritpion_deliver___'][$key]);
            array_push($insert_array,$sub_insert);
               
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            //$query = substr($query,0,-1);
            //execute_query($conn,$query);
            //element now 
             $insert_array = array();
            $query="INSERT INTO offer_deliver(event_id,offer_name,deliverable_name,quantity)VALUES($1,$2,$3,$4)";
            foreach ($_POST['element___'] as $key2d => $value2d) {
                # code...
                foreach ($value2d as $key => $value) {
                    # code...
                $sub_insert =array($event_id,$key2d,$key,(int)$value);
                   # $_POST['element___'][$key2d][$key] = (int)$value;
                array_push($insert_array,$sub_insert);

                }
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            //$query = substr($query,0,-1);
            //execute_query($conn,$query);
            //======================================
            //event_contact
             //$insert_array = array();
            $query = "INSERT INTO event_contact(event_id,password,contact_name,contact_email,contact_mobile,contact_office)VALUES($1,$2,$3,$4,$5,$6)";
            $insert_array =array($event_id,null,$_POST['contact_name__'],$_POST['contact_email__'],$_POST['contact_mob__'],$_POST['office___']);
             pg_prepare_single_insert($conn, $query,$insert_array);

             
             //execute_query($conn,$query);
           /* $_POST['contact_name__'] = stripslashes($_POST['contact_name__']);
            $_POST['contact_email__'] = stripslashes($_POST['contact_email__']);
            $_POST['contact_mob__'] = stripslashes($_POST['contact_mob__']);
            $_POST['office___'] = stripslashes($_POST['office___']);*/
            


            echo"</br>";
            echo "everything working ";
            echo"</br>";
//}


?>