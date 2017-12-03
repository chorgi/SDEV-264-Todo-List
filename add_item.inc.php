<?php

    /*
    
        Project: Todo list web app for SDEV 265 student project
        Filename: add_item.inc.php
        Status: Active
    
    */

    // this file adds todo list items to the database

    session_start();

     // adds a new item to the todo list 
     if (isset($_POST['submit'])) {
         
         include 'dbh.inc.php';
         
         $title = mysqli_real_escape_string($conn, $_POST['todoTitle']);
         $description = mysqli_real_escape_string($conn, $_POST['todoDesc']);             
         $currentID = $_SESSION['current'];
         
         if (empty($title) || empty($description)) {
            
             exit();
             
         } else {
             
             $sql = "INSERT INTO items (item_creator, item_add_date, item_title, item_description, item_owner, item_is_done, item_complete_date) VALUES ('$currentID', now(), '$title', '$description', 'None', 0, null);";
             mysqli_query($conn, $sql);
             
             header("Location: ../todo.php");
             
             exit();
         }
         
     } else {
         
         exit();
     }