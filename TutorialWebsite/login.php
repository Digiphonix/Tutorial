<?php
    include("includes/header.php");
?>              
<div class="content"><!-- this is the content div -->
   <form action="login_process.php" method="post">
        <table width="500px" style="padding-left: 100px;">
         <?php 
             if(isset($_GET["login"]))
                   {
                        if ($_GET["login"] == "invalid")
                        {
                            echo "<tr colspan=2><td>Invalid Credentials</td></tr>";
                        }
                   }
                   ?>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="submit" style="border-radius:40px; background-color: orange;"></td>
                <td><input type="button" value="Clear All" id="clear" style="border-radius:40px; background-color: orange;"></td>
            </tr>
        </table>
    </form>
         </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
