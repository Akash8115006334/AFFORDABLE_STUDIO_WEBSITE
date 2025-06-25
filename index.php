<?php include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php echo APP_NAME; ?> | Affordable Studios in Greater Noida</title>

    <!-- Meta Description -->
    <meta name="description" content="<?php echo APP_NAME; ?> Offers Studios in Greater Noida. with multiple benefits. Register today for ₹21,000 only.">

    <!-- Keywords -->
    <meta name="keywords" content="<?php echo APP_NAME; ?>, Greater Noida, affordable studios greater noida, studios in greater noida, residential studios greater noida">

    <!-- Open Graph for Social Sharing -->
    <meta property="og:title" content="<?php echo APP_NAME; ?> | Affordable Studios in Greater Noida">
    <meta property="og:description" content="Discover affordable studios in Greater Noida. Apply now for secure and affordable housing.">
    <meta property="og:url" content="<?php echo MAINURL; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo APP_NAME; ?> | Affordable Studios">
    <meta name="twitter:description" content="Affordable studios in Greater Noida. loan options available.">
    <meta name="twitter:image" content="<?php echo MAINURL; ?>assets/img/main-banner.jpeg">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <!-- Social Media Links -->
    <meta property="og:site_name" content="<?php echo APP_NAME; ?>">
    <meta property="og:locale" content="en_IN">

<?php include "include/header-files.php";?>

</head>
<body>

<!-- Top Navbar for scrolling ticker -->
<?php include "include/top-header.php";?>

<!-- end Top Navbar for scrolling ticker -->

<!-- main Logo Bar -->
<?php include "include/header.php";?>

   <!-- main Logo Bar -->


<!--menu bar -->
<!-- Navbar container -->
<?php include "include/nav.php";?>


<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('active');

        // Automatically close the menu after 5 seconds (5000 ms)
        setTimeout(function () {
            mobileMenu.classList.remove('active');
        }, 5000); // Adjust time as per your preference
    }
</script>


<!-- Popup Modal -->
<div id="" class="popup-overlay">
    <div class="popup-container">
        <span class="close-btn" id="closePopup">&times; <small>Close</small></span>
        <div class="popup-content">
            <img src="<?php echo MAINURL; ?>assets/img/spiti%20certificate/spiti%20certificate_page-000.html" alt="A4 Size Image" class="popup-image">
        </div>
    </div>
</div>
<script>
// Get the popup and buttons
const popup = document.getElementById('imagePopup');
const openBtn = document.getElementById('openPopup'); // Trigger on the RERA button
const closeBtn = document.getElementById('closePopup');

// Open the popup when clicking the 'RERA-GRG-PROJ-1520-2023' button
openBtn.addEventListener('click', function() {
    popup.style.display = 'flex'; // Show the popup
});

// Close the popup when clicking the 'close' button
closeBtn.addEventListener('click', function() {
    popup.style.display = 'none'; // Hide the popup
});

// Close the popup when clicking outside the popup content
popup.addEventListener('click', function(event) {
    if (event.target === popup) {
        popup.style.display = 'none'; // Hide the popup
    }
});
</script>
</nav>

<script>
    // Toggle menu function for mobile
    function toggleMenu() {
        const menu = document.querySelector('.menu');
        menu.classList.toggle('active');
    }
</script>
 <!-- menu bar Section Closed -->

    <!-- Hero Section Container -->
<div class="hero-section">
    <!-- Left side Image -->
    <div class="hero-image">
        <img src="<?php echo MAINURL; ?>assets/img/updated-banner.png" alt="Hero Image">
    </div>

	<!-- Right hero Content -->
	<div class="hero-content">
        <h1>Luxury <?php echo APP_NAME; ?></h1>
        <h2>Starting Price - 36.66 Lakhs*</h2>
        <hr>
        <p class="location"><?php echo ADDRESS; ?></p>
        <h2>Luxury <?php echo APP_NAME; ?> in Greater Noida</h2>

        <ul class="features">
            <li>✔ Project Area - 18,000 Sq. ft</li>
            <li> Available Sizes: 510 - 650 (Sq. ft)</li>
            <li>✔ Fully Furnished Studio Apartment</li>
            <li> Possesion 6 Months</li>
            <li>✔ Upto 50% Bank Loans on Studio</li>
        </ul>

       <!-- Registration Button with Anchor Tag -->
