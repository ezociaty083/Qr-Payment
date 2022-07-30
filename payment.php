<?php
require_once("lib/PromptPayQR.php");
$Amount = ($_REQUEST['Amount']);

$PromptPayQR = new PromptPayQR();
$PromptPayQR->size = 8;
$PromptPayQR->id = 'Promptpay ex.09xxxxxxxx';  //ตั้งค่าบัญชี Promtpay
$PromptPayQR->amount = $Amount;
?>

<!doctype html>
<html lang="en">

<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="src/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

  <div class="header-content">
    <p style="font-size: 50px;">QR PAYMENT</p>

  </div>
  <div class="qr-payment">
    <div class="container mt-3 d-flex justify-content-center">
      <div class="card" style="width:30rem; height: 40rem; border-radius: 10px; position: fixed;">

        <div class="card-body border-top-0 border-bottom-0">
          <img src="img/template.png" alt="" style="width: 430px; height: 500px; position: fixed;">
          <div class="d-flex justify-content-center" style="margin-top: 12rem; margin-left: 45px; position: absolute;">
            <?php echo '<img src="' . $PromptPayQR->generate() . '" />'; ?>
            <img src="img/logo.png" alt="" style="width: 42px; height:32px ; margin-top: 10rem; margin-left: 15px; position: absolute;">
          </div>
        </div>
        <div class="card-footer bg-white text-danger mt-1" style="text-align: center; border-radius: 10px;">* สแกน QR Code เพื่อชำระพร้อมเพย์</div>
      </div>
    </div>
    <script src="./vendor/jquery/jquery.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
  </div>


</body>

</html>
