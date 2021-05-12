<?php 
    if(isset($_GET['status']))
    {
        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            header('Location: index.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id']; //transaction ID
            $curl = curl_init();

            //verifying the transaction from the verification endpoint
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK-8564bae5d603927c5430c0d7535900e2-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;// check the user's am
                $amountToPay = $res->data->meta->price;
                if($amountPaid >= $amountToPay)
                {
                    echo 'Payment successful';

                    //* Continue to give item to the user
                }
                else
                {
                    echo 'illegal transaction detected';
                }
              }
              else
              {
                  echo 'Can not process payment';
              }
        }
    }
