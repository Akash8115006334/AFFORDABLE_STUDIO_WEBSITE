// Smooth Scroll Functionality
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const storedName = localStorage.getItem('name');
    const storedMobile = localStorage.getItem('mobile');
    const storedPlace = localStorage.getItem('place');

    if (storedName) document.getElementById('name').value = storedName;
    if (storedMobile) document.getElementById('mobile').value = storedMobile;
    if (storedPlace) document.getElementById('place').value = storedPlace;

    document.getElementById('registrationForm').addEventListener('submit', function() {
        localStorage.setItem('name', document.getElementById('name').value);
        localStorage.setItem('mobile', document.getElementById('mobile').value);
        localStorage.setItem('place', document.getElementById('place').value);
    });
});



const images = [
    "img/slide/map.jpg",
    "img/slide/jaan.jpg",
    "img/slide/lake.jpg",
    "img/slide/road.jpg"
]; // Add your image paths here
let currentIndex = 0;

function showImage(index) {
    const allImages = document.querySelectorAll('.image-container img');
    allImages.forEach((img, i) => {
        img.classList.remove('active');
        if (i === index) {
            img.classList.add('active');
        }
    });
}

function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
    updateDots();
}

function currentSlide(n) {
    currentIndex = n - 1; // Adjust index for zero-based array
    showImage(currentIndex);
    updateDots();
}

function updateDots() {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.className = dot.className.replace(" active", "");
        if (index === currentIndex) {
            dot.className += " active";
        }
    });
}

// Initialize the first image and start the interval
showImage(currentIndex);
setInterval(changeImage, 3000); // Change image every 3 seconds



let slideIndex = 0;
const slides = document.getElementsByClassName("animated-image");

function showSlides() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

showSlides(); // Initiate slideshow

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



    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this); // Collect form data
        
        // AJAX request to submit form data to Google Apps Script
        fetch("https://script.google.com/macros/s/AKfycbwU_mxvdXEKgTVW0VSqrPYjjpjOL4v8oU2Q74KfkyagyiHwP2os-shE8h6PxiFMWeGb/exec", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Display success message to the user
            document.getElementById("formSuccessMessage").style.display = "block";
            document.getElementById("formSuccessMessage").innerText = "Thank you for submitting your query! Our team will connect with you shortly.";
            
            // Clear the form fields after submission
            document.getElementById("contactForm").reset();
        })
        .catch(error => console.error('Error:', error));
    });



    // Form Submission
    $(document).ready(function () {
        $("#registrationForm").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
    
            var formData = $(this).serialize(); // Serialize form data
    
            $.ajax({
                url: "<?php echo MAINURL; ?>vendor/mail.php", // URL to backend PHP script
                type: "POST",
                data: formData, // Send form data to the server
                success: function (response) {
                    console.log(response); // Debug: Log the response
    
                    // Add the 'show' class to trigger the slide down effect
                    $("#paymentDetails").addClass("show");
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: " + error);
                    alert("Something went wrong. Please try again.");
                }
            });
        });
    });
    
    