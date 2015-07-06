<?php
//echo $_POST;\
session_start();
$connection_string = "host=localhost  dbname=jefto user=ram password=ramchand";
$conn = pg_connect($connection_string);
if($conn){ echo"done ";}
else echo"there is error";

require_once('phpfunc.php');


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
 echo"we are here";

//if(isset($_POST['category__'],$_POST['genre__'],$_POST['description__'],$_POST['startdate__'],$_POST['enddate__'],$_POST['city__'],$_POST['country__'],$_POST['address__'],$_POST['tags__'],$_POST['scope__'],$_POST['key_numbers__'],$_POST['frequency__'],$_POST['team_description__'],$_POST['budget__'],$_POST['sponsors__'],$_POST['finance_price__'])and $_POST['event_name__']){

	 //$data = htmlspecialchars($data);


        //if( ctype_digit( $_POST['target_audience'] )&&ctype_digit($_POST['age_group']))
        //{

          $target_audience = (int)$_POST['target_audience'];
          $age_group    = (int)$_POST['age_group'];
          echo $target_audience;
          echo "</br>";
          echo $_POST['audience__'][$i];
          echo "</br>";
          //echo $age_group;
        //}
 			$_POST['total_audience_count__'] 	= htmlspecialchars($_POST['total_audience_count__']);
            for ($i=0; $i < $target_audience; $i+=2) { 
                # code...//demographics
                $_POST['audience__'][$i]    = htmlspecialchars($_POST['audience__'][$i]);
                $_POST['audience__'][$i+1]    = htmlspecialchars($_POST['audience__'][$i+1]);
            }
            //$_POST['audience__'] 	= htmlspecialchars($_POST['category__']);
            //var age_group = new Array("12 below ", "12-18 Years old","18-25 Years old"," 25-40 Years old","40-65 Years old","65 above");
            //$arrayName = array('' => , );
           // $age_up = array('' => , );
            $age_limit = array();
            for ($i=0; $i <$age_group ; $i+=2) { 
                # code... audience_age
                if(substr($_POST['age_range__'][$i],0,2)=='11'){
                    array_push($age_limit,0,11);
                    //$age_limit[$i] =0;
                    //$age_limit[$i+1]=11;
                }
                elseif (substr($_POST['age_range__'][$i],0,2)=='12') {
                    //$age_limit[$i] =12;
                    //$age_limit[$i+1]=18;
                    array_push($age_limit,12,18);
                  }  
                elseif (substr($_POST['age_range__'][$i],0,2)=='18') {
                    //$age_limit[$i] =18;
                    //$age_limit[$i+1]=25;
                    array_push($age_limit,18,25);
                  } 
                elseif (substr($_POST['age_range__'][$i],0,2)=='25') {
                    //$age_limit[$i] =25;
                    //$age_limit[$i+1]=40;
                    array_push($age_limit,25,40);
                  }
                elseif (substr($_POST['age_range__'][$i],0,2)=='40') {
                    //$age_limit[$i] =40;
                    //$age_limit[$i+1]=65;
                    array_push($age_limit,40,65);
                  } 
                elseif (substr($_POST['age_range__'][$i],0,2)=='65') {
                    //$age_limit[$i] =65;
                    //$age_limit[$i+1]=100;
                    array_push($age_limit,65,100);
                  } 
                $_POST['age_range__'][$i+1]       = htmlspecialchars($_POST['age_range__'][$i+1]);
            }
            $_POST['gender_ratio__'] = htmlspecialchars($_POST['gender_ratio__']);
            $_POST['edu_background__']	= htmlspecialchars($_POST['edu_background__']);
            $_POST['profession__'] 	= htmlspecialchars($_POST['profession__']);
            $_POST['income_level__'] 		= htmlspecialchars($_POST['income_level__']);
            $_POST['audience_description__'] 	= htmlspecialchars($_POST['audience_description__']);
	echo "</br>";
          echo $_POST['audience__'][$i];
          echo "</br>";
    if(get_magic_quotes_gpc()){

            $_POST['total_audience_count__'] 	= stripslashes($_POST['total_audience_count__']);
            
            for ($i=0; $i < $target_audience; $i+=2) { 
            $_POST['audience__'][$i]	= stripslashes($_POST['audience__'][$i]);
            $_POST['audience__'][$i+1]    = stripslashes($_POST['audience__'][$i+1]);
            }
            for ($i=0; $i <$age_group ; $i++) {
            //$_POST['age_range__'][$i]		= stripslashes($_POST['age_range__'][$i]);
            $_POST['age_range__'][$i+1]       = stripslashes($_POST['age_range__'][$i+1]);
            }
            
            $_POST['gender_ratio__'] = stripslashes($_POST['gender_ratio__']);
            
            $_POST['edu_background__'] 	= stripslashes($_POST['edu_background__']);
            $_POST['profession__'] 	= stripslashes($_POST['profession__']);
            $_POST['income_level__'] 		= stripslashes($_POST['income_level__']);
            
            $_POST['audience_description__'] 	= stripslashes($_POST['audience_description__']);
        }



