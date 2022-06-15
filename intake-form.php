<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./src/components/common_imports.php");?> 
</head>

<body class="about_page">
    <?php include("./src/components/header.php");?>
    <div class="page_banner">
        <div class="page_banner_content">
            <h1 class="section_heading">We hear you</h1>
            <p>Have an equiry or a feedback? Drop us a line and we will get back to you at the earliest.</p>
        </div>
        <img src="./assets/images/about_img.png"/>
    </div>
    <div class="intake_form">
        <form method="post" novalidate="novalidate" id="intakeForm">
            <div class="input_grid_single">
                <div>
                    <label>Full name</label><br>
                    <input type="text" class="form-control" name="full_name" placeholder="full name">
                </div>
            </div>
            <div class="input_grid">
                <div>
                    <label>Age</label><br>
                    <input type="number" class="form-control" name="age" placeholder="age">
                </div>
                <div>
                    <label>Gender</label><br>
                    <select name="gender" id="gender">
                        <option value="" disabled selected>your gender</option>
                        <option value="saab">Male</option>
                        <option value="opel">Female</option>
                    </select>
                </div>
            </div>
            <div class="input_grid_single">
                <div>
                    <label>Diagnosis</label><br>
                    <input type="text" class="form-control" name="diagnosis" placeholder="high blood pressure/ diabetics, dementia, he cannot go to wash room">
                </div>
            </div>
            <div class="input_grid">
                <div>
                    <label>DAYS/HOURS OF PSW SERVICE REQUIRED</label><br>
                    <input type="text" class="form-control" name="full_name" placeholder="days/hours of psw">
                </div>
                <div>
                    <label>Email address</label><br>
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>
            </div>
            <div class="input_grid">
                <div>
                    <label>RATES AGREED</label><br>
                    <input type="number" class="form-control" name="age" placeholder="age">
                </div>
                <div>
                    <label>GENDER PREFERENCE</label><br>
                    <select name="gender" id="gender">
                        <option value="" disabled selected>preferred gender</option>
                        <option value="saab">Male</option>
                        <option value="opel">Female</option>
                    </select>
                </div>
            </div>            
            <div class="input_grid_single">
                <div>
                    <label>OTHER PREFERENCE</label><br>
                    <input type="text" class="form-control" name="diagnosis" placeholder="preferences (if any)">
                </div>
            </div>
            <div class="input_grid_single">
                <div>
                    <label>ADDITIONAL NOTES</label><br>
                    <input type="text" class="form-control" name="diagnosis" placeholder="">
                </div>
            </div>
            <div class="input_grid_single">
                <div>
                    <label>SPECIFIC REQUIREMENTS</label><br>
                    <input type="text" class="form-control" name="diagnosis" placeholder="specific Requirements if required (Yes or No)">
                </div>
            </div>
            <div class="input_grid_single">
                <div>
                    <label>ASSIGNMENT ADDRESS AND PHONE</label><br>
                    <input type="text" class="form-control" name="diagnosis" placeholder="address and phone number">
                </div>
            </div>

            <h3 class="disclaimer">Billing Information</h3>
            <div class="input_grid">
                <div>
                    <label>NAME OF POA/GUARDIAN</label><br>
                    <input type="text" class="form-control" name="full_name" placeholder="enter Name of poa/gurdian">
                </div>
                <div>
                    <label>RELATIONSHIP TO PERSON SUPPORTED</label><br>
                    <input type="text" class="form-control" name="email" placeholder="enter relationship to person supported">
                </div>
            </div>
            <div class="input_grid_single">
                <label>BILLING ADDRESS</label><br>
                <textarea class="form-control" name="message" placeholder="enter billing address" rows="4"></textarea>
            </div>
            <div class="input_grid">
                <div>
                    <label>PHONE NUMBER</label><br>
                    <input type="text" class="form-control" name="full_name" placeholder="enter phone number">
                </div>
                <div>
                    <label>E-MAIL ADDRESS</label><br>
                    <input type="text" class="form-control" name="email" placeholder="enter email address">
                </div>
            </div>

            <div class="disclaimer">
                <h3>Mutual Non-Solicitation</h3>
                <p>You agree that you will not hire or offer employment to, or otherwise use the services of, directly or indirectly, in a full-time, part-time or temporary capacity, any ASK4CARE personnel unless a mutual agreement is reached.</p>

                <p>You also agree NOT to directly or indirectly solicit for hire or employment without the consent of ASK4CARE, any employee with whom you may have had contact during the term of this Agreement.</p>

                <p style="display: grid; grid-template-columns: 20px 1fr;"><span><input type="checkbox" value="agreed"></span><span>"The POA / Next of Kin has read and agreed to the details as indicated on this form and hereby agree to discharge payments to settle this account on a periodic basis as per invoice."</span></p>
            </div>
            <div>
                <button type="submit" class="btn-outline btn-blue">Send Form</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <?php include("./src/components/footer.php");?>

</body>

<?php include("./src/components/common_js.php");?>

</html>