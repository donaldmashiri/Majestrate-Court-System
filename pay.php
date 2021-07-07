<?php

require_once('vendor/autoload.php');
$case_id = $_POST['case_id'];
// echo $case_id;
// return;
$paynow = new Paynow\Payments\Paynow(
    '10490',
    'd9dedf29-8e42-4de0-ac3c-73248f8c24ad',
     'http://localhost/msu/prince/success.php?case_id='.$case_id,


    // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
    'http://example.com/return?gateway=paynow'
);

$payment = $paynow->createPayment('Judicial Service', 'donaldtondemashiri@gmail.com');

$payment->add('Bail deposit', 1000);
//$payment->add('Water', 1.00);

$response = $paynow->send($payment);
// var_dump($response);
if ($response->success()) {
    // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
    $link = $response->redirectUrl();
    // save link
    $pollUrl = $response->pollUrl();
    // checking payment
//    echo 'Success';
//    echo '<br>';
    // redirect to link
    // echo $pollUrl;
//    echo '<br>';
    // echo $link;
    // Check the status of the transaction
//    $status = $paynow->pollTransaction($pollUrl);
    header("Location: ".$link);
}













// //paynow code
// error_reporting(1);
// require_once '../vendor/autoload.php';

// $paynow = new Paynow\Payments\Paynow(
//     '10524',
//     '534aea3c-f6ff-4da6-85ed-03c8e4b2db38',
//     'http://www.mangata.co.zw/accomodation/success.php?token=' . $token,


//     // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
//     'http://example.com/return?gateway=paynow'
// );

// $payment = $paynow->createPayment('Accomodation', $client_email);

// $payment->add('Consultancy fee', 1000);
// //$payment->add('Water', 1.00);

// $response = $paynow->send($payment);
// // var_dump($response);
// if ($response->success()) {
//     // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
//     $link = $response->redirectUrl();
//     // save link
//     $pollUrl = $response->pollUrl();
//     // checking payment
// //    echo 'Success';
// //    echo '<br>';
//     // redirect to link
//     // echo $pollUrl;
// //    echo '<br>';
//     // echo $link;
//     // Check the status of the transaction
// //    $status = $paynow->pollTransaction($pollUrl);
//     header("Location: ".$link);
// }

// //}










?>