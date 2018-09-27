<?php require_once("includes/connection.php"); 

     $query = "SELECT Id,Name FROM book WHERE Visible =0";
     $chapter_result = false;
     $no_of_pages = 0;
     if(isset($_GET["bookid"]))
     {
         $chapter_query = "SELECT Id,Chapter,BookId FROM chapters WHERE BookId=$_GET[bookid] AND Visible=1 ORDER BY Arrange";
          $chapter_result = mysql_query($chapter_query, $connection);  
          }
     if(isset($_GET["chapterid"]))
        {
          $page_query = "SELECT * FROM pages WHERE ChapterId=$_GET[chapterid] AND Visible=1 ORDER BY Arrange";
          $page_result = mysql_query($page_query, $connection);
          
          $no_of_pages = mysql_num_rows($page_result);
     }
     //$chapter_result = null;
     
    $book_result = mysql_query($query, $connection);
    
    
     $content[$no_of_pages][0] = array();
     
    
    if(!$book_result)
    {
        die("Database query failed: " . mysql_errno());
    }
    else
    {
        //sucessful
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contoso University</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

        <div class="box"><!-- this is the box div -->
        
 
        <div class="social_media"> <!-- this is the social media div -->
        
        <span>
        <a href="#"><img src="images 2/Facebook.PNG"></a>
        <a href="#"><img src="images 2/Google.PNG" /></a>
        <a href="#"><img src="images 2/Instagram.PNG"/></a>
        <a href="#"><img src="images 2/Linkedin.PNG"/></a>
        <a href="#"><img src="images 2/Snapchat.PNG"/></a>
        <a href="#"><img src="images 2/Twitter.PNG"/></a>
        <a href="#"><img src="images 2/Whatsapp.PNG"/></a>
        <a href="#"><img src="images 2/YouTube.PNG" /></a>
      </span>
     </div>
       
       <div class="menu"><!-- this is the menu div -->
        
        <ul>
               <li style=""><a href="index.php">Home </a></li>
            <li><a href="#">Course</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li> 
            <li style="padding-left: 400px;"><a href="login.php">Portal</a></li>
         </ul>
           
    </div>
           <div class="navigation"><!-- this is the horizontal navigation div  -->
                   
                <ul>
                    <li><a href="index.php?book=true">Select Book</a>
                    <?php
                        //test whether select book is cliked
                        if(isset($_GET["book"]) && $_GET["book"] == "true" )
                        {
                            //the condition is true i.e the user clicked on select book
                             echo "<ul>";
                             //loop through all the visible books in the database and display it in sub list
                            while($each_book = mysql_fetch_array($book_result))
                            {                            
                                echo "<a href ='index.php?bookid=$each_book[Id]&book=true'><li>$each_book[Name]</a>"; 
                                
                                //test whether a particular book is cliked
                                 if(isset($_GET["bookid"])) 
                                 {
                                      echo "<ul>";
                                       if($each_book["Id"] == $_GET["bookid"])
                                            {  
                                                 ///loop through all the visible chapters  of the selected book and display it in sub sub list
                                                 while($each_chapter = mysql_fetch_array($chapter_result))
                                                 {    
                                                    echo "<a href ='index.php?chapterid=$each_chapter[Id]&book=true&bookid=$_GET[bookid]'><li>$each_chapter[Chapter]</li>";
                                                   
                                                   if(isset($_GET["chapterid"]))
                                                   {
                                                        echo "<ul>";
                                                       //test whether a particular chapter is cliked
                                                         if($each_chapter["Id"] == $_GET["chapterid"])
                                                         {   
                                                             //loop through all the visible pages of the selected book and display it in sub list
                                                             $counter=1;
                                                             while($each_page = mysql_fetch_array($page_result)) 
                                                                {
                                                                    echo "<li><a href='index.php?pageno=$counter&chapterid=$each_chapter[Id]&book=true&bookid=$_GET[bookid]'>
                                                                    $each_page[Arrange]</a></li>";   
                                                                    $content[$counter][0] =  $each_page["Content"];
                                                                    $counter++;
                                                                }   
                                                                
                                                             
                                                         }
                                                          echo "</ul>" ;
                                                         
                                                   }
                                                 }
                                            }
                                     echo  "</ul>";    
                                 } 
                                 echo "</li>";                          
                            }
                            echo  "</ul>";
                        } 
                        
                    ?>
                    </li>
                    
                    
                </ul>
</div>    
