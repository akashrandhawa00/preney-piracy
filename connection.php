<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "3340_project";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
        die("Failed to connect!");
    }
