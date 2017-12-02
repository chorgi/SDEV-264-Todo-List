<?php

    include 'includes/dbh.inc.php';
        
    $sql = 'SELECT * FROM items WHERE item_is_done = 0';
    $result = mysqli_query($conn, $sql);
            
    while($row = mysqli_fetch_assoc($result)) {
                
        $creator = $row['item_creator'];
        $owner = $row['item_owner'];
        $id = $row['item_id'];

        if (isset($_POST['do_item' . $id])) {

            $update = "UPDATE items SET item_owner = '$currentID' WHERE item_id = '$id';";
            mysqli_query($conn, $update);

            header("Refresh:0");
            
        }  else if(isset($_POST['complete_item' . $id])) {
            
            $update = "UPDATE items SET item_is_done = 1 WHERE item_id = '$id';";
            $date = "UPDATE items SET item_complete_date = now() WHERE item_id = '$id';";
            mysqli_query($conn, $update);
            mysqli_query($conn, $date);

            header("Refresh:0");
        }

        echo '<h4>Item ID:</h4>' . $id . '<br><br>';
        echo '<h4>Item created by:</h4>' . $creator . '<br><br>';
        echo '<h4>Date Added: </h4>' . $row['item_add_date'] . '<br><br>';
        echo '<h4>Item Title: </h4>' . $row['item_title'] . '<br><br>';
        echo '<h4>Description: </h4>' . $row['item_description'] . '<br>';

        if($row['item_owner'] == 'None') {

            echo '<br>';
            echo '<button type="submit" name="do_item' . $id . '" formmethod="POST">Do Item</button>';
            echo '<br>';

        } else if($row['item_owner'] != 'None') {

            echo '<br>';
            echo '<h4>Item is being worked on by: </h4>' . $owner . '<br><br>';
            
            if($owner == $currentID) {
                
                echo '<button type="submit" name="complete_item' . $id . '" formmethod="POST">Complete Item</button>';
                echo '<br>';
            }
        }

        echo '<hr>';  
    }
?>