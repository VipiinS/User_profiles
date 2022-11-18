<?php
   $user = $_POST['user'];
   $pass = $_POST['pass'];

   $email =$_POST['email'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $contact = $_POST['contact'];

//    echo "hello from php"; //to check whether php...

//connecting to our db
   $con = mysqli_connect("localhost","root","","guvi");
//query
$query = mysqli_query($con,"SELECT `id` FROM `users` WHERE `username` = '$user'" );
$num = mysqli_num_rows($query);
if(!$user & !$pass){
    echo "<p style='background-color:red;'>All fields are empty</p>";
}
else
    if(!$user){

        echo "<p style='background-color:red;'>Enter a username</p>";
    }else
        if($num == 1){
            echo "<p style='background-color:red;'>Username is taken</p>";

        }
        else
            if(!$pass)
            {
                echo "<p style='background-color:red;'>Enter a password</p>";
            }
            else{
                // $encrypted = sha1(md5($pass));

                mysqli_query($con,"INSERT INTO `users` (`username`, `password`,`email`,`gender`,`age`,`contact`) VALUES ('$user', '$pass','$email','$gender','$age','$contact');");
                $id = mysqli_insert_id($con);
                    echo "<p style='background-color:green;'>Registered<br> your id is $id<p>";
            }

?>