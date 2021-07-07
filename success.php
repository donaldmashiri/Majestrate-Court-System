<?php include('includes/header.php'); ?>

<section class="fruit_section bg-white">
        <div class="container">
            <h2 class="custom_heading">Payment Success</h2>
            <p class="custom_heading-text text-success">
               Confirmation
            </p>
            <hr>

           
            <?php

$id =  $_GET['case_id'];

$query = "SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}'";
$select_customer = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($select_customer)) {
    $user_id = $row['user_id'];
    $firstName = $row['firstName'];


}


?>


            <section id="newsletter" class="bg-dark text-white py-5">
        <div class="container">
            <h2 class="">
                Hie <?php echo  $firstName; ?>, Your payment of $1000.00 was successful.
            </h2>
            <p class="text-info">Your case number is JCD00<?php echo $id; ?></p>
        </div>
    </section>




     
        </div>
    </section>




  <?php include('includes/footer.php'); ?>