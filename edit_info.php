<?php
require('config.php');
if(isset($_REQUEST['id'])){
    $getid =  $_REQUEST['id'];
    $sql = "SELECT * FROM users WHERE users_id = $getid";
    $query = mysqli_query($connect,$sql);
    while($info = mysqli_fetch_assoc($query)){
       $id = $info['users_id'];
       $username = $info['users_name'];
       $email = $info['users_email'];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Info</title>
</head>
<body>
<div class="container w-50 mt-5">
<div class="h1 text-center">Edit Info</div>
    <form action="update.php" method="POST">
      <div class="form-group">
      <b>username</b><br>
      <input type="text" class="form-control" value="<?php echo $username?>" name="username" placeholder="username"><br>
      </div>
      <div class="form-group">
      <b>email</b><br>
      <input type="text" class="form-control"  value="<?php echo $email?>" name="email" placeholder="example@gmail.com"><br>
      </div>
      <b>hidden_id</b><br>
      <input type="text" class="form-control" hidden value="<?php echo $id?>" name="hidden_id"><br>
      </div>
      <button type="submit" name="update" class="btn btn-info ">Update</button> click here to see info <a class="text-decoration-none" href="info.php">click</a>
     
    </form>
    </div>
    </body>
</html>