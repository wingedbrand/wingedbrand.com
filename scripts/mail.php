<?php
    if (isset($_POST["sizee"])) {
        $size = $_POST["sizee"];
        $productName = $_POST["product"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $nameData = $_POST["name"];
        $surnameData = $_POST["surname"];

        $to = 'aviationwithdove@gmail.com';  
        $subject = 'Order';
        $message = "Product: $productName";
        $message = "Size: $size";
        $message = "E-mail: $email";
        $message = "Phone number: $phone";
        $message = "Name: $nameData";
        $message = "Surname: $surnameData";

        mail($to, $subject, $message);
 } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order has been sent!</title>
<link rel="stylesheet" href="mailstyle.css">
    </head>
    <body>
    <h1>Thank you for order!</h1>
    <h2>We will contact you soon.</h2>
    <h3>You might also like</h3>
    <div class="also">
    <div class="compass">
  <a href="../tshirts/compass/compassb.html">
    <img src="../compass.png" alt="Click!">
  </a>
  </div>
  <div class="mig29">
        <a href="../hudi/mig29/mig29.html" >
      <img src="../mig29.png" alt="Click!">
      </a>
      </div>
      <div class="btf">
  <a href="../tshirts/Born to fly/borntofly.html">
    <img src="../btf.png" alt="Click!">
  </a>
  </div>
  </div>
    </body>
    </html>