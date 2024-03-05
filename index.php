
<!-- Ali form Work -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['p_business_info'])) {
    // Get form data
    $p_full_name = $_POST["f_name"];
    $p_mobile_num = $_POST["p_number"];
    $p_official_email = $_POST["p_email"];
    $official_business = $_POST["p_business_name"];
    $p_message_info = $_POST["p_message"];

    // Compose the email message
    $to = "ali.techability@gmail.com"; // Replace with your email address
    $header = "From: $p_official_email";
    $subject = "Information Submission";
    $message = "Full Name : $p_full_name\n";
    $message .= "Phone Number : $p_mobile_num\n";
    $message .= "Email Address : $p_official_email\n";
    $message .= "Business Name : $official_business\n";
    $message .= "Message : $p_message_info\n";

    // Send the email
    mail($to, $subject, $message, $header);

    // You can redirect the user to a thank you page or display a success message here
    header('Location:thankyou.php');
    exit(); // Make sure to exit after redirect
}
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9KN83JYSF1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9KN83JYSF1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techability-Marketing</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css"
        rel="stylesheet">
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fd9b3e20-0405-49ff-96a7-5bb43772f613";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>

<!-- Modal -->


<div class='popup-onload'>
<div class='cnt223'>

<div class="popup-content">    
<center><img class="main_banner_logo2" src="../images/logo.png" alt="" width="250"></center>
<div class="circle_btn">
<a href='' class='close'>X</a>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <form action="" method="post" class="coupen_form">
        <input type="text" placeholder="Full Name" name="full_n"><br>
        <input type="email" placeholder="Enter Your Email" name="full_email"><br>
        <input type="number" placeholder="Phone Number" name="full_num"><br>
        <input type="submit" value="Submit" name="coupen_btn" class="sale_btn">
</form>
    </div>
</div>
</div>
</div>
</div>





<a href="tel:+1 786 687 2266" mypage="" class="call-now" rel="nofollow"><div
class="mypage-alo-phone"><div
class="animated infinite pulse mypage-alo-ph-circle-fill"></div><div
class="animated infinite tada mypage-alo-ph-img-circle"></div></div>
</a>
    <section class="main_section">
        <div class="container">
            <div class="row mr-0">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img class="main_banner_logo" src="../images/logo.png" alt="">
                </div>
            </div>
            <div class="row mr-0">
                <div class="col-lg-6 col-md-6 col-sm-12 my_social">
                    <h1 class="call_us_heading">call us</h1>
                    <h1 class="phone_heading">+1 786 687 2266</h1>
                    <h1 class="social_heading"><span>Social</span>&nbsp;&nbsp;Media</h1>
                    <h1 class="package_heading">packages that work</h1>
                    <p class="call_us_paragraph">we're dedicated to propelling businesses of all sizes to new heights in the digital realm.
                                With our expert guidance and tailored strategies, we empower you to thrive online, connecting with your audience,
                                and achieving remarkable growth. Let's embark on this journey together and unlock the full potential of your business.
                                Welcome to the future of digital success.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="custom">
                    <form class="main_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
    <h4 class="main_form_heading">Free Social Media <span>Analysis</span></h4>
    <label><div class="diamond1"></div>First Name:<div class="diamond2"></div></label><br>
    <input type="text" name="f_name" required><br>
    <label><div class="diamond1"></div>Phone Number:<div class="diamond2"></div></label><br>
    <input type="number" name="p_number"><br>
    <label><div class="diamond1"></div>Your Email:<div class="diamond2"></div></label><br>
    <input type="email" name="p_email"><br>
    <label><div class="diamond1"></div>Business Name:<div class="diamond2"></div></label><br>
    <input type="text" name="p_business_name"><br>
    <label><div class="diamond1"></div>Message:<div class="diamond2"></div></label><br>
    <textarea class="message_box" name="p_message"></textarea>
    <button type="submit" class="talk_button" name="p_business_info">lets Talk Social!</button>
    <img class="phone_img2" src="../images/Handset_Yellow.H09.2k.png" alt="" height="600">
