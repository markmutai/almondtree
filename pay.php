<?php
$sitelink = '';
?>
<script>
    $(".nav-pymnt").addClass("nav-active");
    // $(".tatwc-nav").addClass("fade_to-white");
</script>
<div class="container-fluid-content tatwc-fluid-content bg-gradient-to-br from-almndPink to-almndBlue dark:from-almndDblue dark:to-almndBlk">
    <div class="beach-vid_min">
        <div class="tatwc-logo-min">
            <a href="<?php echo $sitelink ?>/index.php">
                <img class="phone:h-52 portrait:h-72 sm:h-52 md:h-56 lg:h-64 2xl:h-almndXxl" src="<?php echo $sitelink ?>/app/img/logo.webp" alt="The Almond Tree Wellness Center" title="The Almond Tree Wellness Center">
            </a>
        </div>
        <?php include 'tgl.php' ?>
    </div>
    <div class="container tatwc-container phone:max-w-full portrait:max-w-2xl md:max-w-xl lg:max-w-2xl xl:max-w-3xl 2xl:max-w-4xl p-0">
        <div class="ptn opacity-50"></div>
        <div class="col-xl-12 tatwc-tagline flex items-center justify-center text-white">
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Complete Payment</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl tatwc-intro tatwc-information bg-bgray-50 bg-opacity-80 text-gray-900 dark:bg-black dark:bg-opacity-50 dark:text-white">
            <!-- <div class="col-xl-12 ldn-wait phone:text-xs sm:text-xs md:text-sm 2xl:text-tiny text-center pulse">
                <p class="col-xl-12 my-12 text-center text-gray-800">LOADING...</p>
            </div> -->
            <iframe class="pymnt-wndw" src="<?php echo $iframe_src; ?>" width="100%" height="740px" scrolling="yes" frameBorder="0">
                <p>Browser unable to load iFrame</p>
            </iframe>
            <script>
                $(iframe).load(function() {
                    $('.ldn-wait').removeClass('pulse');
                    $('.ldn-wait').hide(300);
                });
            </script>
        </div>
        <?php include "msg.php" ?>
    </div>
    <?php include "footer.php" ?>
</div>
</body>