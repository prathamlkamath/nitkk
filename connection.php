<?php

    $database= new mysqli("localhost:3307","root","","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>