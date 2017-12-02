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
        
        <?php
        
            if (isset($_SESSION['u_id'])) {
                                
                //$currentID = $_SESSION['current'];
                $first = $_SESSION['u_first'];
                echo "<h3>Welcome, $first!</h3>";
            }
        ?>
                
        <h1>To-Do List</h1>
                
        <form class="signup-form" action="includes/add_item.inc.php" method="POST">
          
            <input type="text" name="todoTitle" placeholder="What would you like to do?" required>
          
            <br/>
            <br/>
          
            <textarea name="todoDesc" placeholder="Description..." rows="5" cols="53" required></textarea>
          
            <br/>
            <br/>
      
            <button type="submit" name="submit">Add Item</button>
          
        </form>
        
        <hr>
        
        <form class="signup-form" method="post">
        
        <?php
        
            include_once 'includes/update_item.inc.php';
        ?>
            
        </form>
        
    </div>
        
</section>

<?php

    include_once 'footer.php';
?>