<?php
$connect = mysqli_connect("localhost","root","311098abc","signup");
if (!$connect) {
die('Gagal terhubung ke MySQL: '.mysqli_connect_error());
}
?>