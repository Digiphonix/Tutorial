<?php
    include("includes/header.php");
    
    function page_no_update($pageno, $max_page_no, $action)
    {       
          if($action == "next" && $pageno < $max_page_no) 
          {
              $pageno = $pageno + 1; 
          } 
          else if($action == "previous" && $pageno >1)
          {
              
              $pageno = $pageno - 1; 
          }
          
          return $pageno;
    }
?>              
<div class="content"><!-- this is the content div -->
    <?php
        if(isset($_SESSION["username"]))
        {
            echo "<p>Welcome $_SESSION[username]</p>";
        }
        
        if( isset($content[1]))  
        {
            if(isset($_GET['pageno']))
            {
                echo $content[$_GET['pageno']][0];
            }
            else
            {
              echo $content[1][0];  
            }
    ?>  
        <table>
            <tr>
                <td>
                      <form action="index.php?chapterid=<?php echo $_GET['chapterid']?>&book=<?php echo $_GET['book']?>&bookid=<?php echo $_GET['bookid']?>&pageno=<?php echo page_no_update($_GET['pageno'],count($content) - 1,"previous"); ?>" method="post">
                
                <input type="submit" name="previous" value="PREVIOUS">
            </form>
                </td>
                <td style="padding-left: 300px;">
                     <form action="index.php?chapterid=<?php echo $_GET['chapterid']?>&book=<?php echo $_GET['book']?>&bookid=<?php echo $_GET['bookid']?>&pageno=<?php echo page_no_update($_GET['pageno'],count($content) - 1,"next"); ?>" method="post">
                
                <input type="submit" name="next" value="NEXT">
            </form>
                </td>
            </tr>
        </table>
    <?php
        
        }
        else
        {
            echo "Welcome to <b>Contoso Library</b>. The world of learning and education. Where there are different books at your disposal for you to read and understand.
             
             <img src='images 2/7.JPG' width='500px' alt=''> 
       Learning made easy.
       The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            The world of learning and education. Where there are different books at your disposal for you to read and understand.
            
            ";
        
        
        }
    ?>
   
     
                                                                                     
    </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
