<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
</head>

<body class="blog_page">
    <?php include("./src/components/header.php");?>
    <div class="blog_top_row">
        <?php include("./src/components/blogs/blog_details_component.php");?>
        <div class="blog_right_list">
            <h2 class="blog_section_head">Trending blogs</h2>
            <?php include("./src/components/blogs/blog_img_card.php");?>
            <?php include("./src/components/blogs/blog_small.php");?>
            <?php include("./src/components/blogs/blog_small.php");?>
        </div>
    </div>

    <div class="blog_3_col">
        <div>
            <h2 class="blog_section_head">Trending blogs</h2>
            <div>
                <?php include("./src/components/blogs/blog_big_card.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_minimal.php");?>
                <?php include("./src/components/blogs/blog_minimal.php");?>
            </div>
        </div>

        <div>
        <h2 class="blog_section_head">Most viewed blogs</h2>
            <div>
                <?php include("./src/components/blogs/blog_big_card.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_minimal.php");?>
                <?php include("./src/components/blogs/blog_minimal.php");?>
            </div>
        </div>

        <div>
            <h2 class="blog_section_head">Other blogs you may like</h2>
            <div class="other_blog_list">
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
                <?php include("./src/components/blogs/blog_small.php");?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>
    
<script>
    const links = document.querySelectorAll('.share_icons a');
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
<script>

</html>