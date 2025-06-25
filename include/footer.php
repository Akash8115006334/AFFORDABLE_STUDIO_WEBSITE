<footer class="footer-container" id="Contact-us">
    <div class="container">
        <div class="row footer-content">
            <!-- Contact Information -->
            <div class="col-lg-4 footer-box">
                <h3>Contact Us</h3>
                <p><strong>Helpline No:</strong> <?php echo APP_NUMBER; ?></p>
            </div>
            
            <!-- Site Address -->
            <div class="col-lg-4 footer-box">
                <h3>E-mail</h3>
                <p><?php echo APP_EMAIL; ?></p>
                
            </div>
            
            <!-- Corporate Office -->
            <div class="col-lg-4 footer-box">
                <h3>Site Address</h3>
                <p><?php echo ADDRESS; ?></p>
            </div>
        </div>
        
        <!-- Disclaimer -->
        <div class="disclaimer-box">
            <h4>Disclaimer</h4>
            <p>This is the official website of <?php echo APP_NAME; ?>, it belongs to the Developer of the project being authorised through the license to develop obtained under above scheme. Thank you for visiting our website. This disclaimer ("Disclaimer") is applicable to this website and all microsites and websites owned by us. By using or accessing this website you agree with the Disclaimer without any qualification or limitation. Prices mentioned are subject to change without notice and Studio mentioned are subject to availability. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the company.</p>
            
        </div>

       <!-- Footer Links and Copyright -->
<div class="footer-links-copyright">
    <div class="footer-links">
        <a href="<?php echo MAINURL; ?>terms.php" target="_blank">Terms & Conditions</a>
        <a href="<?php echo MAINURL; ?>privacy.php" target="_blank">Privacy Policy</a>
        <a href="<?php echo MAINURL; ?>refund-and-cancellation.php" target="_blank">Refund & Cancellation Policy</a>
    </div>
    <div class="copyright-info">
        <div class="content">
        <p>&copy; Copyright ️ 2024 <?php echo APP_NAME; ?> - All rights reserved</p>
        <p class="visitor-count">Page Visitor : <strong id="visitor-count">10,000</strong></p>
        <p>Website: <a href="<?php echo DOMAIN; ?>"><?php echo DOMAIN; ?></a></p>
        </div>
        <div class="img-area">
            <img src="<?php echo MAINURL; ?>assets/img/digital-india.png" alt="Digital India">
        </div>
    </div>
</div>
</div>
</footer>

<!-- start fixed bottom button  -->
<div class="nikita-fixed-bottom-section">
    <a href="<?php echo $ContactPage; ?>"><?php echo $RegistrationStatus; ?></a>
</div>
<!-- end fixed bottom button  -->

<!--Start Mobile icon right side-->
<div class="mobile-icon-right-side">
    <a href="https://wa.me/<?php echo APP_NUMBER; ?>">
    <span class="phone-icon"><img src="<?php echo MAINURL; ?>assets/img/wlogo.png" alt=""></span>
    </a>
    
</div>

<button id="scrollToTopBtn" title="Go to top">&#8593;</button>

<script>
        // Function to generate a random number between min and max
        function getRandomIncrement(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        // Initialize or update the visitor count
        function updateVisitorCount() {
            const visitorCountKey = "visitorCount";
            const lastUpdateKey = "lastUpdate";

            // Retrieve the current visitor count and last update date from localStorage
            let visitorCount = localStorage.getItem(visitorCountKey);
            let lastUpdate = localStorage.getItem(lastUpdateKey);

            const today = new Date().toDateString();

            if (!visitorCount) {
                // Initialize visitor count to 10,000 if not set
                visitorCount = 10000;
            } else {
                visitorCount = parseInt(visitorCount, 10);
            }

            if (lastUpdate !== today) {
                // Increment visitor count by a random value between 150-200 if it's a new day
                visitorCount += getRandomIncrement(150, 200);

                // Update the last update date and visitor count in localStorage
                localStorage.setItem(visitorCountKey, visitorCount);
                localStorage.setItem(lastUpdateKey, today);
            }

            // Update the visitor count on the page
            document.getElementById("visitor-count").textContent = visitorCount.toLocaleString();
        }

        // Run the update function on page load
        updateVisitorCount();
    </script>