<a href="<?php echo $ContactPage; ?>">
    <button class="register-btn">
        <!-- <b>Registration Open</b> -->
        <div><?php echo $RegistrationStatus; ?></div>
    </button>
</a>


        <!-- Registration Fee Information -->
        <div class="registration-fees">
            <div class="fee left">
                Registration <br> Amount Rs.21,000
            </div>
            <div class="fee right">
                Available Studio <br> SIZES:(510 - 650 Sq. ft)
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


<!-- Countdown -->
<section class="timer">
<div class="container">
  <div id="countdown">
    <ul>
      <li><span id="days"></span>days</li>
      <li><span id="hours"></span>Hours</li>
      <li><span id="minutes"></span>Minutes</li>
      <li><span id="seconds"></span>Seconds</li>
    </ul>
  </div>
</div>
</section>



   <!-- pdtb 4 button section -->
<div class="container pdtb">
    <div class="row">
        <!-- First button: Registration Open -->
        <div class="col-md-4 col-12">
            <a href="<?php echo $ContactPage; ?>">
                <div class="blink-main blinker red-bg phone-main text-center">
                    <span class="blink-main"><?php echo $RegistrationStatus; ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
                </div>
            </a>
        </div>

        <!-- Second button: Registration Start -->
        <div class="col-md-4 col-12">
            <a href="#">
                <div class="blink-main phone-main text-center">
                    <span class="blink-main">Registration Start<br><?php echo $RegistrationOpen; ?> <i class="" aria-hidden="true"></i></span>
                </div>
            </a>
        </div>

        <!-- Third button: Registration Close -->
        <div class="col-md-4 col-12">
            <a href="#">
                <div class="blink-main phone-main text-center">
                    <span class="blink-main">Registration Close<br><?php echo $RegistrationClose; ?></span>
                </div>
            </a>
        </div>

        <!-- Fourth button: Allotment Date -->
        <div class="col-md-4 col-12">
            <div class="blink-main phone-main text-center">
                <span class="blink-main">Allotment Date<br><?php echo $AllotmentDate; ?></span>
            </div>
        </div>
    </div>
</div>
<!-- 4 button Property Registration Form with Padding and Proper Layout -->

<!-- About Us <?php echo APP_NAME; ?> Section -->
<section id="about" class="about-section">
    <div class="container-box">
        <!-- Blinking Heading -->
        <div class="blinking-heading">
            <h2>Why to Invest in <?php echo APP_NAME; ?></h2>
        </div>

        <div class="row">
            <!-- Left Side (Text) -->
            <div class="col-lg-6 col-md-6 col-12 about-text">
            <h3><?php echo APP_NAME; ?> - Greater Noida</h3>
                <hr> <!-- Horizontal line -->
                <p class="paragraph-limit">Investing in a fully furnished studio apartment can be a good choice because it typically offers high rental demand, lower initial investment costs, easier property management, and potential for a quicker resale, especially in urban areas where single individuals or young professionals seek affordable, convenient living spaces with minimal maintenance needs; however, it's important to consider the local market conditions and potential limitations of a small space before investing. </p>
                <h3>Key reasons to invest in a fully furnished <?php echo APP_NAME; ?>:</h3>
                <ul class="paragraph-limit">
                    <li><strong>High Rental Yield</strong> : Due to their compact size and affordability, studio apartments often command higher rental yields compared to larger units, generating a steady stream of passive income for investors.</li>
                    <li>
                        <strong>Large Tenant Pool</strong> :Students, young professionals, and individuals looking for a temporary living space are prime tenants for studio apartments, creating a broad pool of potential renters
                    </li>
                    <li>
                        <strong>Lower Initial Investment</strong> :Compared to larger apartments, the purchase price of a studio apartment is generally lower, making it a more accessible entry point for first-time investors.
                    </li>
                    <li>
                        <strong>Low Maintenance Costs</strong> :With a smaller space, maintenance and cleaning requirements are typically less compared to larger apartments. 
                    </li>
                    <li>
                        <strong>Convenience for Tenants</strong> :Fully furnished studios eliminate the need for tenants to buy furniture, making them highly attractive to those looking for a ready-to-move-in option.
                    </li>
                    <li>
                        <strong>
                        Strategic Location
                        </strong>:Investing in a studio apartment in a well-located area near workplaces, public transportation, and amenities can further enhance its rental potential.
                    </li>
                </ul>

			</div>

            <!-- Right Side (Image) -->
            <div class="col-lg-6 col-md-6 col-12 about-text">
                <div class="content">
                <h4 class="text-center">Jewar Airport</h4>
                <hr> <!-- Horizontal line -->
                <img src="<?php echo MAINURL; ?>assets/img/jewar-airport.jpeg" class="img-fluid" alt="Jewar Airport">
                <p class="paragraph-limit">Located near the  forthcoming Jewar Airport, Studio Apartment in Greater Noida offers  unequaled  connectivity and growth  eventuality. The  field is set to come a major transportation  mecca, driving  profitable development and  adding  the value of  near  parcels. Living then ensures you are part of a well- connected future with  flawless access to domestic and  transnational  trip. </p>
				<p class="paragraph-limit">With Studio Apartment in Greater Noida, youll be just a short distance from the transformative Jewar Airport. As one of India’s largest  airfields, it promises world- class  structure and a significant boost to the region's frugality. This makes Studio Apartment not just a great place to live but also a smart investment for a high- growth future.</p>
                </div>
                </div>
        </div>
    </div>
