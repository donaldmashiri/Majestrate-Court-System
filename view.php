<?php include('includes/header.php'); ?>

<section class="fruit_section bg-white">
        <div class="container">
            <h2 class="custom_heading">Publicly Filed Records</h2>
            <p class="custom_heading-text">
                View Case
            </p>
            <hr>
            <?php

            $id = $_GET['view'];
            $sql = "SELECT * FROM cases WHERE case_id = $id";
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
                  $case_status = $row["case_status"];
                  $judgement = $row["judgement"];
                  $court = $row["court"];
                  $city = $row["city"];

                }
            } else {
              echo "0 results";
            }
              
            ?>
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3 class="text-info">
                           <?php echo $names; ?>
                        </h3>
                        <small>Ref# : JDC00<?php echo $case_id?> </small>
                        <p class="mt-4 mb-2">
                            <strong>Case Name:</strong> <?php echo $case_name; ?>
                        </p>
                        <p class="mt-4 mb-2">
                            <strong>Description:</strong> <?php echo $description; ?>
                        </p>
                        <p style="background-color:gray" class="mt-4 mb-2">
                            <strong>Judgement:</strong> <?php echo $judgement; ?>
                        </p>
                        <div>
                        <a href="print.php?print=<?php echo $case_id; ?>" class="btn btn-primary">View in pdf</a>     
                        </div>
                    </div>
                </div>
                <div class="col-md-4 justify-content-center align-items-center">
                        <p class="mt-4 mb-1">
                            <strong>Date:</strong> <?php echo $date; ?>
                        </p>
                        
                        <p class="mt-4">
                            <strong>Court:</strong> <?php echo $court; ?>
                        </p>
                        <p class="mt-4 mb-1">
                            <strong>City:</strong> <?php echo $city; ?>
                        </p> 
                        <p class="mt-4 mb-1 text-info">
                            <strong>Status:</strong> <?php echo $case_status; ?>
                        </p>
                </div>
            </div>
     
        </div>
    </section>




  <?php include('includes/footer.php'); ?>