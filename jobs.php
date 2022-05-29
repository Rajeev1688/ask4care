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
            <h1 class="section_heading">Helping candidates break into<br/>the perfect roles</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                <br/><br/>
                Need help with your job search? We're here for you!
            </p>
            <a class="header_link btn-outline" href="./contact.php">Contact Us</a>
        </div>
    </div>

    <?php include("./src/components/jobs/latest_jobs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</html>