</section>
<!-- End About Us <?php echo APP_NAME; ?> Section -->



<!-- Meet Your future -->
<div class="w-100 ravibgstar">
    <!-- Background Image -->
    <div class="ravibgstar-abs text-white text-center">
        <!-- Title -->
        <h2><b>Meet Your Future Luxury <?php echo APP_NAME; ?> at Affordable Prices</b></h2>
        <!-- Download Brochure Button -->
        <div class="ravireadmore d-flex justify-content-center mt-2">
            <a href="#" data-toggle="modal" class="ravibutton bg-white">
                <i class="fa fa-solid fa-download"></i> STUDIO SIZES: (510- 650 Sq. ft)
            </a>
        </div>
        <!-- Registration Now Button with ₹11000 -->
        <div class="ravireadmore d-flex justify-content-center mt-2">
            <a href="<?php echo $ContactPage; ?>" class="ravibutton raviregistration-btn">
                <?php echo $RegistrationStatus; ?> <br>  21000
            </a>
        </div>
    </div>
  </div>
  <!-- End Brochure Download Section -->

<!-- Bank Loan Banner Section -->
<section class="bank-loan-banner">
    <div class="banner-content">
        <h2>Bank Loan Available up to 50% offered by J&K Bank</h2>
        <div class="banner-image-container">
            <img src="<?php echo MAINURL; ?>assets/img/J&K-bank.jpeg" alt="ICICI Home Loan" class="banner-image">
        </div>
    </div>
</section>
<!-- Bank Loan Banner Section -->


<!-- Refund Amount Section -->
<section id="refund-amount" class="refund-amount-section">
    <div class="refund-loan-amount">
        <span><strong>IMPORTANT NOTE: REGISTRATION AMOUNT IS 100% REFUNDABLE FOR UNSUCCESSFUL ALLOTTEE</strong></span>
    </div>
</section>
<!-- Refund Amount Section -->

<!-- Payment Plan banner -->
<section>
    <div id="paymentplan" class="container banner-container">
        <div class="banner-location">
            <img src="<?php echo MAINURL; ?>assets/img/payment-plan.png" alt="location baner" class="banner-img">
            <p><strong>Note</strong> : Other Charges, GST and Registry cost will be extra*</p>
        </div>
    </div>
    </section>
<!-- Payment Plan banner-->

 <!-- site Plan banner-->
  <section id="siteplan">
  <div class="container banner-container">
        <h2 class="site-tittle text-center">SITE LAYOUT PLAN</h2>
        <div class="banner-location text-center">
            <img src="<?php echo MAINURL; ?>assets/img/site-plan.jpg" alt="location baner" class="banner-img">
        </div>
        <div class="download-btn text-center" style="margin: 3rem 0 !important;">
            <a href="<?php echo MAINURL; ?>brochures/" class="button-green">Download Brochures</a>
        </div>
    </div>
  </section>
    
<!-- site plan End of Site Plan -->


   <!-- Location Advantages Section -->
<!-- start of location conectivity -->
<section>
    <div class="banner-location">
                    <img src="<?php echo MAINURL; ?>assets/img/map-final.png" alt="location baner" class="banner-img">
                </div>
    </section>
<!-- end of location conectivity -->

