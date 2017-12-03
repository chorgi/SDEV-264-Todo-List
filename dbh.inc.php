<?php

     /*
    
        Project: Todo list web app for SDEV 265 student project
        Filename: dbh.inc.php
        Status: Active
    
    */

    // This file creates the database connection

    $dbServername = "localhost";

    /*

    // Database connect for local server
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem"; 
    
    */
    
    // Database connect for live web server.
    $dbUsername = "joshivy";
    $dbPassword = "ivytech";
    $dbName = "todo_list";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    /* check connection */
    if (mysqli_connect_errno()) {
        
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }