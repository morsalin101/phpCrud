<?php
require('config.php');

if(isset($_REQUEST['update'])){
   $id = $_REQUEST['hidden_id'];
   $username = $_REQUEST['username'];
   $email   = $_REQUEST['email'];
   $sql = "UPDATE users SET users_name = '$username',users_email = '$email' WHERE users_id=$id";
   $query = mysqli_query($connect,$sql);
  if($query) header('Location:info.php');
}

?>