<!-- start of location conectivity -->
    <section>
    <div class="banner-location">
                    <img src="<?php echo MAINURL; ?>assets/img/connectivity.png" alt="location baner" class="banner-img">
                </div>
    </section>
<!-- end of location conectivity -->

    <!-- start of location conectivity -->
    <section class="location-advantage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/jewar-airport.jpeg" class="img-fluid" alt="Jewar Airport">
                        <h3>Jewar Airport</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/gautam-buddha-university.jpeg" class="img-fluid" alt="Gautam Budhha University">
                        <h3>Gautam Budhha University</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/radisson-hotel.jpeg" class="img-fluid" alt="Radisson Hotel">
                        <h3>Radisson Hotel</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/pari-chowk-metro.jpeg" class="img-fluid" alt="Pari Chowk Metro Station">
                        <h3>Pari Chowk Metro Station</h3>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/expo-mart-2.jpeg" class="img-fluid" alt="Expo Mart-2">
                        <h3>Expo Mart-2</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/galgotia-university.jpeg" class="img-fluid" alt="Galgotia University">
                        <h3>Galgotia University</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/yamuna-expressway.jpeg" class="img-fluid" alt="Yamuna Expressway">
                        <h3>Yamuna Expressway</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/venice-mall.jpeg" class="img-fluid" alt="Venice Mall">
                        <h3>Venice Mall</h3>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/fortis-hospital.jpeg" class="img-fluid" alt="Fortis Hospital">
                        <h3>Hospital</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/security.jpeg" class="img-fluid" alt="Privacy & Security">
                        <h3>Privacy & Security</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/cctv.jpeg" class="img-fluid" alt="24*7 CCTV">
                        <h3>24*7 CCTV</h3>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="img-area">
                        <img src="<?php echo MAINURL; ?>assets/img/water-supply.jpeg" class="img-fluid" alt="24*7 Water Supply">
                        <h3>24*7 Water Supply</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of location conectivity -->

<!-- start highlights point Section -->
<div class="highlights-container">
    <div class="heading">
        <h2>Highlights</h2>
        <hr>
    </div>
    <div class="highlight_section">
        <div class="grid">
            <!-- Box 1: Highlights -->
            <div class="grid-item">
                <span class="title">Furniture & Fixtures:</span>
                <hr />
                <p>
                     Double Bed<br />
                     Mattress & Pillows<br />
                     Sofa<br />
                     Designer Light Fittings<br />
                     Cupboard<br />
                     Ironing Board<br />
                     Curtain with Rods<br />
                     Geyser in Bathroom<br />
                     Modular Kitchen<br />
                </p>
            </div>

            <!-- Box 2: Benefits Under Studio Apartment-->
            <div class="grid-item">
                <span class="title">Lifestyle & Gadgets:</span>
                <hr />
                <p>
                     Air Conditioner<br />
                     Refrigerator<br />
                     LED TV<br />
                     Electric Kettle<br />
                     Hair Dryer<br />
                     Electric Iron<br />
                     Wall Clock<br />
                     <strong>Bio Metric Door Lock</strong><br />
                     <strong>Remote Operated Curtains</strong>
                </p>
            </div>

            <!-- Box 3: Amenities Facilities -->
            <div class="grid-item">
                <span class="title">AMENITIES FACILITES:</span>
                <hr />
                <p>
                     24x7 Security<br />
                     24x7 CCTV Surveillance<br />
                     24x7 Water Supply<br />
                     Well Designed Street Sections<br />
                     Landscaped Gardens - Multiple Parks<br />
                     Rich Neighbourhood
                </p>
            </div>

            <!-- Box 4: Location Advantages -->
            <div class="grid-item">
                <span class="title">Location Advantages:</span>
                <hr />
                <p>
                     5 Min : Distance in Shopping Complex, Schools, Hospitals<br />
                     5 Min : Distance Near Metro Station<br />
                     5 Min : Drive Distance from Expo Mart KP-ll<br />
                     2 Min : Distance from Gautam Budhha University<br />
                     1 Min : Distance from Fortis Hospital<br />
                     30 Min : Distance from Noida International Airport<br>
                     24*7 : Water Supply<br />
                     Power Backup<br />
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end highlights point Section -->


<!-- Site Plan and Map Section -->
    <section id="site-plan" class="site-plan-section">
    <!-- Bank Loan Banner -->
    <div class="naveen-loan-banner">
        <span>Invest in, Greater Noida  strategically located <?php echo ADDRESS; ?>. Secure your future with promising returns and transformational growth</span>
    </div>
    </section>
