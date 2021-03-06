<!DOCTYPE html>
<html lang="en">
    <?php include("./src/components/common_imports.php");?>
<head>
    
</head>

<body class="blog_page">
    <?php include("./src/components/header.php");?>
    <div class="blog_top_row" data-aos="fade-in">
        <?php include("./src/components/blogs/blog_img_card.php");?>
        <div class="blog_right_list" data-aos="fade-in" data-aos-delay="300">
            <?php include("./src/components/blogs/blog_img_card.php");?>
            <?php include("./src/components/blogs/blog_small.php");?>
            <?php include("./src/components/blogs/blog_small.php");?>
        </div>
    </div>

    <?php include("./src/components/blogs/blog_3_col.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<?php include("./src/components/common_js.php");?>

</html>