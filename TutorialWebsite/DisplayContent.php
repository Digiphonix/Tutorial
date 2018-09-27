<?php
    include("includes/header.php");
    include("includes/connection.php");
?>              
<div class="content"><!-- this is the content div -->
    <?php
        if(isset($_SESSION["username"]))
        {
            echo "<p>Welcome $_SESSION[username]</p>";
        }
    ?>
    <?php
         $content_query = "SELECT * FROM page WHERE Content=$_GET[id] ";
          
      $content_result = mysql_query($content_query, $connection);
  
  if(!$content_result)
  {
      echo "Database Eroor: " . mysql_errno();
  }
  else
  {
      //query is successful
     
  }
      
         ?>     
              </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
