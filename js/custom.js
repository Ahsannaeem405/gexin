$(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("fa-eye-slash");
            $('#show_hide_password i').removeClass("fa-eye");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("fa-eye-slash");
            $('#show_hide_password i').addClass("fa-eye");
        }
    });
});

// nav  bar toogle 
$(document).ready(function () {
    $(".dropdown-toggle").click(function () {
        // $(".dropdown-menu").toggle();
        $(this).next().toggle();
        return false;
    });

});

$(function () {
    $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());
});


// phone number select 
var input = document.querySelector("#phone");
window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "build/js/utils.js",
});


// header search bar 
function showOrHideDiv() {
    var v = document.getElementById("showOrHide");
    if (v.style.display === "none") {
        v.style.display = "block";
    } else {
        v.style.display = "none";
    }
}



$(function () {

    $(window).bind("resize", function () {
        console.log($(this).width())
        if ($(this).width() < 500) {
            $('.accordion-collapse').removeClass('show').addClass('red')
        } else {
            $('.accordion-collapse').removeClass('red').addClass('yellow')
        }
    }).resize();
})

