<?php

/****
 * This file is used to verify the payment details  of the user. It includes the  database file and the form in booking.php 
 * If the user input is correctly filled in, it inserts it into the database.
 */
session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = './logout.php'</script>";
}
   
require_once('../../database/connection.php'); 

     
// collecting records from payment card
    if(isset($_POST['cardsubmit'])){
        $cname = $_POST['cardname'];
        $num = $_POST['cardnum'];
        $cvv = $_POST['cvv'];
        $expDate = $_POST['expdate'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];


       $request = [
           'tx_ref' => time(),
           'amount' => $amount,
           'currency' => 'GHS',
            'payment_options' => 'card', 'mobile money',
            'redirect_url' => 'index.php',
            'customer' =>[
                'email' => $email,
                'name'  => $cname, 
            ],
            'meta'  => [
                'price ' => $amount
            ],
            'customization'  => [
                'title'  => 'Paying for Drugs',
                'description' =>' Total amount for drug prescriptions'
            ]
            ];

        // Adding the Flutter wave endpoint

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($request),  //converting the  array request into json
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer FLWPUBK-118ad777f65ef74dc553c4b2bc7e20b7-X',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo '<pre>';
        echo $response;
        echo '</pre>';
        $res = json_decode($response);
        
        if($res->status == 'success')
        {
            $link = $res->data->link;
            header('Location: '.$link);
        }
        else
        {
            echo 'We can not process your payment';
        }
    }



    ?>
