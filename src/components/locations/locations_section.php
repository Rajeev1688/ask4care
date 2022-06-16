<div class="locations" data-aos="fade-up">
    <h2 class="section_heading">Where are we<span class="section_heading_red">located<span></h2>
    <p>We have spread our wings to multiple locations across USA and are constantly growing.<br/>Click on the locations below to take the first step towards a better career and landing your dream role.<p>
    <!-- <div class="locations_list">
        <?php
            for ($x = 0; $x <= 3; $x++) {
                include("./src/components/locations/location_card.php");
            }
        ?>
    </div>
    <div class="locations_list_2">
        <?php
            for ($x = 0; $x <= 0; $x++) {
                include("./src/components/locations/location_card.php");
            }
        ?>    
        <div class="location_search" data-aos="fade-in" data-aos-delay="400">
            <div>Find your dream job</div>
            <form action="./index.php">
                <select name="jobs" id="jobs">
                    <option value="" disabled selected>Select your location</option>
                    <option value="saab">Alaska</option>
                    <option value="opel">Europe</option>
                    <option value="audi">USA</option>
                </select>
                <input class="btn-outline btn-blue" type="submit" value="Search">
            </form>
        </div>
        <?php
            for ($x = 0; $x <= 0; $x++) {
                include("./src/components/locations/location_card.php");
            }
        ?> 
    </div>
    <div class="locations_list">
        <?php
            for ($x = 0; $x <= 3; $x++) {
                include("./src/components/locations/location_card.php");
            }
        ?> 
    </div> -->

    <div class="locations_list">
        <div class="location_card">
            <span>Chicago</span>    
            <img src="./assets/images/chicago.jpg" />
            <div>
                <h3>View Jobs</h3>
            </div>
            <a class="link_no_dec" href="./location-details.php"></a>
        </div>

        <div class="location_card">
            <span>Coming Soon</span>    
            <img src="./assets/images/location_1.png" />
            <div>
                <h3>Stay tuned</h3>
            </div>
        </div>
    </div>
</div>