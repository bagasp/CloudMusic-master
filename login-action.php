<?php
include 'connect.php';

$errors = array(); 

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = mysqli_real_escape_string($connect, $_POST['pass']);
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM register WHERE email='$email' AND pass='$password'";
  	$results = mysqli_query($connect, $query);
  	if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_array($results);
      $_SESSION['username'] = $first;
  	  header('location: musik/form_up.php?');
  	}
      else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>