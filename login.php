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
                                                        Welcome <br />Please Login
                                                    </h2>
                                                    <?php 
                                                    if(isset($_POST['login'])){

                                                        $email = $_POST['email'];
                                                        $password = $_POST['password'];

                                                        $query = "select * from users where email = '$email' and password = '$password'";
                                                        $result = mysqli_query($conn, $query);
                                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                                        $count = mysqli_num_rows($result);

                                                        if ($count == 1) {
                                                            $_SESSION['user_id'] = $row['user_id'];
                                                            header("Location: home.php" );
                                                                            //    echo   $_SESSION['user_id'];
                                                        } else {
                                                            echo "<a class='bg-light nav-link text-danger'>Invalid email and password</a>";
                                                        }
                                                    }
                                                    ?>

                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Email" id="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="password" placeholder="Password" id="">
                                                        </div>
                                                        <div class="form-group">
                                                        <button style="background-color:#9c4f2e" name="login" type="submit" class="btn btn-primary float-right">Login</button>
                                                        </div>
                                                    </form>
                                                    <div class="d-flex">
                                                        <a href="create.php" class="btn btn-primary btn-sm mr-3">
                                                     Create Account
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