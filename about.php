<!--

Project: Todo list web app for SDEV 265 student project
Filename: about.php
Status: Active

-->

<?php

    include_once 'header.php';
?>
        
<section class="main-container">
            
    <div class="main-wrapper">
        
        <br>
        <br>
        <br>
        
        <?php
        
            // Verify's that a user session is in place and welcome's a user if they are logged in.
        
            if (isset($_SESSION['u_id'])) {
                                
               //$currentID = $_SESSION['current'];
                $first = $_SESSION['u_first'];
                echo "<h3>Welcome, $first!</h3>";
            }
        ?>
                
        <h1>About</h1>
        
        <br>
        
        <h4 style="font-size: 2em;">The purpose of this project is to create a basic, working application for a multiuser todo list.  The idea for the application was to simulate a small nonprofit's attempts to digitize their work flow.
            
        <br>
        <br>
            
        The goal was to create an application where a user could: </h4>
        
        <br>
        <br>
        
        <ul>
            
            <li>Login</li>
            <li>Visit the todo list to see what needed done.</li>
            <li>See who added which items.</li>
            <li>See who is working on which items.</li>
            <li>Add a todo list item to the community pool.</li>
            <li>Allow a user to "claim" an item by indicating they are working on an item.</li>
            <li>Allow a user to mark an item they are working on as being complete.</li>
            <li>Visit a history page that would allow a user to see items that have been completed.</li>
        
        </ul>
            
    </div>
        
</section>

<?php

    include_once 'footer.php';
?>