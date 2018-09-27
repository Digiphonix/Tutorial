 <?php
    include("includes/header.php");
?> 

<div style="float:left; width:500px; padding-left:10px; text-align:justify; "><!-- this is the content div -->
        <?php    //1.connect to database
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
              $query = "SELECT * FROM book WHERE Id =$_GET[id] ";
              $result = mysql_query($query,$connection);
              if(!$result)
              {
                 die("Database query Failed :". mysql_errno());  
              }
              $book = mysql_fetch_array($result);
  ?>
  
        <form action="UpdateBook.php?id=<?php echo $_GET['id']; ?>" method="post">
        <table style=" width:500px; alignment-adjust:central">
           <tr>
            <td colspan="2">
            <?php
                if(isset($_GET['insert']) && $_GET['insert'] == 'true')
                {
                    echo "Record inserted Sucesfully";
                }
            ?>
            </td>
            </tr>
            <tr>
                <td>Name</td>
                <td style=" text-align:center;"><input type="text" name="name" value="<?php echo $book['Name']; ?>" style="width:200px"/></td>
            </tr>
            <tr>
                <td>Author</td>
                <td style=" text-align:center"><input type="text" name="author" value="<?php echo $book['Author']; ?>" style="width:200px" /></td>
            </tr>
            <tr>
                <td>Visible</td>
                <td style=" text-align:center">
                <select name="visible" style="width:200px" />
                   <?php
                       for($counter = 0; $counter <=  + 1;  $counter++)
                       {
                           echo "<option>$counter</option>";
                       }
                   ?>
                </select>
                </td>
            </tr>
        
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="UPDATE" /></td>
            </tr>
        </table>
        </form>
              </div>
      
             <?php
                 include("includes/foter.php")
             ?>
</body>
</html>
