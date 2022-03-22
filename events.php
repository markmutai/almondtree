<?php
include('top-atwc.php');
?>
<script>
    $(".nav-events").addClass("nav-active");
</script>
<div class="container-fluid-content tatwc-fluid-content bg-gradient-to-br from-almndPink to-almndBlue dark:from-almndDblue dark:to-almndBlk">
    <div class="beach-vid_min">
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
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Events</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl phone:px-6 txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl tatwc-intro tatwc-information dark:bg-black dark:bg-opacity-60 dark:text-white">
            <p class="tatwc-copy pb-0 tatwc-about-copy text-center ">
                We partner with <a class="text-blue-500 dark:text-lblue-400" href="https://www.nawiri-wellness.com/" target="_blank"> Nawiri Wellness </a>for some of our events
            </p>
            <div class="event_img p-4 mb-2">
                <img class="phone:border-6 sm:border-8 xl:border-10 2xl:border-12 border-white rounded-lg shadow-md" src="app/img/events.webp" alt="">
            </div>
            <?php include "booking_btn.php" ?>
        </div>

        <?php include "msg.php" ?>
    </div>
    <?php include "footer.php" ?>
</div>
</body>