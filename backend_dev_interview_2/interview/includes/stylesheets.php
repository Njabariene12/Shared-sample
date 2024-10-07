<!-- Favicon -->
<link rel="shortcut icon" href="assets/img/logo-ico.png">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="assets/css/vendor.min.css">
<link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">

<!-- CSS Front Template -->
<link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">

<style>
    .text-justify {
        text-align: justify;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cookieConsent = document.getElementById("cookie-consent");
        const acceptBtn = document.getElementById("accept-btn");

        acceptBtn.addEventListener("click", function() {
            // Set a cookie that expires in 1 year
            document.cookie = "cookie_consent=accepted; expires=" + new Date(new Date().setFullYear(new Date().getFullYear() + 1)).toUTCString();

            // Hide the cookie consent popup
            cookieConsent.style.display = "none";
        });

        // Check if the user has already accepted the cookie consent
        const hasConsent = document.cookie.split(';').some(cookie => cookie.trim().startsWith('cookie_consent=accepted'));

        if (hasConsent) {
            // If the user has already accepted, hide the cookie consent popup
            cookieConsent.style.display = "none";
        }
    });
</script>