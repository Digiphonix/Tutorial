<?php
    include("includes/header.php");
?>              
<div class="content"><!-- this is the content div -->


    <h1 align="center" style="color: red;">Contact Us</h1>
   <form action="#" method="post">
        <table width="500px" style="padding-left: 50px;">
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" value="" size="40"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="" size="40"></td>
            </tr>
            <tr>
                <td>Phone No.</td>
                <td><input type="text" name="phoneno" value="" size="40"></td>
            </tr>
              <tr>
                <td>Conmment</td>
                <td><textarea cols="30" rows="8" style="margin-top: 20px;" name="comment"></textarea></td>
            </tr>
            <tr>
                <td style="padding-left: 20px; "><input type="submit" value="SUBMIT" name="submit" style="margin-top: 20px;  border-radius:50px; background-color:orange;"></td>
                
            </tr>
        </table>
    </form>
         </div>
             
             <?php
                 include("includes/foter.php");
             ?>
</body>
</html>
