<?php

    include_once 'header.php';
?>
        
<section class="main-container">
            
    <div class="main-wrapper">
        
        <br>
        <br>
        <br>
        
        <?php
        
            if (isset($_SESSION['u_id'])) {
                                
               //$currentID = $_SESSION['current'];
                $first = $_SESSION['u_first'];
                echo "<h3>Welcome, $first!</h3>";
            }
        ?>
                
        <h1>About</h1>
            
    </div>
        
</section>

<?php

    include_once 'footer.php';
?>