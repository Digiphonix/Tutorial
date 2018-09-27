<?php
    include("includes/header.php");
?>              
<div class="content"><!-- this is the content div -->
           <form action="book_form.php" method="post">
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
                <td style=" text-align:center;"><input type="text" name="name" style="width:200px"/></td>
            </tr>
            <tr>
                <td>Author</td>
                <td style=" text-align:center"><input type="text" name="author" style="width:200px" /></td>
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
