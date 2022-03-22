<button id="bkn_close" type="button" class="close">
    <i class="fas fa-times"></i>
</button>
<div class="col-xl-12 ms-booking p-0">

    <!-- <div class="booking_load"></div> -->
    <div class="ms-wrapper">
        <iframe class="ms_wndw" src='https://outlook.office365.com/owa/calendar/TheAlmondTreeWellnessCenterTATWC@almondtreewellness.co.ke/bookings/' width='100%' scrolling='yes' style='border:0;border-radius:10px;'></iframe>
    </div>
</div>
<script>
    $('.close').click(function() {
        // alert('working');
        $('.booking_window, .booking_box, .ms-booking').removeClass('booking_active');
        $('.tatwc-fluid, .tatwc-fluid-content').removeClass('blur_fx');
    })
</script>