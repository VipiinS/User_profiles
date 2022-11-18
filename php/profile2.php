<?php
    echo "hey from php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $user;
    $con = mysqli_connect("localhost","root","","guvi");

    $query = mysqli_query($con,"UPDATE `users` 
    SET `password`='$pass'
    WHERE username = '$user';")

?>