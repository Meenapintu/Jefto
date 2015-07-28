<?PHP
 function pg_prepare_multi_insert($conn, $query,$insert_array)
{
    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {   
         die("We are facing some technical difficulties, please bear with us.");
       // die("Can't prepare '$sql': " . pg_last_error());
    }
    $limit = sizeof($insert_array);
    for ($i=0; $i <$limit; $i++)
    { 
        $rs = pg_execute($conn,$sqlName,$insert_array[$i]);
        if($rs == FALSE){
        //echo"</br> sorry we caught some kind of error! </br>";
       // die("Can't prepare '$sql': " . pg_last_error());
         die("We are facing some technical difficulties, please bear with us.");
        //echo false;
    }
    else{
        //echo "</br>INSERTION DONE</br> ";
        echo true;
    } 
    }
    $sql = sprintf('DEALLOCATE "%s"', pg_escape_string($sqlName));
    if(!pg_query($sql))
    {

         die("We are facing some technical difficulties, please bear with us.");
        //die("Can't query '$sql': " . pg_last_error());
    }
    //echo" add done multi";
    
}


function pg_prepare_single_insert($conn, $query,$insert_array)
{
    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {
         die("We are facing some technical difficulties, please bear with us.");
        //die("Can't prepare '$sql': " . pg_last_error());
    }
    $rs = pg_execute($conn,$sqlName,$insert_array);
    if($rs == FALSE){
        //echo"</br> sorry we caught some kind of error! </br>";
        ////echo"</br> THERE IS ERROR IN INSERT 1 </br>";
        //die("Can't prepare '$sql': " . pg_last_error());
        //echo false;
         die("We are facing some technical difficulties, please bear with us.");
    }
        //echo true;
    //}


    $sql = sprintf('DEALLOCATE "%s"',pg_escape_string($sqlName));
    if(!pg_query($sql))
    {
        //die("Can't query '$sql': " . pg_last_error());
        return false;

    }
    return true;
}


function pg_prepare_single_insert_v1($conn, $query,$insert_array)
{
    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {
         die("We are facing some technical difficulties, please bear with us.");
       // die("Can't prepare '$sql': " . pg_last_error());
    }
    $rs = pg_execute($conn,$sqlName,$insert_array);
    if($rs == FALSE){
        ////echo"</br> THERE IS ERROR IN INSERT 1 </br>";
       // die("Can't prepare '$sql': " . pg_last_error());
         //die("Sorry we caugh an error");
        //echo false;
          die("We are facing some technical difficulties, please bear with us.");
    }
    else{

        $v =pg_fetch_assoc($rs);
         
    }

    $sql = sprintf('DEALLOCATE "%s"',pg_escape_string($sqlName));
    if(!pg_query($sql))
    {
        //die("Can't query '$sql': " . pg_last_error());
        //die("We are facing some technical difficulties, please bear with us.");

    }

    return $v['event_id']; 
}


//=========================select stmt function ======================

//
function pg_prepare_select($conn,$query,$event_id){

    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {
         die("We are facing some technical difficulties, please bear with us.");
        //die("Can't prepare '$sql': " . pg_last_error());
    }
    $rs = pg_execute($conn,$sqlName,$event_id);
    if($rs == FALSE){
         die("We are facing some technical difficulties, please bear with us.");
        ////echo"</br> THERE IS ERROR IN INSERT 1 </br>";
       // die("Can't prepare '$sql': " . pg_last_error());
        //echo false;
    }
    else{

        $v =pg_fetch_all($rs);
         //pg_fetch_all
    }

    $sql = sprintf('DEALLOCATE "%s"',pg_escape_string($sqlName));
    if(!pg_query($sql))
    {
       // die("Can't query '$sql': " . pg_last_error());
        
         die("We are facing some technical difficulties, please bear with us.");
    }
    return $v;
}




?>