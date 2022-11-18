<?php
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    //establishing connection
    $con = mysqli_connect("localhost","root","","guvi");
    //query template
    $stmt = $con->prepare("UPDATE users 
                        SET password = ?,
                                gender = ?,
                                age = ?,
                                contact = ?
                        WHERE id = '$id';");
    
    //binding the parameter and arguments
    $stmt->bind_param("ssii",$pass,$gender,$age,$contact);
    $id = mysqli_insert_id($con);
    $stmt->execute();

    //displaying result as successful for user to know
    echo "<p style='background-color:green; color:white;'>Successfully Updated</p>";

?>