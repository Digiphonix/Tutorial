<?php
   $supply_bookid = $_POST["bookid"]; 
   $supply_chapter = $_POST["chapter"];
   $supply_arrange = $_POST["arrange"];
   $supply_visible = $_POST["visible"];
  
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
  $query = "UPDATE chapters SET ";
  $query .= "BookId ='$supply_bookid', ";
  $query .= "Chapter ='$supply_chapter', ";
  $query .= "Arrange ='$supply_arrange', ";
  $query .= "Visible ='$supply_visible' ";
  $query .= "WHERE Id =$_GET[id]";
  
  $result = mysql_query($query, $connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      //update is successful
      header("Location:DisplayChapter.php?update=true");
  }
  
  //5.close connection to the database
  mysql_close($connection);
?>
