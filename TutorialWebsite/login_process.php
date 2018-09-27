<?php
    session_start();
    
    require_once("includes/connection.php");
    
  //get the valued inputed by the client who is browsing or trying to login
  $supply_username = $_POST["username"];
  $supply_password = $_POST["password"];
  
  //admin query
  $admin_query = "SELECT * FROM admin ";
  $admin_query .= "WHERE Username='$supply_username' AND ";
  $admin_query .= "Password='$supply_password'";
  
  
  $admin_result =  mysql_query($admin_query, $connection);
  
  if(!$admin_result)
  {
      //invalid query
      die("Database query failed :" . mysql_errno());
  }
  else  //test for login
  {
      if($row = mysql_fetch_array($admin_result))
      {
          //valid admin login
      $_SESSION["username"] =  $supply_username;
      $_SESSION["user"]   = "Admin";
      
      //redirect to the admin portal
       header("Location: admin/index.php");
      }
       else
              {
                  //invalid login for all
                   header("Location: login.php?login=invalid");
              }
  }
     
  //admin login
  /*if($supply_username == $valid_loging[0] && $supply_password == $valid_loging[1])
  {
      //the admin is valid or the person trying to login as an admin is truly the admin
      $_SESSION["username"] =  $supply_username;
      $_SESSION["user"]   = "Admin";
      
      //redirect to the admin portal
       header("Location: admin/index.php");
  }
  //student login
  else if($supply_username == $valid_loging[2] && $supply_password == $valid_loging[3])
  {
    //the student is valid or the person trying tog login as a studnt is truly the student
     $_SESSION["username"] =  $supply_username;
      $_SESSION["user"]   = "student";  
      
      //redirect to the student portal
       header("Location: student/index.php");
  }
  //teacher login
  else if($supply_username == $valid_loging[4] && $supply_password == $valid_loging[5])
  {
      //the teacher is valid or the person trying to login as a teacher is truly the teacher
       $_SESSION["username"] =  $supply_username;
      $_SESSION["user"]   = "teacher";
      
      //redirect to the teacher portal
       header("Location: teacher/index.php");
  } 
  else
  {
      //inlalid login
      header("Location: login.php?login=invalid");
  }
  */
?>
