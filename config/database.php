

<?php
//Local Database 
$LOCAL_HOST     = 'localhost'; //127.0.0.1
$LOCAL_DBNAME   = 'app_beta';
$LOCAL_USERNAME = 'postgres';
$LOCAL_PASSWORD = 'unicesmag';
$LOCAL_PORT     = '5432';

//Supabase Dattabase configuration
$SUPA_HOST     = 'aws-1-us-east-1.pooler.supabase.com'; 
$SUPA_DBNAME   = 'postgres';
$SUPA_USERNAME = 'postgres.ecoakcnniljnnyaewegj';
$SUPA_PASSWORD = 'unicesmag2026...';
$SUPA_PORT     = '6543';

$local_data_connection = "
    
    host=$LOCAL_HOST
    dbname=$LOCAL_DBNAME
    user=$LOCAL_USERNAME    
    password=$LOCAL_PASSWORD
    port=$LOCAL_PORT

    ";
$supa_data_connection = "
    
    host=$SUPA_HOST
    dbname=$SUPA_DBNAME
    user=$SUPA_USERNAME
    password=$SUPA_PASSWORD
    port=$SUPA_PORT

    ";

$local_conn = pg_connect($local_data_connection);

if(!$local_conn){
    echo "Error: Unable to connect to database";
    exit();
}else{
    echo " local Success connection !!!";
}

//supa dataconnection
$supa_conn = pg_connect($supa_data_connection);

if(!$supa_conn){
    echo "Error: Unable to connect to database";
    exit();
}else{
    echo "<br>Supa Success connection !!! </br>";
}


?>