<?php include('adheader.php'); ?>

<?php include('nav.php'); ?>



    <section class="fruit_section bg-white">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Add case</div>

<?php

    if(isset($_POST['add_case'])){

        $names = $_POST['names'];
        $case_name = $_POST['case_name'];
        $user_case = $_POST['user_case'];
        $description = $_POST['description'];
        $court = $_POST['court'];
        $city = $_POST['city'];
        $date = $_POST['date'];
        // $case_date = $_POST['case_date'];


        // $user_image = $_FILES['image']['name'];
        // $user_image_temp = $_FILES['image']['tmp_name'];

        //  move_uploaded_file($user_image_temp, $user_image);
        
    
        $sql = "INSERT INTO cases (names, case_name, user_case, description, court, city, case_date)
        VALUES ('{$names}', '{$case_name}', '{$user_case}','{$description}', '{$court}', '{$city}', '{$date}')";
        
        if ($conn->query($sql) === TRUE) {
          echo "<p class='alert alert-success text-center'>Case successfully added</p>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

?>

                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                        
                                <div class="form-group">
                                    <input type="text" class="form-control" name="names" placeholder="Name(s)" id="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="case_name" placeholder="Case name" id="">
                                </div>
                                <div class="form-group">
                                <!-- <label for="court">Type of case</label> -->
                                    <select class="form-control"  name="user_case" id="">
                                        <option value="other">type of case</option>
                                        <option value="Criminal Cases">Criminal Cases </option>
                                        <option value="Civil Cases">Civil Cases</option>
                                        <option value="Family Cases">Family Cases</option>    
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" class="form-control"  id="" cols="30" rows="10" placeholder="Description of case"></textarea>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="court">Type of court</label> -->
                                    <select class="form-control"  name="court" id="court">
                                    <option value="other">type of court</option>
                                        <option value="Supreme Court">Supreme Court </option>
                                        <option value="Courts of Appeals">Courts of Appeals </option>
                                        <option value="District Courts">District Courts.</option>
                                        <option value="Bankruptcy Courts">Bankruptcy Courts..</option>    
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="court">Type of court</label> -->
                                    <select class="form-control"  name="city" id="court">
                                    <option value="other">Harare</option>
                                        <option value="Gweru">Gweru</option>
                                        <option value="Masvingo">Masvingo</option>
                                        <option value="Bulawayo">Bulawayo.</option>
                                        <option value="Shurugwi">Shurugwi</option> 
                                        <option value="Kwekwe">Kwekwe</option> 
                                        <option value="Kadoma">Kadoma</option>    
                                        <option value="Chegutu">Chegutu</option>  
                                        <option value="Hwange">Hwange</option>    
                                    </select>
                                </div>
                                <div class="form-group">
                                <input type="date" class="form-control" name="date">
                                </div>
                                <div class="form-group">
                                   <button  name="add_case" type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
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