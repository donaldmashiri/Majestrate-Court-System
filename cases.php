<?php include('includes/header.php'); ?>

<section class="fruit_section bg-white">
        <div class="container">
            <h2 class="custom_heading">Court Roll Roster</h2>

            <?php include('includes/nav.php'); ?>

            <hr>

            <p class="custom_heading-text">
                This is court roll roster for next five business days.
            </p>
            
            <div class="card">
                        <div class="card-header">All Cases</div>
                        <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">case#</th>
                                <th scope="col">Names</th>
                                <th scope="col">Case Name</th>
                                <th scope="col">Case Type</th>
                                <th scope="col">Court</th>
                                <th scope="col">City</th>
                                <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
            $sql = "SELECT * FROM cases WHERE case_status != 'pending'";
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
              
            ?>  
                                <tr>
                                <th scope="row">JDC<?php echo $case_id; ?></th>
                            
                                <td><?php echo $names; ?></td>
                                <td><?php echo $case_name; ?></td>
                                <td><?php echo $user_case; ?></td>
                                <td><?php echo $court; ?></td>
                                <td><?php echo $case_status; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><a href="view.php?view=<?php echo $case_id?>" class="btn btn-info">view</a></td>
                                </tr>

                                <?php 
                             }
                            } else {
                              echo "No cases";
                            }

                            ?>



                            </tbody>
                            </table>
                        </div>
                    </div>
     
        </div>
    </section>




  <?php include('includes/footer.php'); ?>