<?php

    function display_book($result)
    {
  //4.Use the returned data
  echo "<table border='1px' width='400px'>" ;
  echo "
  <tr>
       <td>Name</td>
       <td>Author</td>          
       <td>Date</td>   
  </tr>";
  while($row = mysql_fetch_array($result))
  {
      /*echo "Name ". $row[1] ."<br>";
      echo "Price ". $row[2] ."<br>";
      echo "Category ". $row[3] ."<br>"; */
      echo "<tr>";
  
      echo "<td>". $row["Name"] ."</td>"  ;  
      echo "<td>". $row["Author"] ."</td>"  ;
      echo "<td>". $row["Date"] ."</td>"  ;
      echo "</tr>";
  }
  echo "</table>" ;
    }
?>
