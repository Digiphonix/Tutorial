      <?php    
            //1.connect to database
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
              $query = "DELETE FROM chapters WHERE Id =$_GET[id] ";
              $result = mysql_query($query,$connection);
              if(!$result)
              {
                 die("Database query Failed :". mysql_errno());  
              }
               else
                  {
                      //update is successful
                      header("Location:DisplayChapter.php?delete=true");
                  }
  ?>