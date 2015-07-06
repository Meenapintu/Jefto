<?PHP
 function pg_prepare_multi_insert($conn, $query,$insert_array)
{
    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {
        die("Can't prepare '$sql': " . pg_last_error());
    }
    $limit = sizeof($insert_array);
    for ($i=0; $i <$limit; $i++)
    { 
        $rs = pg_execute($conn,$sqlName,$insert_array[$i]);
    }
    $sql = sprintf('DEALLOCATE "%s"', pg_escape_string($sqlName));
    if(!pg_query($sql))
    {
        die("Can't query '$sql': " . pg_last_error());
    } 
}


function pg_prepare_single_insert($conn, $query,$insert_array)
{
    $sqlName = 'event_insert_q';
    if (!pg_prepare ($conn,$sqlName, $query))
    {
        die("Can't prepare '$sql': " . pg_last_error());
    }
    $rs = pg_execute($conn,$sqlName,$insert_array);

    $sql = sprintf('DEALLOCATE "%s"',pg_escape_string($sqlName));
    if(!pg_query($sql))
    {
        die("Can't query '$sql': " . pg_last_error());
    }
    if($rs == FALSE){
        echo false;
    }
    else{
        echo true;
    }
}

?>