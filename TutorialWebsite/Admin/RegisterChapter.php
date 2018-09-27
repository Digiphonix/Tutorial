<?php
    require_once("includes/header.php");
    require_once("includes/connection.php");  
    
    $query = "SELECT * FROM chapters";
    
    $chapter_result = mysql_query($query, $connection);
    
    if(!$chapter_result)
    {
        die("Database Query Error :" . mysql_errno());
    }
    else
    {
        //the query run successfully and book_result have all the books
        $number_of_chapters = mysql_num_rows($chapter_result);
    }
?>              
<div class="content"><!-- this is the content div -->
           <form action="RegisterChapterProcessing.php?id=<?php echo $_GET['id'] ?>" method="post">
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
                <td>Chapter</td>
                <td style=" text-align:center;"><input type="text" name="chapter" style="width:200px"/></td>
            </tr>
            <tr>
                <td>Arrange</td>
                <td style=" text-align:center">
                <select name="arrange" style="width:200px" />
                   <?php
                       for($counter = 1; $counter <= $number_of_chapters + 1; $counter++)
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
