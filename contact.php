<?php include("./src/components/header.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body class="about_page">
    <div class="page_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">We hear you</h1>
            <p>Have an equiry or a feedback? Drop us a line and we will get back to you at the earliest.</p>
        </div>
        <img src="./assets/images/contact_banner.png"/>
    </div>
    <div class="contact_content">
        <div>
            <h2>Drop us a line</h2>
            <div class="contact_list">
                <div><i class="fa-solid fa-location-dot"></i><span>365A Wilson Avenue, Suite 205,<br/>Torronto, on M3H 1T3</span></div>
                <div><i class="fa-solid fa-phone"></i><span>+647 557 3321</span></div>
                <div><i class="fa-solid fa-envelope"></i><span>contact@ask4care.com</span></div>
            </div>
        </div>
        <div class="contact_form">
            <h2>Contact Us</h2>
            <p>Please fill in the details below</p>
            <input class="white_input" type="text" placeholder="Enter your name..."/>
            <input class="white_input" type="email" placeholder="Enter your email..."/>
            <textarea rows="4" class="white_input" placeholder="Enter your name..."></textarea>
            <div>
                <input class="btn-outline btn-white" type="submit" value="Submit">
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="//maps.google.com/maps?q=53.3381768,-6.2613077&z=15&output=embed"></iframe>
    </div>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

</html>