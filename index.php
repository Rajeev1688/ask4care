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
                    <h1>Your healthcare staffing needs ends here.</h1>
                    <span class="banner_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_1.png"/>
        </div>
        <div>
            <div class="banner_content">
                <div class="content_inner">
                    <h1>Your healthcare staffing needs ends here.</h1>
                    <span class="banner_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_1.png"/>
        </div>
        <div>
            <div class="banner_content">
                <div class="content_inner">
                    <h1>Your healthcare staffing needs ends here.</h1>
                    <span class="banner_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                </div>
            </div>
            <div class="banner_overlay"></div>
            <img class="banner_img" src="./assets/images/banner_1.png"/>
        </div>
    </div>

    <!-- Why us -->
    <div class="why_us">
        <div class="why_us_left">
            <h1 class="section_heading">Why<span class="section_heading_red">us?</span></h1>
            <p class="mt_30">Ask4Care is unlike any other medical staffing agency you have come across. Our values and quality of service set us apart from the crowd and leave job-seekers with a lasting experience.</p>
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
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>Lorem Ipsum has been the industry's standard dummy</p>
        </div>
        <div class="service_list">
            <div class="service_card mr_30">
                <img src="./assets/images/service_1.png"/>
                <h3>Home Healthcare Aide</h3>
                <p>Home Healthcare Aides, provide in-home assistance with light house-keeping and activities of daily livin...</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card mr_30">
                <img src="./assets/images/service_1.png"/>
                <h3>Home Healthcare Aide</h3>
                <p>Home Healthcare Aides, provide in-home assistance with light house-keeping and activities of daily livin...</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card mr_30">
                <img src="./assets/images/service_1.png"/>
                <h3>Home Healthcare Aide</h3>
                <p>Home Healthcare Aides, provide in-home assistance with light house-keeping and activities of daily livin...</p>
                <button class="btn-outline">Know more</button>
            </div>
            <div class="service_card">
                <img src="./assets/images/service_1.png"/>
                <h3>Home Healthcare Aide</h3>
                <p>Home Healthcare Aides, provide in-home assistance with light house-keeping and activities of daily livin...</p>
                <button class="btn-outline">Know more</button>
            </div>
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
