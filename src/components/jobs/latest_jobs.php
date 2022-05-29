    <div class="job_listing_section">
        <div style="text-align: center;">
            <h1 class="section_heading">Browse the latest<span class="section_heading_red">jobs</span></h1>
            <p>Numerous medical institutions rely on us for their staffing needs.<br/>Our team sources and constantly updates the available positions in the top medical institutions across USA.</p>
        </div>
        <div id="jobs_hor_list" class="jobs_hor_list">
            <?php
                for ($x = 0; $x <= 11; $x++) {
                    include("./src/components/jobs/job_card.php");
                }
            ?>
        </div>
        <div class="pagination_comp">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>