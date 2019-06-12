<?php

$dbhost="localhost";
$dbusername="id9865710_creditdatabase";
$dbpassword="sherusharma";
$dbname="id9865710_creditmanager";

$conn= new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if($conn == NULL){
    echo "connection failed";
}


?>