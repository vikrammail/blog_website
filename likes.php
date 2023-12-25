<?php
        if(isset($_POST['bb'] & $_POST['user'])){


          $memes_id = $_POST['bb'];
          $user = $_POST['user'];
include 'com/conn.php';
$index1 = '';
$like = 1;
$query = "INSERT INTO likes VALUES('$index1','$memes_id','$like','$user')";
$data = mysqli_query($con, $query);
  
        }else{
                header('location:/alogin.php');
        }


?>