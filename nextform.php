<?php
if(isset($_POST['request_form'])) {
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $person_name = $_POST["your_name"];
        $person_email = $_POST["email_address"];
        $mobile_num = $_POST["mobile"];
        $message_box = $_POST["comment_box"];

        // Compose the email message
        $to = "billing@techability.info"; // Replace with your email address
        $subject = "Information Submission";
        $message = "Full Name: $person_name\n";
        $message .= "Email Address: $person_email\n";
        $message .= "Phone Number: $mobile_num\n";
        $message .= "Message: $message_box\n";

        // Set additional headers
        // $headers = "From: $person_email\r\n";
        // $headers .= "Reply-To: $person_email\r\n";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "<div class='alert alert-success' role='alert'>Form Submitted. We will get in touch.</div>";
            header('Location:thankyou.php');
            exit; // stop execution after redirection
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error sending email. Please try again later.</div>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css"
        rel="stylesheet">
</head>
<body>
    <section class="main_background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="main_banner_logo" src="../images/logo.png" alt="">
                </div>
            </div>
        </div>
        <div class="container main_container">
            <div class="row">
            <img class="side_img1" src="../images/Layer 4.png" alt="">
            <img class="side_img2" src="../images/Layer 6.png" alt="">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="" method="post">
                    <div class="contaier">
                        <h1>let's build something great together!</h1>
                        <p>Drop us a line or view contact info</p>
                        <div class="row row_container">
                            <form action="" method="post">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="input_box">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="your_name" id="" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="input_box">
                                    <i class="fa-regular fa-envelope"></i>
                                    <input type="text" name="email_address" id="" placeholder="Email Address" required>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="input_box">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <input type="text" name="mobile" id="" placeholder="Phone" required>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row row_container2">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="input_box2">
                                    <input type="text" name="comment_box" id="" placeholder="Enter your Comment here">
                                </div>
                            </div>
                            <center><button class="main_button" type="submit" name="request_form">Submit Your Request</button></center>
                        </div>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>