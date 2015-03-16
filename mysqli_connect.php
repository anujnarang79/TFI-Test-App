<?php

//this file contains database access info

//this file also establishes a connection with mysql

//and selects the database


//set database access information as constants:

DEFINE('DB_USER','958619');
DEFINE('DB_PASSWORD','d3t1c4!9');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','958619');

//make the connections

$dbc = @mysqli_connect (DB_HOST,DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MYSQL: ' .mysqli_connect_error() );

?>
