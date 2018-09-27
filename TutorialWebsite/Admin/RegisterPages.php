<?php
    include("includes/header.php");
    include("includes/connection.php");  

    if(isset($_GET['id']))
    {
        $query = "SELECT * FROM pages WHERE ChapterId = $_GET[id]";
        
        $page_result = mysql_query($query, $connection);
        
         if(!$page_result)
        {
            die("Database Query Error :" . mysql_errno());
        }
        else
        {
            //the query run successfully and book_result have all the books
            $number_of_pages = mysql_num_rows($page_result);
        }
    }
    
    
    
   
?>              
<div class="content"><!-- this is the content div -->
           <form action="RegisterPageProcessing.php?id=<?php echo $_GET['id'] ?>" method="post">
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
                       for($counter = 0; $counter <= + 1; $counter++)
                       {
                           echo "<option>$counter</option>";
                       }
                   ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Content</td>
                <td style=" text-align:center;"><textarea cols="22" rows="6" name="content"></textarea></td>
            </tr>
        
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="SUBMIT HERE" /></td>
            </tr>
        </table>
        </form>
              </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
