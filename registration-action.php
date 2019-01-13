<?php
include 'connect.php';
?>

<?php
$errors = array(); 

if (isset($_POST['submit'])) {
  $first = mysqli_real_escape_string($connect, $_POST['awal']);
  $last = mysqli_real_escape_string($connect, $_POST['akhir']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $password1 = mysqli_real_escape_string($connect, $_POST['password1']);

  if (empty($first)) { array_push($errors, "Jeneng Ngarep Bos"); }
  if (empty($last)) { array_push($errors, "Jeneng Akhir Bos"); }
  if (empty($password)) { array_push($errors, "Password e Bos"); }
  if (empty($password1)) { array_push($errors, "Konfirm Password e Bos"); }
  if (empty($email)) { array_push($errors, "Email e Bos"); }

  $user_check_query = "SELECT * FROM register WHERE nama_awal='$first' AND nama_akhir='$last' LIMIT 1";
  $result = mysqli_query($connect, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['nama_awal'] === $first) {
      array_push($errors, "Username already exists");
    }
    if ($user['nama_akhir'] === $last) {
      array_push($errors, "Username already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "INSERT INTO register (email, pass, nama_awal, nama_akhir) 
  			  VALUES('$email', '$password', '$first', '$last')";
  	mysqli_query($connect, $query);
  	header('location: login.php');
  }
}
?>