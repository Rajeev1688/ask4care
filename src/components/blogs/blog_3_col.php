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
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        include("./src/components/blogs/blog_small.php");
                    }
                ?>
            </div>
        </div>
    </div>