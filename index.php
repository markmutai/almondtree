<?php
$sitelink = '';
?>
<?php
include('top-atwc.php');
?>
<script>
    $(".nav-home").addClass("nav-active");
</script>
<?php include 'tgl.php' ?>
<div class="video-container p-0">
    <div class="tatwc-logo-wrapper flex justify-content-center items-center">
        <a href="index.php">
            <img class="portrait:h-72 sm:h-52 md:h-56 lg:h-64 2xl:h-almnd2xxl" src="app/img/logo.webp" alt="The Almond Tree Wellness Center" title="The Almond Tree Wellness Center">
        </a>
    </div>
    <video autoplay loop class="beach-vid" id="video" poster="app/img/backscrshot.webp">
        <source class="tatwc-beach" id="beachVid" src="app/vid/background.mp4" type="video/mp4" />
    </video>
    <script>
        var video = document.getElementById("video");

        video.volume = 0.05;

        video.onpause = function() {};

        document.addEventListener("visibilitychange", function() {
            var state = document.visibilityState;
            if (state === "hidden") {
                video.pause();
            } else {
                video.play();
            }
        });
    </script>
</div>
<div class="container-fluid-content tatwc-fluid-content bg-gradient-to-br from-almndPink to-almndBlue dark:from-almndDblue dark:to-almndBlk">
    <div class="scrl-dwn">
        <div class="flex items-center justify-center">
            <svg class="xl:w-20" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                <path class="wheel" d="M123.359,100l0,24" style="fill:none;stroke:#fff;stroke-width:24px;" />
                <path class="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:24px;opacity:0.35;" />
            </svg>
        </div>
        <label class="text-lg phone:text-sm portrait:text-sm md:text-xs lg:text-xs xl:text-md 2xl:text-lg">Scroll Down</label>
    </div>
    <div class="container tatwc-container phone:max-w-full portrait:max-w-2xl md:max-w-xl lg:max-w-2xl xl:max-w-3xl 2xl:max-w-4xl p-0">
        <div class="ptn"></div>
        <div class="col-xl-12 tatwc-tagline tatwc-tagline_intro flex items-center justify-center text-white">
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Where Your Wellness Comes First</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl tatwc-intro tatwc-information dark:bg-black dark:bg-opacity-50 dark:text-white">
            <p class="tatwc-copy">
                The Indian Almond Tree in full growth provides solace from
                natural elements like the sun, wind &amp; rain; its leaves are a
                mix of green &amp; dark red, &amp; the actual almond seed is hard
                &amp; green in colour – difficult to get through but possible to
                break. The Almond Tree Wellness Center originated from this
                concept where a single tree provides refuge for many &amp;
                sometimes talking about sensitive issues are difficult but
                very possible, with the right approach.
            </p>
            <?php include 'quote.php' ?>
            <p class="tatwc-copy">
                At our center, we offer a safe &amp; confidential environment to
                discuss any issues without fear, judgement or shame; we
                encourage our clients to share any relationship or sexual
                related issues to improve their well-being which is very
                important to us. Whether you require a consultation on your
                own or with your spouse our professional counsellor will be
                able to listen &amp; cater to the concerns raised.
            </p>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=225394890851644&autoLogAppEvents=1" nonce="Hi7SVzQd"></script>
            <div class="col-xl-12 mt-12 mb-8 tatwc-fb">
                <div class="phone:py-4 sm:py-4 xl:py-5 2xl:py-6 fb-logo-wrapper flex items-center justify-center border-t border-b border-blue-200 border-opacity-90 dark:border-blue-400 dark:border-opacity-20">
                    <img src="app/img/fb.webp" alt="facebook-almond-tree" />
                </div>
                <div class="phone:pt-5 sm:pt-6 lg:pt-7 xl:pt-8 2xl:pt-10 fb-page" data-href="https://www.facebook.com/almondtreewellnesskenya" data-tabs="timeline" data-width="500" data-height="800" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/almondtreewellnesskenya" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/almondtreewellnesskenya">Almond Tree Wellness Center</a></blockquote>
                </div>
            </div>
        </div>
        <?php include "msg.php" ?>
    </div>
    <!-- </div> -->
    <?php include "footer.php" ?>
</div>
</body>