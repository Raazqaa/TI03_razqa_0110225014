<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $account_number = $_POST['account_number'];
  $bank = $_POST['bank'];
  $account_holder = $_POST['account_holder'];
  $transaction_count = $_POST['transaction_count'];
  $send_to_mobile = isset($_POST['send_to_mobile']) ? 'Yes' : 'No';
  $send_to_email = isset($_POST['send_to_email']) ? 'Yes' : 'No';
  $mobile_number = $_POST['mobile_number'];
  $email_address = $_POST['email_address'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process Page</title>
  <link rel="stylesheet" href="assets/CSS/process.css">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home |</a></li>
        <li><a href="index.html">Register |</a></li>
        <li><a href="#">Policy |</a></li>
        <li><a href="#">About |</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="imageBox">
        <img src="assets/img/anonymous.webp" alt="">
      </div>
      <div class="formBox">
        <div class="box">
          <p><strong>Title Here: </strong></p>
          <p><?= $title ?></p>
        </div>
        <div class="box">
          <p><strong>Price: </strong></p>
          <p><?= $price ?></p>
        </div>
        <div class="box">
          <p><strong>Description: </strong></p>
          <div class="descBox">
            <p><?= $description ?></p>
          </div>
        </div>
        <div class="box">
          <p><strong>Account Number: </strong></p>
          <p><?= $account_number ?></p>
        </div>
        <div class="box">
          <p><strong>Account Holder: </strong></p>
          <p><?= $account_holder ?></p>
        </div>
        <div class="box">
          <p><strong>Mobile Number: </strong></p>
          <p><?= $mobile_number ?></p>
        </div>
        <div class="box">
          <p><strong>Email: </strong></p>
          <p><?= $email_address ?></p>
        </div>
      </div>
    </div>
    <div class="button">
      <a href="index.html">Pay Using Quidlink</a>
    </div>
  </main>
</body>

</html>