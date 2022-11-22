<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'crud';
  $conn = mysqli_connect($host,$user,$password,$db);
  if($conn){
    //echo "Koneksi berhasil";
  }

  mysqli_select_db($conn,$db); 
?>
