<?php
//   echo "hello from php";
  $user = $_POST['user'];
  $pass = $_POST['pass'];
//connecting to db
  $con = mysqli_connect("localhost","root","","guvi");

  //Did not use prepared SQL statement for this... 
  $query = mysqli_query($con,"SELECT `id` FROM `users` WHERE `username`='$user' AND `password`= '$pass'");
  $num = mysqli_num_rows($query);

  if(!$user & !$pass){
    echo"<p style='background-color:red; color:white;'>All fields are required</p>";
}
else
    if(!$user){
        echo"<p style='background-color:red; color:white;'>Username Required</p>";
    }
    else 
        if(!$pass){
            echo "<p style='background-color:red; color:white;'>Password required</p>";
        }
    else
        if($num == 0)
        {
            echo "<p style='background-color:red; color:white;'>Incorrect credentials</p>";
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