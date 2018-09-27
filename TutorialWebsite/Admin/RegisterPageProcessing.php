<?php
    include("includes/header.php");
    include("includes/connection.php");  
    
    $chapterId = $_GET["id"];
    $arrange = $_POST["arrange"];
    $visible = $_POST["visible"];
    $content = $_POST["content"] ;
    
    
   // echo $title. $arrange . $visible. $bookId;
    //3.perform database query
  $query = "INSERT INTO pages(ChapterId, Arrange, Visible, Content) "; 
  $query .= "VALUES('$chapterId','$arrange','$visible','$content')" ;
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      // insert query is successful
      header("Location: RegisterPages.php?insert=true");
  }                                                                                                                                                
  
  //4.Use the returned data
?>
<p><a href="index_3.php?action=1">Home Page</a></p>
    
    /*$query = "SELECT * FROM chapters";
    
    $chapter_result = mysql_query($query, $connection);
    
    if(!$chapter_result)
    {
        die("Database Query Error :" . mysql_errno());
    }
    else
    {
        //the query run successfully and book_result have all the books
        $number_of_chapters = mysql_num_rows($chapter_result);
    } */
?> 