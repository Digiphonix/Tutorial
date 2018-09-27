<?php
   $supply_name = $_POST["name"]; 
   $supply_author = $_POST["author"];
  
  
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
  $query = "UPDATE book SET ";
  $query .= "Name ='$supply_name', ";
  $query .= "Author ='$supply_author', ";
  $query .= "Date ='', ";
  $query .= "Visible ='' ";
  $query .= "WHERE Id =$_GET[id]";
  
  $result = mysql_query($query, $connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      //update is successful
      header("Location:DisplayBooks.php?update=true");
  }
  
  //5.close connection to the database
  mysql_close($connection);
?>
