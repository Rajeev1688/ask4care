<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="blog_page blog_details_page upload_video_page">
    <?php include("./src/components/header.php");?>
    <div class="page_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">Upload your resume</h1>
            <p>Take the next step and upload your resume. Our team will get in touch with you soon.</p>
        </div>
        <img src="./assets/images/resume_banner.png"/>
    </div>

    <div class="job_promo">
        <img src="./assets/images/jobs_promo_img.png"/>
        <div>
            <div class="upload_form">
                <h1 class="section_heading">Submit your resume</h1>
                <form class="career-form" method="post" novalidate="novalidate" id="careerForm">
                    <div class="input_flex">
                        <input type="text" class="form-control" name="full_name" placeholder="Your full name*">
                        <input type="text" class="form-control" name="email" placeholder="Email*">
                    </div>
                    <div class="input_flex">
                        <input type="text" class="form-control" name="mobile" placeholder="Your Phone">
                        <input type="file" class="form-control" name="file" id="file" placeholder="Resume">
                    </div>
                    <div>
                        <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn-outline btn-blue">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("./src/components/jobs/latest_jobs.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<?php include("./src/components/common_js.php");?>

</html>