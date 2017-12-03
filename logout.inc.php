<?php

     /*
    
        Project: Todo list web app for SDEV 265 student project
        Filename: logout.inc.php
        Status: Active
    
    */

    // this file logs a user out and ends the active session

    if (isset($_POST['submit'])) {
        
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }

?>