<!-- Site Plan and Map Section -->

<!-- About Greater Noida Section -->
<section id="images" class="about-spiti-rk">
    <!-- Main Heading -->
    <div class="heading">
        <h2>Surrounding of Greater Noida</h2>
        <hr>
    </div>

    <!-- 3D Flip Boxes Grid -->
    <div class="rk container">
        <div class="flip-box-container">
            <!-- Flip Box 1 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="<?php echo MAINURL; ?>assets/img/shopping-complex.jpeg" alt="Shopping Complex">
                        <h3>Shopping Complex</h3>
                    </div>
                    <div class="flip-box-back">
                        <p>Enjoy easy access to vibrant shopping destinations with premium brands and essential stores just minutes away.</p>
                        <a href="https://wa.me/<?php echo APP_NUMBER; ?>" target="_blank" class="whatsapp-btn">WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Flip Box 2 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="<?php echo MAINURL; ?>assets/img/metro-station.jpeg" alt="Metro Station">
                        <h3>Metro Station</h3>
                    </div>
                    <div class="flip-box-back">
                        <p>Seamless connectivity with a nearby metro station ensures hassle-free travel across the NCR region.</p>
                        <a href="https://wa.me/<?php echo APP_NUMBER; ?>" target="_blank" class="whatsapp-btn">WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Flip Box 3 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="<?php echo MAINURL; ?>assets/img/expo-mart.jpeg" alt="Expo Mart KP-ll">
                        <h3>Expo Mart KP-ll</h3>
                    </div>
                    <div class="flip-box-back">
                        <p>Proximity to the renowned Expo Mart offers opportunities for business, exhibitions, and global networking events.</p>
                        <a href="https://wa.me/<?php echo APP_NUMBER; ?>" target="_blank" class="whatsapp-btn">WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Flip Box 4 -->
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="<?php echo MAINURL; ?>assets/img/gautam-buddha-university.jpeg" alt="Gautam Buddha University">
                        <h3>Gautam Buddha University</h3>
                    </div>
                    <div class="flip-box-back">
                        <p>Stay close to a prestigious educational institution known for its state-of-the-art campus and academic excellence.</p>
                        <a href="https://wa.me/<?php echo APP_NUMBER; ?>" target="_blank" class="whatsapp-btn">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

 <!--end  About Greater Noida Section -->

    <!-- Include Swiper.js library -->
<link rel="stylesheet" href="../unpkg.com/swiper%4011.1.15/swiper-bundle.min.css" />
<script src="<?php echo MAINURL; ?>unpkg.com/swiper%4011.1.15/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 4, // Show 4 images at a time
        spaceBetween: 10, // Space between slides
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true, // Enable loop mode if needed
    });
</script>

</div>

<?php include "include/footer.php";?>

<?php include "include/footer-files.php";?>
<!--end scrool icon left side-->

<script>
    (function () {
        const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;

        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 0,
            dayMonth = "2/17/",
            targetDate = dayMonth + yyyy;
        
        today = mm + "/" + dd + "/" + yyyy;
        if (today > targetDate) {
            targetDate = dayMonth + nextYear;
        }

        const countDown = new Date(targetDate).getTime(),
              x = setInterval(function() {    
                  const now = new Date().getTime(),
                        distance = countDown - now;

                  if (distance <= 0) {
                      // If the countdown is over, display 00:00:00:00
                      document.getElementById("days").innerText = "00";
                      document.getElementById("hours").innerText = "00";
                      document.getElementById("minutes").innerText = "00";
                      document.getElementById("seconds").innerText = "00";
                      clearInterval(x); // Stop the countdown
                  } else {
                      // Update the countdown values
                      document.getElementById("days").innerText = String(Math.floor(distance / day)).padStart(2, "0");
                      document.getElementById("hours").innerText = String(Math.floor((distance % day) / hour)).padStart(2, "0");
                      document.getElementById("minutes").innerText = String(Math.floor((distance % hour) / minute)).padStart(2, "0");
                      document.getElementById("seconds").innerText = String(Math.floor((distance % minute) / second)).padStart(2, "0");
                  }
              }, 1000); // Update every second
    }());
</script> 

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl505716'},{'dcenter':'p3'},{'cp_id':'10107856'},{'cp_cl':'8'}) </script><script src='../img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js'></script>
</html>

