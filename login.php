<?php 
/* Main page with two forms: sign up and log in */
require 'admin/connect.php';
session_start();
?>
<?php include('login-action.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>LogIn</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="form">
      
      

         <div id="login"> 
          <center><a href="index.php"><img src="img/Untitled.png" width="150"></a> </center>
         <h1> Cloud Music</h1>
          
          <form action="login-action.php" method="post" >
          <?php include('errors.php'); ?>
            <div class="field-wrap">
            
            <input type="email" placeholder="email"  name="email"/>
          </div>
          
          <div class="field-wrap">
            
            <input type="password" placeholder="password"  name="pass"/>
          </div>        
          <button class="button button-block" name="submit" />LOGIN</button>
          
          </form>

        </div><br><br>
          <ul class="tab-group">
       <li class="tab "><a href="registration.php">REGISTER</a></li>
        <li class="tab active"><a href="login.php">LOGIN</a></li>
      </ul>
        
        
      
</div> <!-- /form -->

</body>
</html>
