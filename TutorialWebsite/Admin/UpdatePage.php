<?php
   $supply_chapterid = $_POST["chapterid"];
   $supply_arrange = $_POST["arrange"];
   $supply_visible = $_POST["visible"];
   $supply_content = $_POST["content"];
  
   $connection = mysql_connect("localhost","root","");
  if(!$connection)
  {
      die("Database connection failed :". mysql_errno());
  }
  
  //2.select database
  $db_select = mysql_select_db("tutorial", $connection);
  if(!$db_select)
  {
      die("Database selection Failed :". mysql_errno());
  }
  
  //3.perform database query
  $query = "UPDATE pages SET ";
  $query .= "ChapterId ='$supply_chapterid', ";
  $query .= "Arrange ='$supply_arrange', ";
  $query .= "Visible ='$supply_visible', ";
  $query .= "Content ='$supply_content' ";
  $query .= "WHERE Id =$_GET[id]";
  
  $result = mysql_query($query, $connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      //update is successful
      header("Location:DisplayPages.php?update=true");
  }
  
  //5.close connection to the database
  mysql_close($connection);
?>
