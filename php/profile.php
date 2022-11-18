<?php
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    // echo $user; 
    $con = mysqli_connect("localhost","root","","guvi");

    $stmt = $con->prepare("UPDATE users 
                        SET password = ?,
                                gender = ?,
                                age = ?,
                                contact = ?
                        WHERE id = '$id';");
    
    $stmt->bind_param("ssii",$pass,$gender,$age,$contact);
    $id = mysqli_insert_id($con);
    $stmt->execute();


    echo "<p style='background-color:green; color:white;'>Successfully Updated</p>";

?>