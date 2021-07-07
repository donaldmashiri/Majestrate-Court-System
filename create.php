<?php include('includes/header.php'); ?>



        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="slider_item-detail">
                                                <div>
                                                    <h2 class="font-weight-bold">
                                                        Create Account
                                                    </h2>
                        <?php
                      if(isset($_POST['create'])){

                      $firstName = $_POST['firstName'];
                      $lastName = $_POST['lastName'];
                      $email = $_POST['email'];
                      $phoneNo = $_POST['phoneNo'];
                      $gender = $_POST['gender'];
                      $password = $_POST['password'];
                      $password1 = $_POST['password1'];                      
                     
                        if($password === $password1){
                            $sql = "INSERT INTO users (firstName, lastName, email, phoneNo, gender, password)
                            VALUES ('{$firstName}', '{$lastName}', '{$email}','{$phoneNo}','{$gender}','{$password}')";
                            if ($conn->query($sql) === TRUE) {
                                echo "<p class='alert alert-success text-center'>Account successfully created Please login</p>";
                              } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                              } 
                        }else{
                            echo "<p class='alert alert-danger text-center'>Passoword didnt match</p>";
                        }
                    }
        ?>
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="firstName" placeholder="First Name" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lastName" placeholder="Last Name" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="phoneNo" class="form-control" name="phoneNo" placeholder="Phone Number" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="gender" id="">
                                                                <option value="">Select gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="password" placeholder="Password" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="password1" placeholder="Confirm Password" id="">
                                                        </div>
                                                        <div class="form-group">
                                                        <button style="background-color:#9c4f2e" name="create" type="submit" class="btn btn-primary float-right">Create</button>
                                                        </div>
                                                    </form>
                                                    <div class="d-flex">
                                                        <a href="login.php" class="btn btn-primary mr-3">
                                                           Login
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="slider_img-box">
                                                <div>
                                                    <img src="images/Law.jpg" alt="" class="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- end slider section -->
    </div>



  <?php include('includes/footer.php'); ?>