<?php
    include("includes/header.php");
    include("includes/connection.php");  
    
    $query = "SELECT * FROM Chapters";
    
    $book_result = mysql_query($query, $connection);
    
    if(!$book_result)
    {
        die("Database Query Error :" . mysql_errno());
    }
    else
    {
        //the query run successfully and book_result have all the books
    }
?>              
<div class="content"><!-- this is the content div -->
    <?php
        if(isset($_SESSION["username"]))
        {
            echo "<p>Welcome $_SESSION[username]</p>";
        }
    ?>
     <?php
     while($Chapter = mysql_fetch_array($book_result))
                 {
                     
                     echo "<tr>
                     <td>$Chapter[BookId]</td>
                     <td>$Chapter[Title]</td>
                     <td>$Chapter[Arrange]</td> 
                     <td><a href='#'> READ</a></td>  <br>            
                     </tr>" ;  
                 }
     ?>
         
              </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
