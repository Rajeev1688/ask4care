<?php include("./src/components/header.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A4H</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
</head>

<body>
    <!-- Banner -->
    <div class="slick_banner">
        <div>
            <div class="banner_content">
                <div class="content_inner">
                    <h1>Your healthcare staffing needs end here.</h1>
                    <span class="banner_para">Ask4Care is a leading medical staffing solutions provider in USA. Join us to get access to hundreds of jobs to land up with your dream role.</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_1.png"/>
        </div>
        <div>
            <div class="banner_content">
                <div class="content_inner">
                    <h1>The best jobs all across USA</h1>
                    <span class="banner_para">Our team ensures you get a curated list of jobs across all roles and locations from some of the most reputed healthcare institutions across USA</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_2.jpg"/>
        </div>
        <div>
            <div class="banner_content">
                <div class="content_inner">
                    <h1>A reliable staffing partner</h1>
                    <span class="banner_para">We work with healthcare institutions across the country and help them hire the best talent effortlessly, delivering a seamless staffing experience</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_3.jpg"/>
        </div>
    </div>

    <!-- Why us -->
    <div class="why_us">
        <div class="why_us_left">
            <h1 class="section_heading">Why<span class="section_heading_red">us?</span></h1>
            <p class="mt_30">Ask4Care is a leading medical staffing agency specializing in helping hospitals, nursing homes, and other medical institutions hire screen and verified talent with relevant industry experience. Our value proposition and quality of service set us apart from the crowd and leave both job-seekers and employers with a satisfactory experience.</p>
            <div class="why_list">
                <div class="why_card">
                    <div class="why_list_top">
                        <i class="fa-solid fa-hand-holding-heart" style="color: #3E4E9B"></i>
                        <span>Caring with a smile</span>
                    </div>
                    <p>It’s not what we do as a Support Staff Solutions Provider, but how we do it. All of our elderly caregiving services are delivered with a smile.</p>
                </div>
                <div class="why_card">
                    <div class="why_list_top">
                        <i class="fa-solid fa-graduation-cap" style="color: #FFD600"></i>
                        <span>Qualified staff</span>
                    </div>
                    <p>Whether you just need someone to take you for a walk or to provide attentive complex caring – we as a Support Staff Solutions.</p>
                </div>
                <div class="why_card">
                    <div class="why_list_top">  
                        <i class="fa-solid fa-comment-dots" style="color: #00EDA6"></i>
                        <span>Attentive listener</span>
                    </div>
                    <p>How do you like things done? Where would you like to go? Listening to your needs, and having conversations with you, help us make sure.</p>
                </div>
            </div>
        </div>
        <div>
            <img src="./assets/images/why_us_img.png"/>
        </div>
    </div>

    <!-- Our services -->
    <div class="services">
        <div class="services_header">
            <h1 class="section_heading">Our<span class="section_heading_red">services</span></h1>
            <p>Healthcare services delivered by experienced medical personnel<br/>to cater to all your healthcare staffing needs.</p>
        </div>
        <div class="service_list">
            <div class="service_card mr_30">
                <img src="./assets/images/service_1.png"/>
                <h3>Licensed Practical Nurse</h3>
                <p>Find nurses experienced in providing primary care to patients and assistance to RNs and doctors. They are experienced in taking vitals, administering</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card mr_30">
                <img src="./assets/images/rn_service.jpg"/>
                <h3>Registered Nurse</h3>
                <p>RNs provide hands-on care to the patients, and are responsible for the daily tasks around patient care and administration. They cover both inpatients and</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card mr_30">
                <img src="./assets/images/dcw_service.jpg"/>
                <h3>Direct Care Worker</h3>
                <p>To avail dedicated medical assistance for the patients who require help in performing daily activities, Direct Care Workers are the perfect choice. They are</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card">
                <img src="./assets/images/pt_service.jpg"/>
                <h3>Physical Therapist</h3>
                <p>They specialize in treating human body disorders which may be related to a disability, an injury, or other health conditions. They are one of the allied health</p>
                <button class="btn-outline">Know more</button>
            </div>
        </div>
    </div>

    <div class="services_new">
        <div>
            <h1 class="section_heading">Staffing services for all<br/>medical needs</h1>
            <p class="services_subhead">Healthcare services delivered by experienced medical personnel to cater <br/>to all your healthcare staffing needs.</p>
            <div class="service_new_list">
                <div class="service_tab">Licensed Practical Nurse</div>
                <div class="service_tab">Licensed Practical Nurse</div>
                <div class="service_tab">Licensed Practical Nurse</div>
                <div class="service_tab">Licensed Practical Nurse</div>
            </div>
            <p>Healthcare services delivered by experienced medical personnel to cater to all your healthcare staffing needs. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="header_link contact_btn">Get in touch<i class="fa-solid fa-arrow-right-long"></i></div>
        </div>
        <div>
            <img src="./assets/images/services_new_img.png"/>
        </div>
    </div>

    <!-- Locations -->
    <?php include("./src/components/locations.php");?>

    <!-- Jobs -->
    <?php include("./src/components/jobs.php");?>

    <!-- Recent Blogs -->
    <?php include("./src/components/recent_blogs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slick_banner').slick({
            autoplay: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            speed: 3000,
            arrows: false,
            fade: true,
            dots: true
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.service_list').slick({
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.jobs_list').slick({
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });
    });
</script>

</html>
