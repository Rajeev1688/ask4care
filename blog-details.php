<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
</head>

<body class="blog_page blog_details_page">
    <?php include("./src/components/header.php");?>
    <div class="blog_top_row">
        <?php include("./src/components/blogs/blog_details_component.php");?>
        <div class="blog_details_top_right">
            <h2 class="blog_section_head">Trending blogs</h2>
            <div class="blog_right_list">
                <?php
                    for ($x = 0; $x <= 7; $x++) {
                        include("./src/components/blogs/blog_small.php");
                    }
                ?>
            </div>
        </div>
    </div>

    <?php include("./src/components/blogs/blog_3_col.php");?>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<?php include("./src/components/common_js.php");?>
<script>
    $(document).ready(function(){
        console.log("sdfsdf");
        const links = document.querySelectorAll('.share_icons a');
        console.log(links);
        function onClick(event) {
            event.preventDefault();

            window.open(
                event.currentTarget.href,
                'Поделиться',
                'width=600,height=500,location=no,menubar=no,toolbar=no'
            );
        }
        links.forEach((link) => {
            const url = encodeURIComponent(window.location.origin + window.location.pathname);
            const title = encodeURIComponent(document.title);

            link.href = link.href
                .replace('{url}', url)
                .replace('{title}', title);

            link.addEventListener('click', onClick);
        });
    });
</script>
<script>

</html>