</form>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="posting">
        <div class="container-fluid">
        <img class="ellipse_1" src="../images/Ellipse1.png" alt="" width="300" height="300">
        <img class="ellipse_2" src="../images/Ellipse1.png" alt="" width="300" height="300">
        <img class="ellipse_3" src="../images/Ellipse1.png" alt="" width="150" height="150">
        <img class="ellipse_4" src="../images/Ellipse1.png" alt="" width="300" height="300">
        </div>
        <div class="container">
            <h1 class="posting_heading1"> ITs not</h1>
            <h1 class="posting_heading2">just posting</h1>
        </div>
        <center><p class="posting_paragraph">it's crafting an online narrative that resonates, engages, and drives real results</p></center>
        <div class="container">
            <div class="row mr-0">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="posting_information">
                        <div class="growing_Audience">
                            <img src="../images/growing_icon.png" alt="">
                            <h5>growing your Audience</h5>
                            <p>"At Techability, we specialize in expanding your online reach and cultivating a thriving community around your brand.
                                Through targeted strategies and innovative techniques, we'll help you attract new followers,
                                increase visibility, and ultimately grow your audience organically. Let us pave the way for your
                                business to reach new heights in the digital landscape."
                            </p>
                        </div>
                        <div class="engaging_Audience">
                            <img src="../images/engaging_icon.png" alt="">
                            <h5>engaging your Audience</h5>
                            <p>"Engagement is key to building strong relationships with your audience. With Techability
                            , we go beyond simply reaching people – we ensure they're actively involved with your brand.
                            From compelling content creation to interactive campaigns, we'll captivate your audience's attention,
                            spark meaningful conversations, and foster loyalty that lasts a lifetime."</p>
                        </div>
                    </div>
                    <div class="attracting_Audience">
                        <img src="../images/attracting_icon.png" alt="">
                        <h5>attracting your Audience</h5>
                        <p>"Drawing in the right audience is essential for success in the digital world.
                            With Techability's strategic approach, we'll position your brand front and center,
                            making it irresistible to your target market. Through smart advertising, captivating visuals, and
                            compelling messaging, we'll attract the attention of potential customers and turn casual observers into
                            dedicated followers and loyal customers."</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="posting_banner_img" src="../images/posting_banner.png" alt="" width="600">
                </div>
            </div>
        </div>
    </section>
    <section class="influential_client">
        <div class="container">
            <div class="row mr-0">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="influential_client_img respon_img" src="../images/Main_icon.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                        <hr class="line">
                            <h6 class="business">endorse your buisness</h6>
                            <h1 class="influential_client_heading1">Elevate Your Brand, Engage Your Audience,</h1>
                            <h1 class="influential_client_heading2">and Dominate Your Market</h1>
                            <p class="influential_client_paragraph">At Techability, we're reshaping online marketing. Elevate your brand, engage your audience, and
                                dominate your market with us. Welcome to the future of digital success</p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        <a href="nextform.php"><button class="get_button" type="button">Get Started <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                        </div>
                        <div class="col-4">
                            <div class="live_chat">
                                <div class="icon">
                                    <img src="../images/chat.png" alt="">
                                </div>
                                <div class="icon_text">
                                    <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat">Live chat</h6>
                                    <p>Feel Free To Chat With Us</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="live_chat">
                                <div class="icon">
                                    <img src="../images/phone_icon.png" alt="">
                                </div>
                                <div class="icon_text">
                                    <a href="tel:+1 786 687 2266"><h6 class="text_us">Call Or Text Us</h6>
                                    <p> +1 786 687 2266</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="package_section">
        <div class="container">
            <center><hr class="line2"></center>
           <center><p class="package_paragraph1">our price model</p>
           <h1 class="package_heading1">that Suits <span>everyone!</span></h1>
        </center>
        <div class="package_cards">
            <div class="package_card1">
                <center><hr class="card_line"></center>
                <div class="name_container">
                    <h1>Basic Startup Package</h1>
                </div>
                <h2 class="offer_price">$200</h2>
                <h2 class="offer_price2">$100</h2>
               <center>
                <div class="details">
                <p>12 Post Design</p>
                <p>1 Short Videos</p>
                <p>Social Media Account Setup</p>
                <p>Social Media Page Management</p>
                <p>Professional Content</p>
                <p>Ad Campaign</p>
                <p>Live Customer Support</p>
                </div>
                <a href="nextform.php"><button class="get_button" type="button">Order Now <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                </center>
                <div class="chat_section2">
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/chat.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat2">Live chat</h6>
                            <p>Feel Free To Chat With Us</p></a>
                        </div>
                    </div>
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/phone_icon.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="tel:+1 786 687 2266"><h6 class="text_us2">Call Or Text Us</h6>
                            <p>+1 786 687 2266</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package_card2">
                <img class="offer_image" src="../images/offer.png" alt="" height="150">
                <center><hr class="card_line"></center>
                <div class="name_container2">
                    <h1> Gold Package</h1>
                </div>
                <h2 class="offer_price">$500</h2>
                <h2 class="offer_price2">$250</h2>
               <center>
                <div class="details2">
                <p>20 Post Design</p>
                <p>2 Short Videos</p>
                <p>Social Media Account Setup</p>
                <p>Social Media Page Management</p>
                <p>Professional Content</p>
                <p>Ad Campaign</p>
                <p>Live Customer Support</p>
                </div>
                <a href="nextform.php"><button class="get_button2" type="button">Order Now <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                </center>
                <div class="chat_section2">
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/chat.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat2">Live chat</h6>
                            <p>Feel Free To Chat With Us</p></a>
                        </div>
                    </div>
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/phone_icon.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="tel:+1 786 687 2266"><h6 class="text_us2">Call Or Text Us</h6>
                            <p>+1 786 687 2266</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package_card1">
                <center><hr class="card_line"></center>
                <div class="name_container">
                    <h1> Diamond Package</h1>
                </div>
                <h2 class="offer_price">$1000</h2>
                <h2 class="offer_price2">$500</h2>
               <center>
                <div class="details">
                <p>40 Post Design</p>
                <p>6 Short Videos</p>
                <p>Social Media Account Setup</p>
                <p>Social Media Page Management</p>
                <p>Professional Content</p>
                <p>Ad Campaign</p>
                <p>Live Customer Support</p>
                </div>
                <a href="nextform.php"><button class="get_button" type="button">Order Now <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                </center>
                <div class="chat_section2">
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/chat.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat2">Live chat</h6>
                            <p>Feel Free To Chat With Us</p></a>
                        </div>
                    </div>
                    <div class="live_chat">
                        <div class="icon2">
                            <img src="../images/phone_icon.png" alt="">
                        </div>
                        <div class="icon_text2">
                            <a href="tel:+1 786 687 2266"><h6 class="text_us2">Call Or Text Us</h6>
                            <p>+1 786 687 2266</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 
    </section>
    <section class="combo_packages">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <hr class="card_line">
                    <h6 class="combo_heading">combo packages</h6>
                    <h1 class="combo_heading2">all in one combo</h1>
                    <h1 class="combo_heading2">packages</h1>
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="element1">
                                <h6>logo design</h6>
                                <hr class="combo_line">
                                <ul>
                                    <li>8 Design Concepts</li>
                                    <li>Free Icon Design</li>
                                    <li>Unlimited Revisions</li>
                                    <li>3 Dedicated Designers</li>
                                    <li>Turnaround Time 24 - 48 hours</li>
                                    <li>Dedicated Account Manager</li>
                                </ul>
                            </div>
                            <div class="element2">
                                <h6>Stationary Design</h6>
                                <hr class="combo_line">
                                <ul>
                                    <li>Business Card Design</li>
                                    <li>Letterhead Design</li>
                                    <li>Envelope Design</li>
                                    <li>Email Signature Design</li>
                                    <li>Unlimited Revision</li>
                                </ul>
                            </div>
                            <div class="element2">
                                <h6>Social Media Marketing</h6>
                                <hr class="combo_line">
                                <ul>
                                    <li>3 Platforms</li>
                                    <li>18 Post Designs + Copywriting</li>
                                    <li>Social Media Marketing Strategy</li>
                                    <li>Competitive Analysis</li>
                                    <li>Brand Reputation Analysis</li>
                                    <li>Audit + Recommendation</li>
                                    <li>Community Management</li>
                                    <li>Monthly Reporting and Analytics</li>
                                    <li>3 GIF Creatives</li>
                                    <li>Content Calendar</li>
                                    <li>Industry & Keyword Research</li>
                                    <li>Social Media Copywriting</li>
                                    <li>Business Manager Setup</li>
                                    <li>3 Ads Campaign Setup</li>
                                    <li>A/B Testing</li>
                                    <li>Winning Adset Replication</li>
                                    <li>Monthly Ad Spend Management Fee Included</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="element2">
                        <h6>Website Design</h6>
                        <hr class="combo_line">
                        <ul>
                            <li>3 concepts</li>
                            <li>upto 10 Pages</li>
                            <li>Frontend Development</li>
                            <li>Backend Development</li>
                            <li>Content Management System (CMS)</li>
                            <li>Booking tool Functionality</li>
                            <li>Any 4 Social Media Platforms</li>
                            <li>Call to Actions</li>
                            <li>Animation and Effects</li>
                        </ul>
                    </div>
                    <div class="element2">
                        <h6>Search Engine Optimization</h6>
                        <hr class="combo_line">
                        <ul>
                            <li>10 Keywords</li>
                            <li>Guaranteed ranking on Google</li>
                            <li>Off-site optimization</li>
                            <li>On-site optimization</li>
                            <li>Link building</li>
                            <li>Social bookmarking</li>
                            <li>In-depth Site Analysis</li>
                            <li>Content duplicity check</li>
                            <li>Initial backlinks analysis</li>
                            <li>Google penalty check</li>
                            <li>Mobile usability check</li>
                            <li>Competition analysis</li>
                            <li>Keyword research</li>
                            <li>Title and meta tag optimization</li>
                            <li>Content optimization</li>
                        </ul>
                    </div>
                        </div>
                    </div>
                    <!-- button and icon banner start -->
                    <div class="row social_container">
                        <div class="col-lg-4">
                        <a href="nextform.php"><button class="get_button4" type="button">Get Started <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                        </div>
                        <div class="col-lg-4">
                        <div class="live_chat4">
                            <div class="icon4">
                                <img src="../images/chat.png" alt="">
                            </div>
                            <div class="icon_text4">
                                <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat4">Live chat</h6>
                                <p>Feel Free To Chat With Us</p></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="live_chat4">
                            <div class="icon4">
                                <img src="../images/phone_icon.png" alt="">
                            </div>
                            <div class="icon_text4">
                                <a href="tel:+1 786 687 2266"><h6 class="text_us4">Call Or Text Us</h6>
                                <p>+1 786 687 2266</p></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- button and icon banner end -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 combo_pach_col">
                    <img class="respon_img combo_pack_post" src="../images/combo_post.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <center><hr class="about_us_line"></center>
                    <h6>client testimonials</h6>
                    <h1 class="about_heading1">what they say</h1>
                    <h1 class="about_heading2">about us!</h1>
                    <div class="container">
                        <div class="owl-carousel owl-theme" style="margin-top:50px;">
                            <div class="item">
                                <div class="about_card">
                                    <img id="get_started_img" src="../images/quotes.png" alt="">
                                    <img id="square_img" src="../images/Vector Smart Object.png" alt="">
                                    <p class="card_para">Couldn't be happier with Techability's services</p>
                                    <h3>Emma</h3>
                                    <p class="card_para2">Small Business Owner</p>
                                </div>
                            </div>
                            <div class="item">
                            <div class="about_card">
                                    <img id="get_started_img" src="../images/quotes.png" alt="">
                                    <img id="square_img" src="../images/Vector Smart Object.png" alt="">
                                    <p class="card_para">Techability took our business to new heights!Techability took our business to new heights!</p>
                                    <h3>David</h3>
                                    <p class="card_para2">Entrepreneur</p>
                                </div>
                            </div>
                            <div class="item">
                            <div class="about_card">
                                    <img id="get_started_img" src="../images/quotes.png" alt="">
                                    <img id="square_img" src="../images/Vector Smart Object.png" alt="">
                                    <p class="card_para">Techability transformed my online presence!"</p>
                                    <h3>Sarah</h3>
                                    <p class="card_para2">CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                             <!-- <div class="card_container">
                                <img class="get_started_img" src="../images/quotes.png" alt="" width="120" height="100">
                                <img class="square_img" src="../images/Vector Smart Object.png" alt="">
                                <div class="about_card">
                                <p class="card_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sequi voluptatibus quos perspiciatis. Minima doloremque</p>
                                <h3>Mike Duke</h3>
                                <p class="card_para2">regular Customer</p>
                            </div> -->
                    </div>      
                </div>
            </div>
        </div>
    </section>
    <section class="get_in_touch">
            <div class="container">
                <div class="row mr-0">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="get_touch_section">
                        <a href="nextform.php"><button class="get_Touch_button" type="button">Get Started <i class="fa-solid fa-circle-arrow-right"></i></button></a>
                            <div class="get_touch_live_chat">
                                <div class="get_touch_icon">
                                    <img src="../images/chat.png" alt="">
                                </div>
                                <div class="get_touch_icon_text">
                                    <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="chat">Live chat</h6>
                                    <p>Feel Free To Chat With Us</p></a>
                                </div>
                            </div>
                            <div class="get_touch_live_chat">
                                <div class="get_touch_icon">
                                    <img src="../images/phone_icon.png" alt="">
                                </div>
                                <div class="get_touch_icon_text">
                                    <a href="tel:+1 786 687 2266"><h6 class="get_touch_text_us">Call Or Text Us</h6>
                                    <p>+1 786 687 2266</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section claas="get_started">
        <div class="container">
            <div class="row mr-0">
                <div class="col-lg-6 col-md-6 col-sm-12 form_column">
                    <hr class="started_ruler">
                    <h6 class="heading1">let creativity take over</h6>
                    <h1 class="heading2">let's get <span>started</span></h1>
                    <form action="" method="post">
                        <div class="box1">
                            <img src="../images/full_name_icon.png" alt="">
                            <input type="text" name="person_name" placeholder="Full Name" Required>
                        </div>
                        <div class="box2">
                            <img src="../images/business_name_icon.png" alt="">
                            <input type="text" name="business_name" placeholder="Business Name" Required>
                        </div>
                        <div class="box2">
                            <img src="../images/email_icon.png" alt="">
                            <input type="email" name="personal_email" placeholder="Email Address" Required>
                        </div>
                        <div class="box2">
                            <img src="../images/phonenum_icon.png" alt="">
                            <input type="number" name="personal_number" placeholder="Phone Number" Required>
                        </div>
                        <div class="box3">
                            <img src="../images/message_icon.png" alt="">
                            <input type="text" name="message" placeholder="Your Message Here...." Required>
                        </div>
                        <button class="get_button_form" type="submit" name="business_info">Send Now <i class="fa-solid fa-circle-arrow-right"></i></button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form_container">
                        <!-- <img class="information_image" src="../images/Group 201 copy.png" alt=""> -->
                        <img class="get_started_flag_img" src="../images/flag.png" alt="">
                        <img class="get_started_img2" src="../images/quotes.png" alt="">
                        <p class="get_started_para">Ask us anything, we have the friendliest customer service folks</p>
                        <a href="tel:+1 786 687 2266" style="text-decoration:none;"><h1 class="get_started_heading">+1 786 687 2266</h1></a>
                        <h1 class="get_started_heading">billing@techability.info</h1>
                        <div class="get_live_chat">
                            <div class="get_icon">
                                <img src="../images/chat.png" alt="">
                            </div>
                            <div class="get_icon_text">
                                <a href="#" onclick="window.$crisp.push(['do', 'chat:open'])"><h6 class="get_chat">Live chat</h6>
                                <p>Feel Free To Chat With Us</p></a>
                            </div>
                        </div>
                        <img class="phone_img" src="../images/Handset_Yellow.H09.2k.png" alt="" height="600">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="techability">
        <div class="container">
            <div class="row mr-0">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <center><hr class="techability_ruler"></center>
                    <center>
                        <img class="bg" src="../images/logo.png" alt="">
                        <p class="bg_paragraph">we're dedicated to propelling businesses of all sizes to new heights in the digital realm.
                            With our expert guidance and tailored strategies, we empower you to thrive online, connecting with your audience,
                            and achieving remarkable growth. Let's embark on this journey together and unlock the full potential of your business.
                            Welcome to the future of digital success.</p>
                    </center>
                </div>
            </div>
            <div class="row mr-0 information_sec">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <center><img class="respon_img" src="../images/card_logo.png" alt=""></center>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="all_right">&copy; 2024 All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="terms_condition"><a href="terms_condition.php">Terms & Conditions</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacy_policy.php">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/script.js"></script>
<script>
    function validateForm() {
        // Add your form validation logic here
        return true; // Return true if validation passes, false otherwise
    }
</script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    center:true,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>



</html>