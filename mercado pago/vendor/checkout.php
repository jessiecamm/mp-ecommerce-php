<?php


MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); 

    $payment = new MercadoPago\Payment();
    
    $payment->transaction_amount = 15.000;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Samsung Galaxy S9";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "las_fdm@yahoo.com.ar"
    );

    $payment->save();

    echo $payment->status;

	// payment methods 

	$preference = new MercadoPago\Preference();
	// ...
	$preference->payment_methods = array(
	  "excluded_payment_methods" => array(amex,atm);
	    array("id" => "amex,atm")
	  ),
	  "excluded_payment_types" => array(
	    array("id" => "ticket")
	  ),
	  "installments" => 6
	);
	// ...

?>
