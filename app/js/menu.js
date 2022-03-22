$(document).ready(function () {
    var smWindow = document.querySelector(".smMenu");

    document.addEventListener("click", function (event) {
        if (event.target.closest(".smScreenMenu")) {
            smWindow.classList.add("active");
            //                        alert("working");
        }
        if (event.target.closest(".smScreenMenu")) {
            smWindow.classList.add("active");
            //                        alert("working");
        }
    });
});
