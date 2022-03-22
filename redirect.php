<?php
include('top-atwc.php');
require_once('pesapal/OAuth.php');
require_once('pesapal/checkStatus.php');
require_once('db/dbconnector.php');

$pesapalMerchantReference    = null;
$pesapalTrackingId         = null;
$checkStatus                 = new pesapalCheckStatus();

if (isset($_GET['pesapal_merchant_reference']))
    $pesapalMerchantReference = $_GET['pesapal_merchant_reference'];

if (isset($_GET['pesapal_transaction_tracking_id']))
    $pesapalTrackingId = $_GET['pesapal_transaction_tracking_id'];

/** check status of the transaction made
 *There are 3 available API
 *checkStatusUsingTrackingIdandMerchantRef() - returns Status only. 
 *checkStatusByMerchantRef() - returns status only.
 *getMoreDetails() - returns status, payment method, merchant reference and pesapal tracking id
 **/

//$status 			= $checkStatus->checkStatusByMerchantRef($pesapalMerchantReference);
//$responseArray	= $checkStatus->getTransactionDetails($pesapalMerchantReference,$pesapalTrackingId);
$status             = $checkStatus->checkStatusUsingTrackingIdandMerchantRef($pesapalMerchantReference, $pesapalTrackingId);

//At this point, you can update your database.
//In my case i will let the IPN do this for me since it will run
//IPN runs when there is a status change  and since this is a new transaction, 
//the status has changed for UNKNOWN to PENDING/COMPLETED/FAILED
?>
<div class="container-fluid-content tatwc-fluid-content bg-gradient-to-br from-almndPink to-almndBlue dark:from-almndDblue dark:to-almndBlk">
    <!--  <div class="test">
        <div class="child"></div>
    </div> -->
    <div class="beach-vid_min">
        <div class="tatwc-logo-min">
            <a href="index.php">
                <img class="phone:h-52 portrait:h-72 sm:h-52 md:h-56 lg:h-64 2xl:h-almndXxl" src="app/img/logo.webp" alt="The Almond Tree Wellness Center" title="The Almond Tree Wellness Center">
            </a>
        </div>
        <?php include 'tgl.php' ?>
    </div>
    <div class="container tatwc-container xl:max-w-3xl 2xl:max-w-4xl p-0">
        <div class="ptn opacity-50"></div>
        <div class="col-xl-12 tatwc-tagline tatwc-tagline-about tatwc-about-title text-white">
            <h1 class="almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl">Payment Received</h1>
        </div>
        <div class="col-xl-12 chnk_styl chnk_pdn-phone chnk_pdn-md chnk_pdn-xl chnk_pdn-2xl txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl text-center tatwc-intro tatwc-information bg-bgray-50 bg-opacity-80 text-gray-900 dark:bg-black dark:bg-opacity-50 dark:text-white">
            <blockquote>
                <h3 class="phone:text-xs md:text-mini 2xl:text-tiny tracking-wide py-8 mb-4 border-t-2 border-b-2 border-gray-200 dark:border-lime-400 dark:border-opacity-20 text-gray-800 text-opacity-75 dark:bg-bgray-800 dark:bg-opacity-0 dark:text-gray-50 dark:text-opacity-90">Merchant reference</h3>
                <div class="ref_inf txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl">
                    <?php echo $pesapalMerchantReference; ?>
                </div>
                <br />
                <h3 class="phone:text-xs md:text-mini 2xl:text-tiny tracking-wide py-8 mb-4 border-t-2 border-b-2 border-gray-200 dark:border-lime-400 dark:border-opacity-20 text-gray-800 text-opacity-75 dark:bg-bgray-800 dark:bg-opacity-0 dark:text-gray-50 dark:text-opacity-90">Pesapal Tracking ID</h3>
                <div class="ref_inf txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl">
                    <?php echo $pesapalTrackingId; ?>
                </div>
                <br />
                <h3 class="phone:text-xs md:text-mini 2xl:text-tiny tracking-wide py-8 mb-4 border-t-2 border-b-2 border-gray-200 dark:border-lime-400 dark:border-opacity-20 text-gray-800 text-opacity-75 dark:bg-bgray-800 dark:bg-opacity-0 dark:text-gray-50 dark:text-opacity-90">Status</h3>
                <div class="ref_inf txt-phone txt-sm txt-md txt-lg txt-xl txt-2xl">
                    <?php echo $status; ?>
                </div>
                <br />
            </blockquote>
        </div>
        <?php include "msg.php" ?>
    </div>
    <?php include "footer.php" ?>
</div>
</body>