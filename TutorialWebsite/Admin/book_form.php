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
  $query = "INSERT INTO book(Name, Author, Date) "; 
  $query .= "VALUES('$supply_name','$supply_author','')" ;
  $result = mysql_query($query,$connection);
  if(!$result)
  {
     die("Database query Failed :". mysql_errno());  
  }
  else
  {
      // insert query is successful
      header("Location: RegisterBook.php?insert=true");
  }                                                                                                                                                
  
  //4.Use the returned data
?>
<p><a href="index_3.php?action=1">Home Page</a></p>