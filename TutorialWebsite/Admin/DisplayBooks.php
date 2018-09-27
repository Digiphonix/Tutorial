<?php
    include("includes/header.php");
    include("includes/connection.php");  
    
    $query = "SELECT * FROM book";
    
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
            <table border="1px">
             <?php
              echo "<table border='1px' width='400px'>" ;
                      echo "
                      <tr>
                           <td>Name</td>
                           <td>Author</td>          
                           <td>Date</td>
                           <td>Edit</td>
                           <td>Delete</td>
                           <td>Add Chapter</td>  
                      </tr>";
                 while($book = mysql_fetch_array($book_result))
                 {
                     echo "<tr>
                     <td>$book[Name]</td>
                     <td>$book[Author]</td>
                     <td>$book[Date]</td>
                     <td><a href='EditBooks.php?id=$book[Id]'>Update</a></td>
                     <td><a href='DeleteBook.php?id=$book[Id]'>Delete</a></td>
                     <td><a href ='RegisterChapter.php?id=$book[Id]'>Add Chapter</a></td>
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
