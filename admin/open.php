<?php include('adheader.php'); ?>

<?php include('nav.php'); ?>

<?php

$id = $_GET['open'];
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
                  $court = $row["court"];
                  $case_status = $row["case_status"];
                  $judgement = $row["judgement"];
                  $court = $row["court"];
                  $city = $row["city"];

                }
            } else {
              echo "No cases";
            }
              
            ?>  

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
      
                                <tr>
                                <th scope="row">JDC<?php echo $case_id; ?></th>
                            
                                <td><?php echo $names; ?></td>
                                <td><?php echo $case_name; ?></td>
                                <td><?php echo $user_case; ?></td>
                                <td><?php echo $court; ?></td>
                                <td><?php echo $city; ?></td>
                                <td><?php echo $date; ?></td>
                              
                                </tr>
                            </tbody>
                            </table>
                            <hr>

                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item text-primary">Status : <strong><?php echo $case_status; ?></strong></li>
                                <li class="list-group-item text-info">judgement : <strong><?php echo $judgement; ?></strong></li>
                            </ul>

    <?php

if (isset($_POST['update'])) {

    $judge = $_POST['judgement'];   
    $status = $_POST['status'];   

        $query = "UPDATE cases SET ";
        $query .= "judgement  = '{$judge}', ";
        $query .= "case_status  = '{$status}' ";
        $query .= "WHERE case_id = $id ";
    
        $update_query = mysqli_query($conn, $query);
        header("Location: open.php?open=".$id );
    
        if (!$update_query) {
            die("Query failed" . mysqli_error($conn));
        }
    
    }

    ?>



                            <form action="" method="post">
                                    <div class="form-group mt-3">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status" id="">
                                    <option value="Pending">Pending</option>
                                    <option value="Postponded">Postponded</option>
                                    <option value="Default Judgement">Default Judgement</option>
                                    </select>    
                                    </div>
                                    <div class="form-group">
                                    <textarea name="judgement" class="form-control" id="" cols="15" rows="5" placeholder="Whats was the Judgement"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <button style="background-color:#9c4f2e" name="update" type="submit" class="btn btn-primary float-right">Submit</button>
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