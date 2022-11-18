<?php
  echo "hello from php";
  $user = $_POST['user'];
  $pass = $_POST['pass'];
//connecting to db
  $con = mysqli_connect("localhost","root","","guvi");
  $query = mysqli_query($con,"SELECT `id` FROM `users` WHERE `username`='$user' AND `password`= '$pass'");
  $num = mysqli_num_rows($query);

  if(!$user & !$pass){
    echo "All fields need";
}
else
    if(!$user){
        echo "Username required";
    }
    else 
        if(!$pass){
            echo "password required";
        }
    else
        if($num == 0)
        {
            echo "Incorrent credentials";
        }
        else
        {
            
            session_start();
            $fetch = mysqli_fetch_assoc($query);
            $id = $fetch['id'];
            $_SESSION['id'] = $id;

            echo "<script> window.location.href='profile.php'; </script>";
            
            // echo "Success"; 
        }

?>