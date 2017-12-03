<!--

Project: Todo list web app for SDEV 265 student project
Filename: index.php
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
                
        <h1>SDEV 265 - Software Development Projects</h1>
        <h2>Team 6 - Robert Frank and Joshua Ferrell</h2>
        <h3>To Do List Web Application</h3>
        <h3>Fall 2017</h3>
            
    </div>
        
</section>

<?php

    include_once 'footer.php';
?>