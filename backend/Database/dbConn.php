<?php

    //header functions

    //Database credentials

    $host="localhost";
    $username="root";
    $password="";
    $databaseName="Seat-Booking-Database";

    //Database Connect

    $dbConn=mysqli_connect($host,$username,$password,$databaseName);


    //Error check

    if(!$dbConn){
        die("Connection Failed".mysqli_connect_error());
    }

?>

