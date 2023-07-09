<?php 
require('config.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users(users_name,users_email,users_password) 
         VALUES ('$username','$email','$password')";
  $query = mysqli_query($connect, $sql);
  if ($query) {header('Location:info.php');
 }
}

  ?>