$(document).ready(function () {
    document.getElementById("confirmConsent").disable = true;


    document.getElementById("checkBox").checked = false;

    var consentWindow = document.querySelector(".consentWindow");

    document.addEventListener("click", function (event) {
        if (event.target.closest(".makeBooking, .makeBookingNav, .enquiryRedirect, .servicesBooking")) {
            consentWindow.classList.remove("de-active");
            consentWindow.classList.add("active");
        }

        if (event.target.closest(".consentCloseWindow")) {
            consentWindow.classList.add("de-active");
            consentWindow.classList.remove("active");
        }
    });

    var consentClose = document.querySelector(".consentWindow");
    //    var messageCloseFail = document.querySelector("#messageFail");

    document.addEventListener("click", function (event) {
        if (event.target.closest(".consentBtnClose")) {
            consentWindow.classList.add("de-active");
        }
    });

    //smScreenMenu



    /*document.addEventListener("click", function (event) {
        if (document.getElementById("checkBox").checked = false;) {
            document.getElementById("confirmConsent").value = "CONTINUE TEST";
        }
    });*/

    document.addEventListener("click", function (event) {
        if (event.target.closest(".consentBtnClose")) {
            document.getElementById("checkBox").checked = false;
            document.getElementById("confirmConsent").disabled = true;
        }
    });

    var retryIcon = document.querySelector(".retryIco");
    var loadIcon = document.querySelector(".circleLoad");
    var messageField = document.querySelector(".message-input");
    var emailField = document.getElementById("emailField");
    //     const isValidEmail = emailField.checkValidity();

    /* document.querySelector(".snd-btn").addEventListener("click", function () {
         if (emailField == null) {
             alert("working");
         }
     });*/


    /*
            function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate() {
    var $result = $(".snd-btn");
    var email = $("#email").val();
    $result.text("");

    if (validateEmail(email)) {
        //                    $result.text(email + " is valid :)");
        $result.css("color", "green !important");
    } else {
        //                    $result.text(email + " is not valid :(");
        $result.css("color", "red !important");
    }

    $(".snd-btn").on("click", validate);
    */



    /* document.addEventListener("click", function (event) {
            if (event.target.closest(".snd-btn")) {

                alert("working");
            }
            loadIcon.style.opacity = "1";
            loadIcon.classList.add("spinStart");
        }
    });
*/
    /* document.addEventListener("click", function (event) {
         if (event.target.closest(".snd-btn")) {
             if (messageField != null) {
                 loadIcon.style.opacity = "1";
                 loadIcon.classList.add("spinStart");
             }
         }
     });*/

});

//function (checkFalse) = document.getElementById("checkBox").checked = false;
