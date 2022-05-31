<div class="blog_section">
    <h2 class="section_heading text_center">Recent<span class="section_heading_red">blog posts</span></h2>
    <div class="blog_layout">
        <?php include("./src/components/blogs/blog_big_card.php"); ?>
        <div class="blog_small_list">
            <?php
                for ($x = 0; $x <= 3; $x++) {
                    include("./src/components/blogs/blog_small.php");
                }
            ?>
        </div>
    </div>
</div>