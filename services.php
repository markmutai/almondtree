<?php
include('top-atwc.php');
?>
<script>
    $(".nav-services").addClass("nav-active");
    // $(".tatwc-nav").addClass("fade_to-white");
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
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Our Services</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl phone:pt-0 tatwc-intro tatwc-information dark:bg-black dark:bg-opacity-60 dark:text-white">
            <div class="row services flex justify-center px-0 pb-8">
                <div class="col-xl-12 pt-0 pb-10 mx-0 mb-0 service-list">
                    <div class="list">
                        <ul class="phone:px-2 phone:leading-10 sm:leading-12 md:leading-16 md:px-4 tatwc-services-copy text-center">
                            <h3 class="phone:text-xs md:text-mini 2xl:text-tiny tracking-wide phone:py-5 sm:py-6 md:py-6 2xl:py-7 mt-2 mb-4 bdr_solid bdr_solid-b dark:border-lime-400 dark:border-opacity-20 text-gray-800 text-opacity-75 dark:bg-bgray-800 dark:bg-opacity-0 dark:text-gray-50 dark:text-opacity-90">Therapy Services</h3>
                            <li>Couples Therapy</li>
                            <li>Individual Therapy</li>
                            <li>Sex Therapy</li>
                            <li>Relationship Therapy</li>
                            <li>Addiction Therapy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12 p-0 mx-0 service-list">
                    <div class="list">
                        <ul class="phone:px-2 phone:leading-10 sm:leading-12 md:leading-16 md:px-4 tatwc-services-copy text-center">
                            <h3 class="phone:text-xs md:text-mini 2xl:text-tiny tracking-wide phone:py-5 sm:py-6 md:py-6 2xl:py-7 mb-4 bdr_solid bdr_solid-b dark:border-lime-400 dark:border-opacity-20 text-gray-800 text-opacity-75 dark:bg-bgray-800 dark:bg-opacity-0 dark:text-gray-50 dark:text-opacity-90">Professional/Group Talks</h3>
                            <li>Sex &amp; Sexuality Education</li>
                            <li>Sexual Abuse &amp; Trauma</li>
                            <li>Stress &amp; Anxiety Management</li>
                            <li>Sexual Health &amp; Wellness</li>
                            <li>Mental Health &amp; Wellness</li>
                            <li class="whitespace-nowrap">Addictions - Barrier to Intimacy &amp; Connection</li>
                            <li>Gender Based Violence</li>
                            <li class="whitespace-nowrap">Communicating in your Romantic Partnerships</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include "msg.php" ?>
    </div>
    <?php include "footer.php" ?>
</div>
</body>