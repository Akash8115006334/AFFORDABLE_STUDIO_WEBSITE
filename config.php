<?php // session_start(); ?>

<?php
define("APP_NAME", "Studio Apartment");

define("APP_NUMBER", "+919289707478");

define("APP_EMAIL", "support@affordablestudios.org");

define("ADDRESS", "SEC-PHI-4 Near Venice Mall , Greater Noida (UP)");

define("DOMAIN", "https://affordablestudios.org/");


// *define domain for href
//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";

// Here append the common URL characters.
$link .= "://";

//* DIR(Directory) & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);

//list of local hosts or servers
define("LOCAL_HOST", array("127.0.0.1", "192.168.1.7", "::1", "localhost", "192.168.1.9", "192.168.43.14", "192.168.1.10", "192.168.1.11", "192.168.1.5"));

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
    define("MAINURL", $link . HOST . "/affordable-studio-apartment/");
} else {
    define("MAINURL", $link . HOST. "/");
}

$RegistrationOpen = "02-02-2025";
$RegistrationClose = "16-02-2025";
$AllotmentDate = "18-02-2025";
$today = date('d-m-Y');
if($today > $RegistrationClose ){
    $RegistrationStatus = "Registration Close";
}else{
    $RegistrationStatus = "Registration Open";
}

if ($RegistrationStatus == 'Registration Open') {
    $ContactPage = MAINURL.'contact.php';
} else {
    $ContactPage = '#';
}

?>