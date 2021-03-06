<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
    <?php include("./src/components/header.php");?>
    <div class="page_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">Nursing</h1>
            <p>Helping candidates find their perfect fit for nursing jobs.</p>
        </div>
        <img src="./assets/images/services_details_banner.png"/>
    </div>
    <div class="job_details_cont">
        <div class="job_details_left">
            <h1>Nursing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <?php include("./src/components/share_component.php");?>
        </div>
        <div class="job_details_right">
            <h1>Some of our other services</h1>
            <div class="job_card_list">
                <?php
                    for ($x = 0; $x <= 2; $x++) {
                        include("./src/components/service_card.php");
                    }
                ?>
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