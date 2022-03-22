<?php
$sitelink = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Almond Tree Wellness Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark light">
    <meta name="Title" content="The Almond Tree Wellness Center">
    <meta name="author" content="Catherine Holden">
    <meta name="Keywords" content="professional therapy, nairobi therapy, therapy, sex therapy, sex, wellness, holistic, counselling, trauma, LGBTQA+, LGBTQ, LGBT, career advice, career support, relationship, relationship counselling, marriage, marriage counselling, sexual abuse, sexual orientation, gender identity, sex addiction, psychologist">
    <meta name="Description" content="Professional relationship counselling, marriage counselling, sex related therapy and many more forms of counselling">
    <meta name="Subject" content="Professional Therapy">
    <meta name="Language" content="English">
    <meta name="Robots" content="INDEX,FOLLOW">
    <link rel="icon" type="image/jpg" href="favicon.jpg">
    <link rel="icon" sizes="192x192" href="faviconHighRes.jpg">
    <link rel="stylesheet" type="text/css" href="app/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="app/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142998658-1"></script>
    <script src="app/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" id="cookieinfo" src="app/js/cookieinfo.min.js" data-font-family="'Poppins', sans-serif" data-bg="#082702" data-fg="#FFFFFF" data-link="#2acc20" data-divlinkbg="#082000" data-divlink="#2acc20" data-cookie="CookieInfoScript" data-text-align="left" data-close-text="Continue">
    </script>
    <script async defer>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142998658-1');
    </script>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
        localStorage.theme = 'light';
        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark';
        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme');
    </script>
    <script>
        function activateDarkMode() {
            document.documentElement.classList.add('dark');
        }

        window.matchMedia("(prefers-color-scheme: dark)").addListener(
            e => e.matches && activateDarkMode()
        );
    </script>
    <!-- <script>
        const a = window.matchMedia("(prefers-color-scheme: dark)");
        console.log(a.matches);

        if (a.matches == true) {
            // alert('working');
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
        }
    </script> -->
    <style>
        .pymnt_dialog {
            position: fixed;
            z-index: 9999;
        }

        .pymnt_dialog,
        .pymnt_bg,
        .pymnt_wrap {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .pymnt_bg {
            position: fixed;
            background: hsla(0, 0%, 0%, 0.75);
            z-index: 9997;
        }

        .pymnt_wrap {
            z-index: 9998;
        }

        .pymnt_pu {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
            margin: 0 auto;
            border-radius: 8px;
            background: hsl(0, 100%, 30%);
            z-index: 9999;
        }

        .pymnt_inf {
            position: relative;
            display: flex;
            flex-direction: column;
            color: #fff !important;
            text-align: center;
        }

        .pymnt_copy {
            border-radius: 0 !important;
        }

        .pymnt_inf-header {
            background: hsl(0, 100%, 8%);
            width: 450px;
            border-radius: 8px 8px 0 0;
            padding: 35px 0 27px;
        }

        .pymnt_inf button {
            width: 70%;
            margin: 0 auto;
            background: hsl(0, 100%, 15%);
        }

        .pymnt_inf button:hover {
            background: hsl(0, 100%, 10%);
        }
    </style>
</head>

<body class="antialiased">
    <div class="booking_window">
        <div id="bkn_close" class="booking_close"></div>
        <div class="booking_box p-0">
        </div>
    </div>
    <?php include "booking.php" ?>
    <div class="beach_bk"></div>
    <div class="container-fluid tatwc-fluid p-0">
        <nav class="navbar navbar-expand-lg tatwc-nav lg:mb-0 phone:tracking md:tracking-wide xl:tracking-wideish">
            <button class="navbar-toggler tatwc-nav-btn opacity-100 flex items-center md:py-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="my-2 -ml-2 px-0 text-3xl text-white opacity-100"><img class="hb_ico" src="app/img/hb.png" alt=""><label class="hb_label px-4 xs:text-2xs portrait:text-sm md:text-xs text-uppercase tracking-wider opacity-80">Menu</label></span>
            </button>
            <div class="collapse navbar-collapse tatwc-menu phone:text-2xs md:text-2xs lg:text-2xs xl:text-1.5xs 2xl:text-sm" id="navbarSupportedContent">
                <ul class="navbar-nav tatwc-menu-items">
                    <li class="nav-item">
                        <a class="nav-link nav-home" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-about" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-services" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-events" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-partners" href="partners.php">Partners &amp; Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-booking" href="javascript:void(0)" data-toggle="modal" data-target="#consent-modal">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-pymnt" href="pymnt.php">Payments</a>
                    </li>
                    <!-- <script>
                        $('.nav-booking').click(function() {
                            $('.nav-booking').addClass('nav-active');
                            $('.nav-booking').addClass('nav-active_bug_fix');
                        });
                    </script> -->
                    <li class="nav-item">
                        <a class="nav-link nav-contact" href="#cntct">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>