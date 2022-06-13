<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
</head>

<body class="">
    <?php include("./src/components/header.php");?>
    <div class="page_banner location_details_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">Welcome to New York</h1>
        </div>
        <div class="banner_overlay"></div>
        <img src="./assets/images/new_york.jpg"/>
    </div>

    <div class="locations_list locations_page_list">
        <?php
            for ($x = 0; $x <= 1; $x++) {
                include("./src/components/locations/location_card.php");
            }
        ?>
    </div>

    <?php include("./src/components/jobs/recent_jobs_section.php");?>

    <?php include("./src/components/blogs/recent_blogs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<?php include("./src/components/common_js.php");?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.jobs_list').slick({
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            responsive: [
                {
                    breakpoint: 1000,
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