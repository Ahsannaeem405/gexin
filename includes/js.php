<script src="js/jquery-3.6.0.js"></script>
<!--<script src="js/bootstrap.min.js"></script>  --> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap_5.min.js"></script>

<script src="js/main.js"></script>
<script src="js/custom.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/tel-input.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/otp.js"></script>
<script type="text/javascript">
    // pricing form steps
    $(document).ready(function () {

        var node = $(window).width();

        if (node < 768) {
            $('.footer-links-box .accordion-collapse').removeClass('show');
        }
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var price_steps = 1;
        // console.log('yes');

        $(".next").click(function () {

            current_fs = $(this).parent().parent().parent();
            next_fs = $(this).parent().parent().parent().next();
            price_steps += 1;
            document.getElementById("slide-steps").innerHTML = price_steps;

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function () {

            current_fs = $(this).parent().parent().parent();
            previous_fs = $(this).parent().parent().parent().prev();
            price_steps -= 1;
            document.getElementById("slide-steps").innerHTML = price_steps;

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function () {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function () {
            return false;
        })

        $('.login-btn').on('click', function () {
            $('#addLoading').addClass('loading-border');
            $('#login-form').addClass('d-none');
            $('.loading-box').removeClass('d-none');
            setTimeout(function () {
                window.location.href = 'account.php';
            }, 3000);
        });
        //hamburger icon 
        $("#hamburger-icon").on('click',function(){
        let state = $("#hamburger-icon").attr('data-state')
            if(state == 'non-active')
            {
                $("#hamburger-icon").removeClass('fa-bars')
                $("#hamburger-icon").addClass('fa-times')
                $("#hamburger-icon").attr('data-state','active')
            }else{
                $("#hamburger-icon").removeClass('fa-times')
                $("#hamburger-icon").addClass('fa-bars')
                $("#hamburger-icon").attr('data-state','non-active')
            }
        })
    });
    // pricing slick carousel 
    jQuery(document).ready(function ($) {
        $('.slider').slick({
            dots: false,
            infinite: false,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                }
            ]

        });
    });
    $(document).on('click', ".replay-gal", function () {
        $('.slider').slick('refresh');
        return false;
    });
    // pricing inner forms 
    var checkboxEle = $(".itemCheck");
    checkboxEle.next().hide();
    checkboxEle.click(function () {
        debugger;
        var panelDiv = $(this).next();
        if ($(this).is(":checked")) {
            panelDiv.slideDown();
        } else {
            panelDiv.slideUp();
        }
    });
    $('#dollar').on('change', function () {
        $('.section-otp').hide();
        if ($(this).is(':checked') == true) {
            $('.dollar').show();
            $('.goldVoucher').hide();
        } else {
            $('.dollar').hide();
            $('.goldVoucher').hide();

        }


    })
    $('#goldVoucher').on('change', function () {
        $('.section-otp').hide();
        if ($(this).is(':checked') == true) {
            $('.dollar').hide();
            $('.goldVoucher').show();
        } else {
            $('.dollar').hide();
            $('.goldVoucher').hide();

        }

    });
    $('#nextbtn').on('click', function () {
        $('#imgSource').attr('src', 'images/lock-gray.svg');
        $('.section-otp').show();
        $("#inputValueChange").prop('readonly', true);


    })
    $('#nextbtnNew').on('click', function () {
        $('#imgSource').attr('src', 'images/lock-gray.svg');
        $('.section-otp').show();
        $("#voucher").prop('readonly', true);
    })

    $("#inputValueChange").on("input", function () {
        if ($(this).val() >= 0) {
            $('#inputValueRefect').text($(this).val());
        } else {
            $('#inputValueRefect').text(0);
        }

    });

    function onlyNumberKey(evt) {

        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) {
            return false;
        } else {
            return true;
        }


    }

    function transactionWithId() {
        window.location.href = 'transaction-detail-id.php';
    }


    onkeypress = "return onlyNumberKey(event)"
    maxlength = "11"


</script>
