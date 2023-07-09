<?php
require('config.php');
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM users WHERE users_id=$id";
    $query = mysqli_query($connect,$sql);
    if($query){
        header('Location:info.php');
    };

}



?>