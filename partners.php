<?php
include('top-atwc.php');
?>
<script>
    $(".nav-partners").addClass("nav-active");
    // $(".tatwc-nav").addClass("fade_to-white");
</script>
<div class="container-fluid-content tatwc-fluid-content bg-gradient-to-br from-almndPink to-almndBlue dark:from-almndDblue dark:to-almndBlk">
    <!--  <div class="test">
        <div class="child"></div>
    </div> -->
    <div class="beach-vid_min">
        <!-- <video autoplay loop src="app/vid/background.mp4"></video> -->
        <div class="tatwc-logo-min">
            <a href="index.php">
                <img class="phone:h-52 portrait:h-72 sm:h-52 md:h-56 lg:h-64 2xl:h-almndXxl" src="app/img/logo.webp" alt="The Almond Tree Wellness Center" title="The Almond Tree Wellness Center">
            </a>
        </div>
        <?php include 'tgl.php' ?>
    </div>
    <div class="container tatwc-container phone:max-w-full portrait:max-w-2xl md:max-w-xl lg:max-w-2xl xl:max-w-3xl 2xl:max-w-4xl p-0">
        <div class="ptn opacity-50"></div>
        <div class="col-xl-12 tatwc-tagline flex items-center justify-center text-white">
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Partners &amp; Offers</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl md:pt-0 xl:pt-6 txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl tatwc-intro tatwc-information opacity-100 bg-bgray-50 bg-opacity-90 text-gray-900 dark:bg-black dark:bg-opacity-60 dark:text-white">
            <div class="row phone:pb-4 md:pt-0 xl:pt-4 md:pb-2 xl:pb-16 flex items-center justify-center partners">
                <a href="https://www.nawiri-wellness.com/" target="_blank">
                    <div class="col-xl-6 phone:p-4 sm:p-10 xl:p-1 flex items-center justify-center border-gray-200 md:border-0 xl:border-r-2">
                        <div class="phone:p-7 md:p-6 xl:p-8 bg-white rounded-lg shadow-md">
                            <img class="nawiri_logo" src="app/img/partners/nawiri.webp" alt="Nawiri Wellness">
                            <div class="info mt-8 text-center bdr_solid">
                                <p class="md:mt-2 xl:mt-4 dark:text-gray-600">Nawiri Wellness</p>
                                <a class="text-blue-500" href="https://www.nawiri-wellness.com/" target="_blank">www.nawiriwellness.com</a>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.blueluxury.co.ke" target="_blank">
                    <div class="col-xl-6 phone:p-4 sm:p-10 xl:p-1 flex items-center justify-center">
                        <div class="phone:p-7 md:p-6 xl:p-8 bg-white rounded-lg shadow-md">
                            <img class="bluxury_logo" src="app/img/partners/bluxury.webp" alt="Blue Luxury Wellness Center">
                            <div class="info mt-8 text-center bdr_solid">
                                <p class="md:mt-2 xl:mt-4 dark:text-gray-600">Blue Luxury Wellness</p>
                                <a class="text-blue-500" href="https://www.blueluxury.co.ke">www.blueluxury.co.ke</a>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <p class="tawc-partner-line text-md normal-case pt-8 pb-4 bdr_dotted dark:border-lime-400 dark:border-opacity-25 dark:text-gray-300 text-center text-lime-800 dark:text-lime-400 dark:text-opacity-80">
                <strong>Contact us if you would like more information on our partnerships or to plan an event of your own</strong>
            </p>
            <?php include "booking_btn.php" ?>
        </div>

        <?php include "msg.php" ?>
    </div>
    <?php include "footer.php" ?>
</div>
</body>