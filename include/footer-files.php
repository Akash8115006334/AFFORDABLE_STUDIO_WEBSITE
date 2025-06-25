<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        function handleScroll() {
            const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const documentHeight = Math.max(
                document.body.scrollHeight,
                document.body.offsetHeight,
                document.documentElement.clientHeight,
                document.documentElement.scrollHeight,
                document.documentElement.offsetHeight
            );

            if (scrollPosition > windowHeight * 0.5) {
                scrollToTopBtn.classList.add("visible");
            } else {
                scrollToTopBtn.classList.remove("visible");
            }

            if (scrollPosition + windowHeight >= documentHeight - 50) {
                scrollToTopBtn.classList.add("highlight");
            } else {
                scrollToTopBtn.classList.remove("highlight");
            }
        }

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll);

        scrollToTopBtn.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };

        // Initial check on page load
        handleScroll();
    </script>


<?php if (isset($_SESSION['status'])) { ?>
<script>
  Swal.fire({
    icon: "success",
    title: "Thank You",
    text: "Your form has been submitted successfully"
  });
</script>
<?php
unset($_SESSION['status']); // Clear session status after displaying the alert
} else { ?>
<!-- Uncomment the following block if you want to handle an error scenario -->
<!-- 
<script>
  Swal.fire({
    icon: "error",
    title: "Oops",
    text: "Something went wrong"
  });
</script> 
-->
<?php } ?>