<?php

$payfast_secret_key="";

\stripe\stripe::setAPIkey($payfast_secret_key);

$checkout_session=\stripe\checkout\session::Create(["mode"=>"payment",
     "success_url"=> "http://localhost/success.php",
     "cancel_url"=> "http://localhost/index.php",
     "locale"=>"auto",
     
     "line_items"=>[
             "quantity"=>1,
             "Price_data"=>["currency"=>"usd",    "unit_amount"=>2000,   "product_data"=>["name"=>"whatsapp data"]],
          
     ]]);