<?php
require('config.php');

$sql = "SELECT * FROM users";
$query = mysqli_query($connect,$sql);

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
    <div class="container table-responsive  w-75 ">
        <table class="table table-borderd mt-5 text-center table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
            </thead>
<?php
while($info =mysqli_fetch_assoc($query)){
    $username = $info['users_name'];
    $email = $info['users_email'];
    $id = $info['users_id'];

?>
<tbody >
<tr>

    <td><?php echo $id?></td>
    <td><?php echo $username?></td>
    <td><?php echo $email?></td>
    <td><button type="button" class="btn btn-danger  btn-sm px-2"><a class="link-dark text-decoration-none fs-6" href="delete.php?id=<?php echo $id?>">DELETE</a></button>  <button type="button" class="btn btn-info btn-sm px-3"><a class="link-dark text-decoration-none fs-6"  href="edit_info.php?id=<?php echo $id?>">EDIT</a></button></td>
</tr>
</tbody>
  
<?php   
}

?>
</table>
<div class="container w-50 mt-5">
<div class="h1 text-center">Add Info</div>
    <form action="add_info.php" method="POST">
      <div class="form-group">
      <b>username</b><br>
      <input type="text" class="form-control" name="username" placeholder="username."><br>
      </div>
      <div class="form-group">
      <b>email</b><br>
      <input type="text" class="form-control" name="email" placeholder="example@gmail.com"><br>
      </div>
      <div class="form-group">
      <b>password</b><br>
      <input type="text" class="form-control" name="password" placeholder="password"><br>
      </div>
      <button type="submit" name="submit" class="btn btn-info ">Submit</button>
    </form>
    </div>
    </body>
</html>