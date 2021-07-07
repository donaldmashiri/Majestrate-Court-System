<?php include('includes/db.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Court Application for Litigants</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body onload="window.print();">


<div class="hero_area">
        <!-- header section strats -->

        <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="home.php">
            <img src="images/Law.jpg" alt="" /><span>
            Court Application for Litigants
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
            
                <li class="nav-item">
                <div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Search Case" />
  </div>

                </li>
              </ul>
              
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
              Search
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

<section class="fruit_section bg-white">
        <div class="container">
            <h2 class="custom_heading">Court Roll Roster</h2>
            <p class="custom_heading-text">
                View Case
            </p>
            <hr>
            <?php

            $id = $_GET['print'];
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