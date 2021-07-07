<?php include('adheader.php'); ?>



<section class="fruit_section bg-white">
        <div class="container">
            <h2 class="custom_heading">Admin Login</h2>
            <hr>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Admin Login</div>
                        <div class="card-body">

                        <?php
                         if(isset($_POST['login'])){
                             $username = $_POST['username'];
                             $password = $_POST['password'];

                             if($username === 'admin' && $password === '12345'){
                                 header('location: home.php');
                             }else{
                                 echo "<p class='alert alert-danger'>Invalid credentials</p>";
                             }

                         }
                        ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" id="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" id="">
                                </div>
                                <div class="form-group">
                                   <button style="background-color:#9c4f2e" name="login" type="submit" class="btn btn-primary float-right">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="../images/Law.jpg" width="500" height="500" alt="" srcset="">
                </div>

            </div>

          
    
        </div>
    </section>




  <!-- footer section -->
  <section class="container-fluid footer_section mt-3">
        <p>
            Copyright &copy; 2021 All Rights Reserved By Prince NYAMURANGA (R172517X)

        </p>
    </section>
    <!-- footer section -->

    <?php include('adfooter.php'); ?>