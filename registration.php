<?php 
require 'admin/connect.php';
session_start();
?>
<?php include ('registration-action.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="form">
      
     
      
      <div class="tab-content">

                   
        <div id="signup"> 
         <center><a href="index.php"><img src="img/Untitled.png" width="150"></a> </center>
          <h1>Connect on Cloud Music</h1>
          
          <form action="registration.php" method="post" >
          <?php include('errors.php'); ?>
          <div class="top-row">
            <div class="field-wrap">
              
              <input type="text" placeholder="First name" name='awal' />
            </div>
        
            <div class="field-wrap">
             
              <input type="text" name='akhir' placeholder="Last name" />
            </div>
          </div>

          <div class="field-wrap">
           
            <input type="email" placeholder="email" name='email' />
          </div>
          
          <div class="field-wrap">
            
            <input type="password" placeholder="Password" name='password'/>
          </div>
          <div class="field-wrap">
            
            <input type="password" placeholder="Retype Password" name='password1'/>
          </div>
          
          <button type="submit" class="button button-block" name="submit" />REGISTER</button>
          
          </form><br><br>
     <ul class="tab-group">
        <li class="tab active"><a href="registration.php">REGISTR</a></li>
        <li class="tab "><a href="login.php">LOGIN</a></li>      </ul>
        </div>  
        
      
</div> <!-- /form -->


</body>
</html>
