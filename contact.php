<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
</head>

<body class="about_page">
    <?php include("./src/components/header.php");?>
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
                <div><i class="fa-solid fa-location-dot icon"></i><span>365A Wilson Avenue, Suite 205,<br/>Torronto, on M3H 1T3</span></div>
                <div><i class="fa-solid fa-phone icon"></i><span>+647 557 3321</span></div>
                <div><i class="fa-solid fa-envelope icon"></i><span>contact@ask4care.com</span></div>
            </div>
            <div class="share_icons">
                <a class="link_no_dec facebook" href="https://www.facebook.com/sharer.php?u={url}" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="link_no_dec twitter" href="https://twitter.com/intent/tweet?url={url}&text={title}" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a class="link_no_dec linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}" title="Linkedin" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a class="link_no_dec whatsapp" href="https://api.whatsapp.com/send?text={url}" data-action="share/whatsapp/share"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="contact_form">
            <h2>Contact Us</h2>
            <p>Please fill in the details below</p>
            <input class="white_input" type="text" placeholder="full name..."/>
            <div class="input_grid">
                <input class="white_input" type="email" placeholder="your email..."/>
                <input class="white_input" type="email" placeholder="your phone number..."/>
            </div>
            <div class="input_grid">
                <select class="white_input" name="interested" id="interested">
                    <option value="" disabled selected>i'm interetsed in</option>
                    <option value="self">care for self</option>
                    <option value="patient">care for patient(s)</option>
                    <option value="other">care for other</option>
                    <option value="career">career oppurtunities</option>
                </select>
                <select class="white_input" name="hear" id="hear">
                    <option value="How did you hear about us?">how did you hear about us?</option>
                    <option value="Newspaper/Magazine">newspaper/magazine</option>
                    <option value="Web Search">web search</option>
                    <option value="Sign/Office Location">sign/office location</option
                    ><option value="Healthcare Professional">healthcare professional</option>
                    <option value="Family/Friend">family/friend</option>
                    <option value="Other">other</option>
                </select>
            </div>
            <textarea rows="4" class="white_input" placeholder="message..."></textarea>
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

<?php include("./src/components/common_js.php");?>

</html>