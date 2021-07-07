<?php include('adheader.php'); ?>

<?php include('nav.php'); ?>



    <section class="fruit_section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
            $sql = "SELECT * FROM cases";
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
              
            ?>  
                                <tr>
                                <th scope="row">JDC<?php echo $case_id; ?></th>
                            
                                <td><?php echo $names; ?></td>
                                <td><?php echo $case_name; ?></td>
                                <td><?php echo $user_case; ?></td>
                                <td><?php echo $court; ?></td>
                                <td><?php echo $city; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><a href="open.php?open=<?php echo $case_id?>" class="btn btn-dark">open</a></td>
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