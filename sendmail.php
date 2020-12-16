<?php

require_once './class.phpmailer.php';
require_once './class.smtp.php';


if(isset($_POST["sub"])){
    
 
$name = $_POST["fullname"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$product = $_POST["product"];
$quantity = $_POST["kg"];
$discount="";
if(isset($_POST["check"]))
    $discount = "Yes";
else 
    $discount = "No";

    
$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.ifishstore.pk';                 // Specify main and backup server
$mail->Port = 25;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@ifishstore.pk';                // SMTP username
$mail->Password = '+d@w_iUyE3~m';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@ifishstore.pk';
$mail->FromName = 'Orders@ifishstore.pk';
$mail->AddAddress('info@ifishstore.pk', 'Hasnain Janwani');  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = "An order has been placed by $name";
$mail->Body    = "<strong>ORDER INFORMATION</strong><br><br> Buyer's Name: $name <br>Contact: $contact <br>Delivery Address: $address <br>Product Ordered: $product <br>Quantity: $quantity kg <br>Discount: $discount";
$mail->AltBody = "ORDER INFORMATION\n\n Buyer's Name: $name \n Contact: $contact \n Delivery Address: $address \nProduct Ordered: $product \n Quantity: $quantity kg \n Discount: $discount";

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

	header("Location:   index.php");
    
}


?>