<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask4Care</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <?php include("./src/components/common_imports.php");?>
</head>

<body>
    <?php include("./src/components/header.php");?>

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
            <h1 class="section_heading" data-aos="fade-up">Why<span class="section_heading_red">us?</span></h1>
            <p class="mt_30" data-aos="fade-up" data-aos-delay="200">Ask4Care is a leading agency in the medical staffing and homecare services fields, specializing in helping hospitals, nursing homes, skilled nursing facilities, rehab centers and other medical institutions. We help with screening, hiring and placing verified talent with relevant industry experience. Our value proposition and quality of service set us apart from the crowd and leaves both job-seekers and employers with an exemplary experience.</p>
            <div class="why_list">
                <div class="why_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why_list_top">
                        <i class="fa-solid fa-hand-holding-heart" style="color: #3E4E9B"></i>
                        <span>Caring with a smile</span>
                    </div>
                    <p>Join a family of institutions who trust Ask4Care to be their only medical staffing and homecare solutions provider.</p>
                </div>
                <div class="why_card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why_list_top">
                        <i class="fa-solid fa-graduation-cap" style="color: #FFD600"></i>
                        <span>Qualified staff</span>
                    </div>
                    <p>Our team helps you in screening and hiring the right set of candidates with relevant industry experience.</p>
                </div>
                <div class="why_card" data-aos="fade-up" data-aos-delay="500">
                    <div class="why_list_top">  
                        <i class="fa-solid fa-comment-dots" style="color: #00EDA6"></i>
                        <span>Passionate about care</span>
                    </div>
                    <p>We believe in enabling others to have the best possible talent to provide an exceptional level of care to their patients.</p>
                </div>
            </div>
        </div>
        <div>
            <img src="./assets/images/why_us_img.png"/>
        </div>
    </div>

    <!-- Our services -->
    <div class="services_new" data-aos="fade-up">
        <div>
            <h1 class="section_heading">Staffing services for all<br/>medical needs</h1>
            <p class="services_subhead">Healthcare services delivered by experienced medical personnel to cater to all your healthcare staffing and homecare service needs.</p>
            <div class="service_new_list">
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="200">Licensed Practical Nurse</div></a>
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="400">Registered Nurse</div></a>
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="600">Direct Care Worker</div></a>
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="800">Speech Therapist</div></a>
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="1000">Occupational Therapist</div></a>
                <a class="link_no_dec" href="./service-details.php"><div class="service_tab" data-aos="fade-in" data-aos-delay="1200">CNA</div></a>
            </div>
            <p>Healthcare services delivered by experienced medical personnel to cater to all your healthcare staffing needs. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <a class="header_link contact_btn" href="./contact.php">Get in touch<i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div>
            <img src="./assets/images/services_new_img.png"/>
        </div>
    </div>

    <!-- Locations -->
    <?php include("./src/components/locations/locations_section.php");?>

    <!-- Jobs -->
    <?php include("./src/components/jobs/recent_jobs_section.php");?>

    <!-- Recent Blogs -->
    <?php include("./src/components/blogs/recent_blogs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<?php include("./src/components/common_js.php");?>
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
            dots: true,
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
