<?php
    include("includes/header.php");
?>              
<div class="content"><!-- this is the content div -->
    <?php
        if(isset($_SESSION["username"]))
        {
            echo "<p>Welcome $_SESSION[username]</p>";
        }
    ?>
              </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
