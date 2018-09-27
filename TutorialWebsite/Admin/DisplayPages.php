<?php
    include("includes/header.php");
    include("includes/connection.php");  
    
    $query = "SELECT * FROM pages";
    
    $page_result = mysql_query($query, $connection);
    
    if(!$page_result)
    {
        die("Database Query Error :" . mysql_errno());
    }
    else
    {
        //the query run successfully and book_result have all the books
    }
?>  
          
<div class="content"><!-- this is the content div -->
            <table border="1px">
             <?php
             echo "<table border='1px' width='400px'>" ;
                      echo "
                      <tr>
                           <td>ChapterId</td>         
                           <td>Arrange</td>
                           <td>Visible</td> 
                           <td>Edit</td> 
                           <td>Delete</td>  
                      </tr>";
                 while($pages = mysql_fetch_array($page_result))
                 {
                     echo "<tr>
                     <td>$pages[ChapterId]</td>
                     <td>$pages[Arrange]</td>
                     <td>$pages[Visible]</td>
                     <td><a href ='EditPage.php?chapterid=$pages[ChapterId]&id=$pages[Id]'>Update</a></td>
                     <td><a href ='DeletePage.php?id=$pages[Id]'>Delete</a></td>
                     </tr>";
                 }
             ?>
             </table>
           </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
