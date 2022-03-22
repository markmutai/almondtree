<footer class="col-xl-12 mt-20 phone:pt-2 phone:pb-5 md:pt-7 md:pb-5 lg:pt-8 lg:pb-6 xl:pt-10 xl:pb-8 tatwc-footer xl:text-tiny 2xl:text-base bg-bgray-50 bg-opacity-90 text-gray-900 dark:bg-black dark:bg-opacity-50 dark:text-white">
    <div class="container tatwc-container md:max-w-xl lg:max-w-3xl xl:max-w-4xl">
        <div class="row">
            <div class="col-md-6 col-sm-12 phone:mb-0 phone:border-b phone:pb-6 md:mb-8 phone:text-center md:text-left ftr-chunk leftie md:border-r-2 lg:border-r-4 md:border-solid lg:border-dotted border-lime-700 border-opacity-25 dark:border-lime-400 dark:border-opacity-20">
                <div class="flex">
                    <div class="tatwc-logo-footer">
                        <div class="almnd_txt">
                            <img src="../app/img/logo-min.webp" alt="">
                        </div>
                        <div class="almnd_txt_ctr">
                            <img src="../app/img/logo-min-cntr.webp" alt="">
                        </div>
                    </div>
                </div>
                <p class="phone:pt-0 phone:-mt-8 md:pt-4 xl:pt-8 2xl:pt-4 phone:text-xs md:text-xs lg:text-mini xl:text-sm 2xl:text-tiny">Copyright &copy;,
                    <script defer>
                        var currentYear = new Date().getFullYear();
                        document.write(currentYear);
                    </script><br>
                    The Almond Tree Wellness Center
                </p>
            </div>
            <div class="col-md-6 col-sm-12 phone:p-0 md:pl-10 md:mb-10 ftr-chunk rightie phone:text-xs md:text-mini lg:text-sm xl:text-tiny 2xl:text-base">
                <div class="top">
                    <p>
                        Mador Lane,
                        <br>
                        Ololua Ridge,
                        <br>
                        Karen, Nairobi.
                    </p>
                    <p class="time-dist">
                        (3 min from The Hub)
                    </p>
                </div>
                <?php include 'social-ftr.php' ?>
            </div>
        </div>
        <div class="col-xl-12 linchpin phone:text-2xs sm:text-2xs lg:text-xs 2xl:text-sm tracking-wide phone:mt-8 md:mt-8 phone:mb-5 md:mb-6 lg:mt-10 md:mt-8 md:mb-6 lg:mb-8">
            <a class="phone:py-4 sm:py-5 lg:px-9 xl:py-7 xl:px-10" href="https://www.linchpin.co.ke" target="_blank">DESIGNED BY LINCHPIN <i class="fas fa-cloud px-1"></i></a>
        </div>
    </div>
</footer>
<script>
    $('html').toggleClass(localStorage.toggled);

    // $('#toggle').click(function() {
    //     $('html').toggleClass('dark');
    //     $('.tatwc-nav').toggleClass('tatwc-nav_dark');
    // });

    if (localStorage.toggled != 'dark') {
        // alert('light mode');
        $('#toggle').prop('checked', false);
        $('html').toggleClass('dark', false);
        // $('#toggle').prop('checked', false);
    } else if (localStorage.toggled = 'dark') {
        // alert('light mode');
        $('#toggle').prop('checked', true);
        $('html').toggleClass('dark', true);
        // $('#toggle').prop('checked', true);
    }

    function darkLight() {
        if (localStorage.toggled != 'dark') {
            $('html').toggleClass('dark', true);
            $('#toggle').prop('checked', true);
            // window.matchMedia("(prefers-color-scheme: dark)", true);
            localStorage.toggled = 'dark';
            // localStorage.theme = 'dark';
        } else {
            $('html').toggleClass('dark', false);
            $('#toggle').prop('checked', false);
            localStorage.toggled = '';
            // localStorage.theme = 'light';
        }
    }

    if ($('html').hasClass('dark')) {
        $('#toggle').prop('checked', true);
        $('.ptn').css('opacity', '0.2');
        // $('.tatwc-nav_dark').css('backgrdound', 'linear-gradient(140deg, #114508, #0b2e05 100%)');
    } else {
        $('#toggle').prop('checked', false);
        $('.ptn').css('opacity', '0.55');
        // $('.tatwc-nav_dark').css('backgrdound', 'linear-gradient(140deg, #32cf17, #1c730d 100%)');
    }

    function carpetLight() {
        if ($('html').hasClass('dark')) {
            $('.ptn').css('opacity', '0.2');
            // $('.tatwc-nav_dark').css('backgrdound', 'linear-gradient(140deg, #114508, #0b2e05 100%)');
        } else {
            $('.ptn').css('opacity', '0.55');
            // $('.tatwc-nav_dark').css('backgrdound', 'linear-gradient(140deg, #32cf17, #1c730d 100%)');
        }
    }

    $('#toggle').click(function() {
        carpetLight();
    });

    $('.video-container, .beach-vid_min, .nav-booking, .nav-contact').click(function() {
        $('.collapse').removeClass('show');
    });
</script>
<script>
    $(document).scroll(function() {
        if ($(window).scrollTop() > 300) {
            $('.scrl-dwn').css({
                'opacity': '0'
            });
        } else {
            $('.scrl-dwn').css({
                'opacity': '1'
            });
        }
    });
</script>
<!-- <script>
    // const a = window.matchMedia("(prefers-color-scheme: dark)");
    // console.log(a.matches);

    if (window.matchMedia("(prefers-color-scheme: dark)")) {
        // console.log('dark mode fam')
        // alert('working');
        // document.documentElement.classList.add('dark');
        $('html').addClass('dark');
        localStorage.theme = 'dark';
    }
</script> -->