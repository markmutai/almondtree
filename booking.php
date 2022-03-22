<div class="modal" id="consent-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
    </button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title almnd_tg-phone almnd_tg-md almnd_tg-xl almnd_tg-2xl" id="booking_title">Informed Consent For Treatment And Cancellation Policy</h2>
                <!-- <script>
                    $('.close, .modal-dialog').click(function() {
                        $('.nav-booking').removeClass('nav-active nav-active_bug_fix');
                        // $('.nav-booking').addClass('nav-active_bug_fix');
                    });
                </script> -->
            </div>
            <div class="modal-body phone:text-sm sm:text-xs lg:text-sm xl:text-sm 2xl:text-base phone:leading-5 md:leading-7 lg:leading-8 xl:leading-9 2xl:leading-10 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-50">
                <div class="consent-details">
                    Obtaining an informed consent form is necessary to ensure that you are aware of the treatment
                    being offered. Since each individual reacts differently to therapy, it is not possible to
                    predict all risks &amp; reactions.
                    <br>
                    <br>
                    By submitting this informed consent form:
                    I understand that the treatments being provided to me or the person named below for whom I am
                    legally responsible to may include:
                    <br>
                    <ul class="treatments list-disc pt-2 pb-3 phone:pl-3 md:pl-5">
                        <li>Traditional Talk Therapy</li>
                        <li>Counselling</li>
                        <li>Relationship/Marriage Counselling</li>
                        <li>Professional (Work Related) Counselling</li>
                        <li>Sex Therapy</li>
                    </ul>
                    <p class="pb-4">
                        And I hereby request &amp; consent to the performance of the above treatments on me.
                    </p>
                    I also understand that a session lasts 45 to 90 min &amp; follow-up sessions will be
                    recommended after the first initial visit. For effective recovery it is advised to have 6-9
                    visits, depending on the client need.
                    <br>
                    <br>
                    I am aware of the risks outlined above &amp; have discussed any concerns I may have regarding my
                    therapy. I do not expect the counsellor to be able to anticipate &amp; explain all possible risks
                    &amp; complications of treatment, &amp; I wish to rely on the counsellor to exercise judgement
                    during the course of treatment which they think at the time, based upon the facts then known is
                    in my best interest. I understand results are not guaranteed.
                    <br>
                    <br>
                    I am consenting to the treatments offered by Catherine Holden or by her fellow counsellors &amp;
                    to the treatments recommended by them as well. I have been told about the risks &amp; have had an
                    opportunity to ask questions.
                    <br>
                    <br>
                    Since e-mail is not a totally confidential means of communication, please consider this as you
                    communicate with us. While we will make a reasonable effort to keep what is written private, it
                    is suggested that very personal information be communicated by phone, on paper, or in person.
                    <br>
                    <br>
                    If you are experiencing a life-threatening emergency, please call emergency services
                    (999/112/911) immediately. If this occurs during out of office hours, &amp; is not an emergency,
                    please contact the therapist during office hours.
                    <br>
                    <br>
                    <strong>Cancellations</strong>
                    <br>
                    Cancellation is free, if done 24 hours in advance of the appointment. Please contact us through
                    e-mail <script language="JavaScript">
                        var username = "info";
                        var hostname = "almondtreewellness.co.ke";
                        var linktext = username + "@" + hostname;
                        document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linktext +
                            "</a>");
                    </script> or by phone (+254 713 896 905) to do so. We request that you also provide feedback on
                    why you have cancelled.
                    <br>
                    <br>
                    <strong>Rescheduling your appointment</strong>
                    <br>
                    If you wish to reschedule your appointment to an alternative date, please contact us at least 24
                    hours before appointment time through e-mail (info@almondtreewellness.co.ke) or by phone (+254
                    713 896 905). You may reschedule an original appointment twice, after which your initial visit
                    fee will be forfeited.
                    <br>
                    <br>
                    The information contained in this form is confidential. It is intended solely for counsellor.
                    <br>
                </div>
            </div>
            <div class="row modal-footer border-t-2 bg-gray-50 text-gray-800 dark:bg-gray-800 dark:text-gray-50 dark:border-gray-50 dark:border-opacity-20">
                <div class="col-xl-12 consent-check flex_cntr_mdl btn_styl-phone btn_styl-sm btn_styl-md btn_styl-xl btn_styl-2xl">
                    <input id="checkBox" type="checkbox" onchange="document.getElementById('confirmConsent').disabled = !this.checked; $('#confirmConsent').val('CONTINUE');" />
                    <span class="consent-check_txt ml-2 phone:text-sm sm:text-xs lg:text-sm xl:text-sm 2xl:text-base phone:leading-7 md:leading-7 lg:leading-8 xl:leading-10 2xl:leading-10">
                        I agree to all the terms of the policy
                    </span>
                </div>
                <script>
                    $('input:checkbox').removeAttr('checked');
                </script>
                <!-- <button type="button" class="col-xl-12 btn modal-btn btn-secondary" data-dismiss="modal">Close</button> -->
                <input class="col-xl-12 flex_cntr_mdl btn_styl-phone btn_styl-sm btn_styl-md btn_styl-xl btn_styl-2xl tracking-wide consentButton btn btn-consent" type="submit" id="confirmConsent" value="Continue (Agree To Policy Terms)" disabled onclick="document.getElementById('btnClose').innerHTML = 'CLOSE'" data-dismiss="modal" />
                <script>
                    $('#checkBox').click(function() {
                        if ($('#checkBox').prop('checked') == false) {
                            return false;
                        } else if ($('#checkBox').prop('checked') == true) {
                            $('.btn-consent').click(function() {
                                $('.booking_window, .booking_box, .ms-booking').addClass('booking_active');
                                // $('.tatwc-fluid, .tatwc-fluid-content').addClass('blur_fx');
                                $('.booking_box').load('ms-booking.php');
                                $('.booking_load').show();
                                // $('.bookings_box').addClass('bookings_active');
                                // $('.ms-booking').css('visibility', 'show');
                            });
                        }
                        $('#bkn_close').click(function() {
                            $('.booking_window, .booking_box, .ms-booking').removeClass('booking_active');
                            // $('.tatwc-fluid, .tatwc-fluid-content').removeClass('blur_fx');
                            $('#checkBox').prop('checked', false);
                            $('.btn-consent').prop('disabled', true);
                            $('.btn-consent').val('Continue (Agree To Policy Terms)');
                            $('.nav-booking').removeClass('nav-active');
                            $('.nav-booking').removeClass('nav-active_bug_fix');
                            // $('.ms-booking').css('visibility', 'hidden');
                        })
                    });
                    $('.payment_option').hide();
                    $('.bookButton').click(function() {
                        alert('working');
                    });
                </script>
            </div>
        </div>
    </div>
</div>