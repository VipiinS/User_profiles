<?php
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    // echo $user; 
    $con = mysqli_connect("localhost","root","","guvi");

    $query = mysqli_query($con,"UPDATE `users` 
    SET `password`='$pass',
        `gender` = '$gender',
        `age` = '$age',
        `contact` = '$contact'
    WHERE id = '$id';");


    echo "Successfully Updated";

?>