echo "</br>";
          echo $_POST['audience__'][$i];
          echo "</br>";
            //eventplus audience_age , //audience_demographics 
        	    $event_id = $_SESSION["event_id"];
                $logo  = $_SESSION["logo"];
                echo $logo;
                $currency = $_SESSION["currency"];

        		$total_audience = (int)$_POST['total_audience_count__'];
        		$gender_ratio = (int)$_POST['gender_ratio__'];
        		$audience_description 	  = pg_escape_string($_POST['audience_description__']);
            $query = "insert INTO eventplus(event_id,logo,currency,total_audience,gender_ratio,audience_description)VALUES($1,$2,$3,$4,$5,$6)";
            $insert_array = array($event_id,$logo,$currency,$total_audience,$gender_ratio,$audience_description);
            pg_prepare_single_insert($conn, $query,$insert_array);


                 echo"we are here";
        	   $query = "INSERT INTO demographics(event_id,type_name,type_count)VALUES ($1,$2,$3)";
               $insert_array = array();
            for ($i=0; $i < $target_audience; $i+=2) {
                    $type_name =pg_escape_string($_POST['audience__'][$i]);
                    $type_count =(int)$_POST['audience__'][$i+1];
                //$query .= "($1,$2,$3),";
                $sub_insert = array($event_id,$type_name,$type_count);
                array_push($insert_array,$sub_insert);
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            // $query = substr($query,0,-1);
            /* $sqlName = 'event_insert_q';
             if (!pg_prepare ($conn,$sqlName, $query)) {
             die("Can't prepare '$sql': " . pg_last_error());
             }
             $limit = sizeof($insert_array);
             for ($i=0; $i <$limit; $i++) { 
                 $rs = pg_execute($conn,$sqlName,$insert_array[$i]);
             }
              $sql = sprintf(
                'DEALLOCATE "%s"',
                pg_escape_string($sqlName)
              );
              if(!pg_query($sql)) {
                die("Can't query '$sql': " . pg_last_error());
              }*/
            // echo $query;

            //execute_query($conn,$query);
            //$type_name =pg_escape_string($_POST['audience__'][$i]);
            //$type_count =pg_escape_string($_POST['audience__'][$i+1]);
            //$query+= "('".$event_id."','".$type_name."','".$type_count."')";
               echo"we are here";
              // unset($insert_array);
              $insert_array = array();
               echo"we are here";
            $query = "INSERT INTO age_group(event_id,low_age,up_age,ratio)VALUES($1,$2,$3,$4)";
             echo"we are here";
              for ($i=0; $i < $age_group; $i+=2) { 
                   // $age_low ;
                    //$age_up;
                $ratio =  (int)$_POST['age_range__'][$i+1];
                $sub_insert = array($event_id,$age_limit[$i],$age_limit[$i+1],$ratio);
                array_push($insert_array,$sub_insert);
            }
            pg_prepare_multi_insert($conn, $query,$insert_array);
            /*$sqlName = 'event_insert_q';
             if (!pg_prepare ($conn,$sqlName, $query)) {
             die("Can't prepare '$sql': " . pg_last_error());
             }
             $limit = sizeof($insert_array);
             for ($i=0; $i <$limit; $i++) { 
                 $rs = pg_execute($conn,$sqlName,$insert_array[$i]);
             }
              $sql = sprintf(
                'DEALLOCATE "%s"',
                pg_escape_string($sqlName)
              );
              if(!pg_query($sql)) {
                die("Can't query '$sql': " . pg_last_error());
              } */
               echo"we are here";
             //$query = substr($query,0,-1);
            // echo $query;
            //execute_query($conn,$query);
            //$ratio =  pg_escape_string($_POST['age_range__'][$i+1] );
            //$query+= "('".$event_id."','".$age_limit[$i]."','".$age_limit[$i+1]."','".$ratio."')";
            function insert_arr_psql($conn,$event_id,$values,$type_name){
                $exp_value = explode("_&&&_ ", $values);
                $insert_array = array();
                $query = "INSERT INTO audience_demographics(event_id,type_name,type_value)VALUES($1,$2,$3)";
                foreach ($exp_value as $key => $value) {
                    $sub_insert = array($event_id,$type_name,$value);
                    array_push($insert_array,$sub_insert);
                }
                //$query = substr($query,0,-1);
             //return $query;
            pg_prepare_multi_insert($conn, $query,$insert_array);
            /*$sqlName = 'event_insert_q';
             if (!pg_prepare ($conn,$sqlName, $query)) {
             die("Can't prepare '$sql': " . pg_last_error());
             }
             $limit = sizeof($insert_array);
             for ($i=0; $i <$limit; $i++) { 
                 $rs = pg_execute($conn,$sqlName,$insert_array[$i]);
             }
              $sql = sprintf(
                'DEALLOCATE "%s"',
                pg_escape_string($sqlName)
              );
              if(!pg_query($sql)) {
                die("Can't query '$sql': " . pg_last_error());
              } */
               // echo "</br>";
               // echo $query;
                //echo "</br>";
            }
            echo"we are here";
                 //$query);
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['edu_background__']),"edu_background");
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['profession__']),"profession");
                insert_arr_psql($conn,$event_id,pg_escape_string($_POST['income_level__']),"income_level");

                       
            echo"</br>";
            echo "everything working ";
            echo"</br>";
//}


?>