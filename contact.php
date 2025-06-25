<?php
 include "config.php";
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo APP_NAME; ?> - Contact Form</title>
    
    <?php include "include/header-files.php"; ?>
    
</head>

<body>
<!-- Top Navbar for scrolling ticker -->
    <?php include "include/top-header.php"; ?>

<!-- end Top Navbar for scrolling ticker -->

<!-- main Logo Bar -->
    <?php include "include/header.php"; ?>

   <!-- main Logo Bar -->


<!--menu bar --> 
<!-- Navbar container -->
<?php include "include/nav.php"; ?>


<script>
    // Toggle menu function for mobile
    function toggleMenu() {
        const menu = document.querySelector('.menu');
        menu.classList.toggle('active');
    }
</script>
 <!-- menu bar Section Closed -->


<div class="form-container">
        <!-- <form id="registrationForm" method="post" action="<?php echo MAINURL; ?>vendor/mail.php"> -->
        <!-- Heading with green background and white text -->
        <h1 class="form-heading">Application For <?php echo APP_NAME; ?></h1> <br>

        <!-- Form Start -->
        <form id="registrationForm">
            <!-- Full Name -->
            <div class="form-group">
                <label for="firstName">Full Name <span class="required">*</span></label>
                <input type="text" id="firstName" placeholder="Full Name" name="fullname" required>
            </div>

           <!-- Father's/Husband's Name -->
<div class="form-group">
    <label for="fathersHusband">Father's/Husband's Name <span class="required">*</span></label>
    <input type="text" id="fathersHusband" placeholder="Father's/Husband's Name" name="fathersHusband" required>
</div>
            <!-- Mobile Number -->
            <div class="form-group">
                <label for="mobileNumber">Mobile Number <span class="required">*</span></label>
                <input type="text" id="mobileNumber" placeholder="Mobile Number" maxlength="10" name="mobileNumber" required>
            </div>

            <!-- E-mail ID -->
            <div class="form-group">
                <label for="email">E-mail ID <span class="required">*</span></label>
                <input type="email" id="email" placeholder="E-mail ID" name="email" required>
            </div>

            <!-- Full Address -->
            <div class="form-group">
                <label for="address">Full Address <span class="required">*</span></label>
                <textarea id="address" name="address" placeholder="Full Address" rows="3" required></textarea>
            </div>

            <!-- Aadhaar and PAN Card -->
            <div class="form-group">
                <label for="aadhaar">Aadhaar Card Number <span class="required">*</span></label>
                <input type="text" id="aadhaar" placeholder="Aadhaar Card Number" name="aadhaar" maxlength="12" required>
            </div>
            <div class="form-group">
                <label for="pan">PAN Card Number <span class="required">*</span></label>
                <input type="text" id="pan" placeholder="PAN Card Number" name="pan" maxlength="10" required>
            </div>

            <!-- Studio Size and Occupation -->
            <div class="form-group">
                <label for="plotSize">Select Studio Size <span class="required">*</span></label>
                <select id="plotSize" name="plotSize" required>
                    <option value="" disabled selected>Select Studio Size</option>
                   <option value="510 Sq. ft">510 Sq. ft</option>
                   <option value="650 Sq. ft">650 Sq. ft</option>
                </select>
            </div>

            <!-- Quota -->
            <div class="form-group">
                <label for="occupation">Select Quota <span class="required">*</span></label>
                <select id="occupation" name="occupation" required>
                    <option value="" disabled selected>Select Quota</option>
                    <option value="Govt Employee">Govt Employee</option>
					<option value="Ex Govt Employee">Ex Govt Employee</option>
                    <option value="Women Quota">Women Quota</option>
                    <option value="General Quota">General Quota</option>
                    <option value="Management Quota">Management Quota</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pan">Referred by</label>
                <input type="text" id="referred_by" placeholder="Referred by" name="referred_by">
            </div>

            <!-- Submit Button -->
            <button type="submit" name="ENQUIRY_FORM" class="submit-btn">Submit & Pay Now</button>

            <div id="formMessage" style="margin-top: 15px; display: none;"></div>
        </form>
        <section id="accountDetailsSection" style="display: none !important; margin-top: 20px;">
        <div class="all-content">
            <div class="content">
            <h2>Payment Details</h2>
    <p>Please make your payment using the details below:</p>
    <ul>
        <li><strong>Account Holder Name:</strong> Titania Infratech Private Limited</li>
        <li><strong>Bank Name:</strong> IndusInd Bank</li>
        <li><strong>Account Number:</strong> 201001408660</li>
        <li><strong>IFSC Code:</strong> INDB0000162</li>
    </ul>
            </div>
            <div class="img-area">
                <img src="<?php echo MAINURL; ?>assets/img/qr.jpg" alt="QR Code">
            </div>
</div>
        </section>
        
    </div> <br>

    <!-- Footer Section -->
    <?php include "include/footer.php"; ?>
    <?php include "include/footer-files.php"; ?>

    
    <script>
    $(document).ready(function () {
        $('#registrationForm').on('submit', function (event) {
            event.preventDefault(); // Prevent default form submission
            
            let formData = $(this).serialize(); // Serialize form data
            
            $.ajax({
                url: '<?php echo MAINURL; ?>vendor/mail.php', // Server-side script URL
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Parse the JSON response
                    let res = JSON.parse(response);
                    
                    if (res.status === 'success') {
                        // Show the success message below the button
                        $('#formMessage')
                            .html('<p style="color: green;">' + res.message + '</p>')
                            .slideDown();

                        // Show the account details section
                        $('#accountDetailsSection').slideDown();

                        // Optionally reset the form
                        $('#registrationForm')[0].reset();
                    } else {
                        // Show the error message below the button
                        $('#formMessage')
                            .html('<p style="color: red;">Error: ' + res.message + '</p>')
                            .slideDown();
                    }
                },
                error: function (xhr, status, error) {
                    // Show a generic error message below the button
                    $('#formMessage')
                        .html('<p style="color: red;">An error occurred. Please try again.</p>')
                        .slideDown();
                    console.error(error);
                }
            });
        });
    });
</script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl505716'},{'dcenter':'p3'},{'cp_id':'10107856'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js'></script>
</html>

