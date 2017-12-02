<?php

    include_once 'header.php';

    if (!isset($_SESSION['u_id'])) {
         
        header("Location: index.php");
        exit();
    }
?>

<section class="main-container">
            
    <div class="main-wrapper">
        
        <br>
        <br>
        <br>
        
        <h2>Completed Items</h2>

        <form class="signup-form">
        
            <?php
        
                include 'includes/dbh.inc.php';
        
                $sql = 'SELECT * FROM items WHERE item_is_done = 1';
                $result = mysqli_query($conn, $sql);
            
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $creator = $row['item_creator'];
                    $owner = $row['item_owner'];
                    $id = $row['item_id'];

                    echo '<h4>Item ID:</h4>' . $id . '<br><br>';
                    echo '<h4>Item created by:</h4>' . $creator . '<br><br>';
                    echo '<h4>Date Added: </h4>' . $row['item_add_date'] . '<br><br>';
                    echo '<h4>Item Title: </h4>' . $row['item_title'] . '<br><br>';
                    echo '<h4>Description: </h4>' . $row['item_description'] . '<br><br>';
                    echo '<h4>Item completed by: </h4>' . $owner . '<br><br>';
                    echo '<h4>Date Completed: </h4>' . $row['item_complete_date'] . '<br><br>';
                    echo '<hr>';
                }
            ?>
            
        </form>
        
    </div>
    
</section>

<?php

    include_once 'footer.php';
?>