<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="blog_page blog_details_page">
    <?php include("./src/components/header.php");?>
    <div class="page_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">One step closer to your dream job</h1>
            <p>Browse through a plethora of curated jobs from the top medical institutions across USA.</p>
        </div>
        <img src="./assets/images/jobs_banner.png"/>
    </div>

    <div class="job_promo">
        <img src="./assets/images/jobs_promo_img.png"/>
        <div>
            <h1 class="section_heading" data-aos="fade-up">Helping candidates break into<br/>the perfect roles</h1>
            <p data-aos="fade-up" data-aos-delay="200">Over the years, we have helped numerous candidates land with their dream job roles. Our team has helped them with their search and got them placed in renowned medical institutions in Illinois. Job seekers keep coming back to us for the exceptional experience they get in their placement journey.
                <br/><br/>
                Need help with your job search? We're here for you!
            </p>
            <a class="link_no_dec" href="./contact.php" data-aos="fade-up" data-aos-delay="400"><button class="btn-outline btn-blue">Get in touch</button></a>
        </div>
    </div>

    <?php include("./src/components/jobs/latest_jobs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php include("./src/components/common_js.php");?>

</html>