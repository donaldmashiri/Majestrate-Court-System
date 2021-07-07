<?php include('includes/header.php'); ?>

<section class="fruit_section bg-white mb-5">
        <div class="container">
            <h2 class="custom_heading">Court System</h2>
            <p class="custom_heading-text">
               Search case note: payment is included if case found
            </p>
            <form action="" method="get">
            <div class="row">
                <div class="col-md-3">
                <div class="form-outline">
                   <input type="search" id="form1" name="search" class="form-control" placeholder="Search Case" />
                </div>
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
                <div class="form-group">
                                <!-- <label for="court">Type of case</label> -->
                                    <select class="form-control"  name="user_case" id="">
                                        <option value="other">type of case</option>
                                        <option value="Criminal Cases">Criminal Cases </option>
                                        <option value="Civil Cases">Civil Cases</option>
                                        <option value="Family Cases">Family Cases</option>    
                                    </select>
                                </div>
                </div>
                <div class="col-md-3">
                    <button name="action" type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
            </form>
            <hr>




            <div class="row">

            <div class="row layout_padding2">
                <div class="col-md-12">
                    <div class="fruit_detail-box">

                 <?php

                 $found_case_id = '';

if(isset($_GET['action'])){
    $search = $_GET['search'];
    $user_case = $_GET['user_case'];
    $court = $_GET['court'];

    $sql = "SELECT * FROM cases WHERE user_case = '$user_case' OR case_name = '$search' OR court = '$court'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $case_id = $row["case_id"];
                  $names = $row["names"];
                  $case_name = $row["case_name"];
                  $date = $row["case_date"];
                  $user_case = $row["user_case"];
                  $description = $row["description"];
                  $court = $row["court"];
                  $city = $row["city"];

                  $_SESSION['case_id'] = $row["case_id"];
                  $found_case_id = $row["case_id"];

                //   echo $found_case_id;
                //   return;

                  echo "<p class='alert alert-success'>Your case have been found</p>";
                  echo "<div> <form action='pay.php' method='post'> <input name='case_id' value='$found_case_id' type='hidden' /><button type='submit' name='pay' class='btn btn-primary'>Proceeed to payment </button></form></div>";



                //   echo "<h3 class='text-info'>$names</h3>";
                //   echo "<p class='text-danger'>Case# : JCM00$case_id :</p>";
                //   echo "<p class='mt-4 mb-5'> <strong>Case:</strong> $case_name </p>";
                //   echo "<div> <form action='pay.php' method='post'> <button type='submit' name='pay' class='custom_dark-btn'>View case </button></form></div>";
                  
            
                }
            } else {
              echo "<p class='alert alert-danger'>No results found</p>";
            }
   
}

if(isset($_POST['pay'])){

    

}

            
            ?>

        


                    </div>
                </div>
              
            </div>



            </div>
            

            
     
        </div>
    </section>




  <?php include('includes/footer.php'); ?>