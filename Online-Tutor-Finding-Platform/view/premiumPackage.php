<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Options</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    form {
      margin-top: 20px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #555;
    }

    select, input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      box-sizing: border-box;
    }

    button[type="submit"], .button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 16px;
      margin-bottom: 10px;
    }

    button[type="submit"]:hover, .button:hover {
      background-color: #0056b3;
    }

    .button + .button {
      margin-top: 10px;
    }

    #bkash_phone_number, #credit_card_number {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Payment Options</h2>

    <form method="post" action="proceedToPayment.php">
      <label for="payment_method">Choose your payment method:</label><br>
      <select name="payment_method" id="payment_method">
        <option value="" selected disabled>Select Payment Method</option>
        <option value="card">Credit Card</option>
        <option value="bkash">bKash</option>
        <option value="cash">Cash on Delivery</option>
      </select><br>

      <div id="bkash_phone_number">
        <label for="bkash_phone">Enter your bKash phone number:</label><br>
        <input type="text" id="bkash_phone" name="bkash_phone"><br>
      </div>

      <div id="credit_card_number">
        <label for="credit_card_number">Enter your credit card number:</label><br>
        <input type="text" id="credit_card_number" name="credit_card_number"><br>
      </div>

      <button type="submit" name="submit">Proceed to Payment</button>
    </form>

    <a href="payment_history.html" class="button">Payment History</a>
  </div>
  

<script>

document.getElementById("payment_method").addEventListener("change", function () {
    var bkashPhoneNumberDiv = document.getElementById("bkash_phone_number");
    var creditCardNumberDiv = document.getElementById("credit_card_number");
    if (this.value === "bkash") {
      bkashPhoneNumberDiv.style.display = "block";
      creditCardNumberDiv.style.display = "none";
    } else if (this.value === "card") {
      bkashPhoneNumberDiv.style.display = "none";
      creditCardNumberDiv.style.display = "block";
    } else {
      bkashPhoneNumberDiv.style.display = "none";
      creditCardNumberDiv.style.display = "none";
    }
  });

  
  document.querySelector("form").addEventListener("submit", function (event) {
    var bkashPhoneInput = document.getElementById("bkash_phone");
    var creditCardInput = document.getElementById("credit_card_number");

   
    if (document.getElementById("payment_method").value === "bkash") {
      if (bkashPhoneInput.value.trim().length !== 11 || isNaN(bkashPhoneInput.value.trim())) {
        alert("Please enter a valid bKash phone number with 11 digits.");
        event.preventDefault(); 
        return;
      }
    }

  
    if (document.getElementById("payment_method").value === "card") {
      if (creditCardInput.value.trim().length !== 11 || isNaN(creditCardInput.value.trim())) {
        alert("Please enter a valid credit card number with 11 digits.");
        event.preventDefault(); 
        return;
      }
    }
  });
 
</script>

</body>
</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["submit"])) {

    if (isset($_POST["bkash_phone"]) && is_numeric($_POST["bkash_phone"]) && $_POST["bkash_phone"] >= 0 && $_POST["bkash_phone"] <= 10) {

      header("Location: proceedToPayment.php");
      exit;
    } else {

      echo "<p style='color: red;'>Please enter a valid number between 0 and 10.</p>";
    }


    if (isset($_POST["credit_card_number"]) && is_numeric($_POST["credit_card_number"]) && $_POST["credit_card_number"] >= 0 && $_POST["credit_card_number"] <= 10) {

      header("Location: proceedToPayment.php");
      exit;
    } else {

      echo "<p style='color: red;'>Please enter a valid number between 0 and 10.</p>";
    }
  }
}
?>