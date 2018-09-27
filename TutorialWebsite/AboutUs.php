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
    Welcome to <b>Contoso Library</b>. The world of learning and education. Where there are different books at your disposal for you to read and understand.
             
             <img src='images 2/Sons.JPG' width='500px' alt=''>    <br>
       Learning made easy.
       The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
   
     
                                                                                     
    </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
