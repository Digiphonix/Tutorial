<?php
    include("includes/header.php");
    include("includes/connection.php");  
    
    $query = "SELECT * FROM chapters";
    
    $chapter_result = mysql_query($query, $connection);
    
    if(!$chapter_result)
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
                           <td>BookId</td>
                           <td>Chapter</td>          
                           <td>Arrange</td>
                           <td>Visible</td> 
                           <td>Edit</td> 
                           <td>Delete</td> 
                           <td>Add Page</td>  
                      </tr>";
                 while($chapters = mysql_fetch_array($chapter_result))
                 {
                     echo "<tr>
                     <td>$chapters[BookId]</td>
                     <td>$chapters[Chapter]</td>
                     <td>$chapters[Arrange]</td>
                     <td>$chapters[Visible]</td>
                     <td><a href ='EditChapter.php?bookid=$chapters[BookId]&id=$chapters[Id]'>Update</a></td>
                     <td><a href ='DeleteChapter.php?id=$chapters[Id]'>Delete</a></td>
                     <td><a href ='RegisterPages.php?id=$chapters[Id]'>Add Page</a></td>
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
