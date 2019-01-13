<?php
$errors = array(); 

$connect = mysqli_connect("localhost","root","311098abc","signup");
if (!$connect) {
die('Gagal terhubung ke MySQL: '.mysqli_connect_error());
}

if (isset($_POST['upload'])) {
  $ekstensi_diperbolehkan = array('mp3');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $type = $_FILES['file']['type'];
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'files/'. $nama);
    $query = "INSERT INTO musik (musik) 
          VALUES('$nama')";
    mysqli_query ($connect, $query);
    header('location: form_up.php');

}

?>