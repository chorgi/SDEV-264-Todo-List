<!--

Project: Todo list web app for SDEV 265 student project
Filename: header.php
Status: Active

-->

<?php

    // Ensures active session on all pages. 
    session_start();
?>

<!DOCTYPE HTML>

<html>
    
    <head>
        
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    
    </head>
    
    <body>

        <header>

                    <nav style="position:fixed">

                        <div class="main-wrapper">

                        <?php
                            
                            
                            // Verifies that a user is logged in by ensuring a session is in place.
                            // Shows the nav changes for a logged in user.
                            if (isset($_SESSION['u_id'])) {
                                
                                $currentID = $_SESSION['current'];
                                
                                echo '<ul>

                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="todo.php">To-Do</a></li>
                                        <li><a href="history.php">History</a></li>
                                        <li><a href="about.php">About</a></li>
                                        
                                     </ul>';
                                     
                                echo '<div class="nav-login" style="display: inline;">
                                        
                                    <form action="includes/logout.inc.php" method="POST">

                                        <button type="submit" name="submit">Logout</button>

                                    </form>
                                    
                                </div>';   

                            } else {
                                
                                // Shows the nav for when a user is not logged in.

                                echo '<ul>

                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>

                                    </ul>

                                    <div class="nav-login" style="display: inline;">

                                        <form action="includes/login.inc.php" method="POST">

                                            <input type="text" name="uid" placeholder="Username/email">
                                            <input type="password" name="pwd" placeholder="password">
                                            <button type="submit" name="submit">Login</button>
                                            
                                            <button type="submit" name="submit" formaction="signup.php" style="margin-left: 5em;">Sign Up</button>

                                        </form>
                                        
                                        
                                    
                                    </div>';
                                }
                        ?>

                        </div>

                    </nav>

                </header>