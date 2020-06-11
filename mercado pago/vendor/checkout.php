<?php

<script src="https://www.mercadopago.com/v2/security.js" view="home"></script>
<script src="https://www.mercadopago.com/v2/security.js" view="search"></script>
<script src="https://www.mercadopago.com/v2/security.js" view="item"></script>
<script src="https://www.mercadopago.com/v2/security.js" view="vacio"></script>

// Integrator id

	MercadoPago\SDK::setIntegratorId("469485398");

// access token configuration

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); 

    $payment = new MercadoPago\Payment();
    
    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
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

// producto prueba

{
    "items": [
        {
            "id": "1234",
            "title": "Dispositivo móvil tienda de e-commerce",
            "currency_id": "ARS",
            "picture_url": "http://jessiecamm-mp-ecommerce-php.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg",
            "description": "Celular",
            "category_id": "art",
            "quantity": 1,
            "unit_price": 15.000,
            "external_reference": "contacto@camm-productions.com"
        }
    ],
    "payer": {
        "name": "Lalo",
        "surname": "Landa",
        "email": "test_user_63274575@testuser.com",
        "phone": {
            "area_code": "11",
            "number": "2222-3333"
        },
        "address": {
            "street_name": "False",
            "street_number": 123,
            "zip_code": 1111"
        }
    },
    "back_urls": {
        "success": "https://jessiecamm-mp-ecommerce-php.herokuapp.com/success.php?collection_id=lalolanda&collection_status=approved&external_ref
erence=contacto@camm-productions.com&payment_type=credit_card&preference_id=visa&site_id
=argentina&processing_mode=aggregator&merchant_account_id=null",
        "failure": "https://jessiecamm-mp-ecommerce-php.herokuapp.com/failure.php?collection_id=lalolanda&collection_status=approved&external_ref
erence=contacto@camm-productions.com&payment_type=credit_card&preference_id=visa&site_id
=argentina&processing_mode=aggregator&merchant_account_id=null",
        "pending": "https://jessiecamm-mp-ecommerce-php.herokuapp.com/pending.php?collection_id=lalolanda&collection_status=approved&external_ref
erence=contacto@camm-productions.com&payment_type=credit_card&preference_id=visa&site_id
=argentina&processing_mode=aggregator&merchant_account_id=null"
    },
    "auto_return": "aprobado",
    "payment_methods": {
        "excluded_payment_methods": [
            {
                "id": "amx, atm"
            }
        ],
        "excluded_payment_types": [
            {
                "id": "ticket"
            }
        ],
        "installments": 6
    },
    "notification_url": "https://jessiecamm-mp-ecommerce-php.herokuapp.com/ipn",
    "external_reference": "contacto@camm-productions.com",
    "expires": true,
    "expiration_date_from": "2020-06-11T12:00:00.000-04:00",
    "expiration_date_to": "2020-06-12T12:00:00.000-04:00"
}

//notificaciones

	{
	    "transaction_amount":15.000,
	    ....
	    "notification_url":"http://jessiecamm-mp-ecommerce-php.herokuapp.com/payment",
	    ....
	}

	{
    "id": 1234,
    "live_mode": true,
    "type": "payment",
    "date_created": "2020-06-11T12:00:00.000-04:00",
    "user_id": 471923173,
    "version": 1,
    "api_version": "v1",
    "action": "payment.created",
    "data": {
        "id": "1234"
    }

   MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }

?>
