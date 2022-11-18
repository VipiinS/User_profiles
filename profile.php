<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="assets/jquery.js"></script>
    <script src="js/profile.js"></script>
</head>
<body>
        <?php
            session_start();
            $id = $_SESSION['id'];

            $con = mysqli_connect("localhost","root","","guvi");

            // $query = mysqli_query($con,"SELECT `username` FROM `users` WHERE `id`='$id'");
        
            $query = mysqli_query($con,"SELECT * FROM `users` WHERE `id`='$id'");
            $fetch = mysqli_fetch_assoc($query);

            $pass = $fetch['password'];
            $user = $fetch['username'];
            $id = $fetch['id'];
            $email = $fetch['email'];
            $gender = $fetch['gender'];
            $age = $fetch['age'];
            $contact = $fetch['contact'];
            $date = $fetch['date'];
        ?>




  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">

              <!-- image  -->
              <div class="mt-3 mb-4">
                <img src="assets/picture.png" class="rounded-circle img-fluid" style="width: 100px;" />
              </div>

              <!-- username  -->
              <h4 class="mb-2"><?php echo $user;?></h4>
              <p class="text-muted mb-4">Joined on: <?php echo $date ?><p class="text-muted mb-4"> <?php echo $email ?> <span class="mx-2">|</span> 
                <a href="#!">Logout</a></p>
                <p><input id="username" type="text"></p>
                <p><input id="password" type="text" placeholder="********"></p>
                <p><input id="gender" type="text" placeholder="<?php echo $gender; ?>"></p>
                <p><input id="age" type="text" placeholder="<?php echo $age;?>"></p>
                <p><input id="contact" type="text" placeholder="<?php echo $contact?>"></p>
                
                <div id="edit_error"></div>

                  <!-- submut button -->
              <button id="edit_btn" type="button" class="btn btn-primary btn-rounded btn-sm">Update all</button>
              
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
</body>
</html>