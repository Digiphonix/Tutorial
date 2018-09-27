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
              $query = "SELECT * FROM pages WHERE Id =$_GET[id] AND ChapterId = $_GET[chapterid] ";
              
              $pages_result = mysql_query("SELECT * FROM pages WHERE ChapterId = $_GET[chapterid]",$connection);
              
              $result = mysql_query($query,$connection);
              if(!$result)
              {
                 die("Database query Failed :". mysql_errno());  
              }
              $pages = mysql_fetch_array($result);                               
              
              $number_of_pages = mysql_num_rows($pages_result);
  ?>
  
        <form action="UpdatePage.php?id=<?php echo $_GET['id']; ?>" method="post">
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
                <td>ChapterId</td>
                <td style=" text-align:center;">
                <input type="text" name="chapterid" value="<?php echo $pages['ChapterId']; ?>" style="width:200px"/>
                </td>
            </tr>
             <tr>
                <td>Arrange</td>
                <td style=" text-align:center">
                <select name="arrange" style="width:200px" />
                   <?php
                       for($counter = 1; $counter <= $number_of_pages + 1; $counter++)
                       {
                           echo "<option>$counter</option>";
                       }
                   ?>
                </select>
                </td>
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
                <td>Content</td>
                <td style="text-align:center;"><textarea cols="22" rows="6" name="content" ><?php echo $pages['Content']; ?></textarea></td>
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
