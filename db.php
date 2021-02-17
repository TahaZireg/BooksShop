<?php
session_start();
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = "localhost";
$cleardb_username = "root";
$cleardb_password = "";
$cleardb_db = "library";
//$active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
$connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);



	if (!$connection) {
    die("La connexion a échoué: " . mysqli_connect_error()  . "<br/>" );
    
}

function close_bd()
{
    mysqli_close($dbconfig);
}


?>