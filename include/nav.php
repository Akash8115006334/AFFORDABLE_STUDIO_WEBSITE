<nav class="navbar">
    <!-- Toggle Button for mobile -->
    <button class="toggle-btn" onclick="toggleMenu()">&#9776;</button>

    <!-- Helpline section -->
    <div class="helpline">
        <span>Helpline: </span>
        <span class="mobile-number"><?php echo APP_NUMBER; ?></span>
    </div>

    <!-- Menu for desktop -->
    <div class="menu">
        <a href="<?php echo MAINURL; ?>">Home</a>
        <a href="<?php echo MAINURL; ?>#about">About Us</a>
        <a href="<?php echo MAINURL; ?>#siteplan">Site Plan</a>
        <a href="<?php echo MAINURL; ?>#paymentplan">Payment Plan</a>
        <a href="<?php echo MAINURL; ?>#Contact-us">Contact Us</a>
    </div>

    
<!-- Mobile menu -->
<div class="mobile-menu">
    <a href="<?php echo MAINURL; ?>">Home</a>
    <a href="<?php echo MAINURL; ?>#about">About Us</a>
    <a href="<?php echo MAINURL; ?>#siteplan">Site Plan</a>
    <a href="<?php echo MAINURL; ?>#paymentplan">Payment Plan</a>
    <a href="<?php echo MAINURL; ?>#Contact-us">Contact Us</a>
</div>

    <!-- Buttons -->
    <div class="top-buttons">
        <button class="button-green">
            <a href="<?php echo $ContactPage; ?>">
                <span class="blink"><?php echo $RegistrationStatus; ?></span>
            </a>
        </button>
        <button class="button-orange" id="openPopup">
        <span class="blink">Rate Revising 7800 Sq. ft</span>
        </button>
    </div>
</nav>