<nav class="navbar navbar-expand-lg sticky-top navbar-light rtl" style="direction:ltr">
    <div class="container">
        <a class="navbar-brand d-md-block d-lg-block d-xl-block d-none" href="#">
            <img src="images/logo.png" alt="">
        </a>
        <a class="navbar-brand mbl-logo d-md-none d-lg-none d-xl-none d-block" href="#">
            <img src="images/logo-icon.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" id="hamburger-icon" data-state="non-active" onclick={submenushow()}></i>
            <!-- <span class="navbar-toggler-icon">
      </span> -->
        </button>
        <div class="collapse navbar-collapse animate__animated animate__fadeInDown" id="navbarSupportedContent">
           <ul class="navbar-nav" id="navbarNav">
                <li class="nav-item browse mb-2 pt-2 d-lg-none d-md-block d-sm-block">
                    <a href="javascript:;" class="nav-link" target="_self">
                        <p class="nav-text mb-0 float-end browse-text-1"><i class="fa fa-user"></i> ahmed.bdr19's Account</p>
                        <h1 class="nav-text text-dark"><span class="browse-text-1">Browse</span><br>جيكسن</h1>
                    </a>
                </li>
                <li class="nav-item nav-item-block new-head d-lg-none d-md-block d-sm-block mt-2"><a href="javascript:;" class="nav-link gm-header" target="_self"><i style="float:left;" class="fa fa-home float-start me-2 pt-1"></i> جيكسن </a></li>

 
                <li class="nav-item dropdown active" id="__BVID__16">


    <ul class="navbar-nav mb-2 mb-lg-0">

        <li class="nav-item new-head ">
          <a class="nav-link gm-header " aria-current="page" href="#">شحن الألعاب </a>
        </li>
        
        <li class="nav-item dropdown new-head   helpDropBox">
          <a class="nav-link  gm-header dropdown-toggle" href="#" id="helpDrop" role="button" data-bs-toggle="helpDrop" aria-expanded="false">
              
              <i class="fa fa-caret-left mt-1 d-lg-none d-md-block d-sm-block " style="float:left;" ></i> 

             الاقسام
          </a>
          <ul class="dropdown-menu" aria-labelledby="helpDrop">
              <li><a class="dropdown-item gm-header" href="#">سحب</a></li>
            <li><a class="dropdown-item gm-header" href="#">اكسسورات</a></li>
            <li><a class="dropdown-item gm-header" href="#">اضافه الرصيد</a></li>
            <li><a class="dropdown-item gm-header" href="#">اجهزه الالعاب</a></li>
            <li><a class="dropdown-item gm-header" href="#">بيع و شراء</a></li>
            <li><a class="dropdown-item gm-header" href="#">بطولات</a></li>
            <li><a class="dropdown-item gm-header" href="#">اعاده شحن الارصده</a></li>
            <li><a class="dropdown-item gm-header" href="product-catalog.php">بطاقات الالعاب</a></li>
            <li><a class="dropdown-item gm-header" href="product-catalog.php">توب اب</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link gm-header" aria-current="page" href="#">الرئيسية</a>
        </li>
        
      </ul>
 
        </div>
        
        <div class="header-right">
            <div class="header-right-inner">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link reload" href="reload.php">
                            <i class="fa fa-redo"></i>
                            <span>اضافه رصيد</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search" href="#">
                            <i class="fa fa-search" onclick="showOrHideDiv()"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang-btn"> Others Eng</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDrop" role="button" data-bs-toggle="userDrop" aria-expanded="false">
                            <div class="profile-btn">
                                <div class="profile-pic">
                                    <i class="fa fa-user"></i>
                                    <span>&nbsp;</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right user-menu" aria-labelledby="userDrop">
                            <div class="user-menu-inner">
                                <div class="user-info-box">
                                    <div class="user-dp">
                                        <img src="images/avatar.jpg" alt="">
                                    </div>
                                    <div class="user-info">
                                        <div class="user-name">
                                            <p>JohnDoe</p>
                                        </div>
                                        <div class="user-mail">
                                            <p>Johndoe@eample.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="currency-info">
                                    <div class="row content-center">
                                        <div class="col-12">
                                            <div class="currency-item">
                                                <img src="images/zgold.png" alt="">
                                                <span>0.00</span>
                                                <div class="menu-curr-btn">
                                                    <a href="" class="reloadBtn">أعاده تعبئه الرصيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-6">
                        <div class="currency-item">
                          <img src="images/zsilver.png" alt="">
                          <span>0.000</span>
                          <div class="menu-curr-btn">
                            <a href="" class="redeemBtn">Redeem</a>
                          </div>
                        </div>
                      </div> -->
                                    </div>
                                    <!-- <p class="disclaimer">500 منحة Gexin Silver تنتهي صلاحيتها في 30 تشرين الثاني (نوفمبر) 2022</p> -->
                                    <div class="view-detail-btn">
                                        <a href=""><i class="fa fa-caret-left"></i> عرض التفاصيل </a>
                                    </div>
                                </div>
                                <hr>

                                <div class="complete-prof">
                                    <p class="text--sm">أكمل ملفك الشخصي الآن لتحصل على<br /> <img src="images/zsilver.png" alt=""> 500</p>
                                    <div class="complete-prof-btn">
                                        <a href="account.php">أكمل ملفك الشخصي </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="profile-dropdown-section">
                                    <a href="inbox.php" class="nav-link-profile nav-link gtm-header-profile">صندوق الوارد</a>
                                    <!-- <a href="" class="nav-link-profile">عرض ملخص الحساب</a> -->
                                    <a href="transaction.php" class="nav-link-profile nav-link gtm-header-profile">المعاملات</a>
                                    <a href="account.php" class="nav-link-profile nav-link gtm-header-profile">ملف تعريفي للمستخدم</a>
                                    <a href="submit-ticket.php" class="nav-link-profile nav-link gtm-header-profile">قدم التذكرة</a>
                                    <hr>
                                    <a href="login.php" class="nav-link-profile nav-link gtm-header-profile">خروج</a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!--  -->
                </ul>
            </div>
        </div>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).click(function() {


// $('.modal').css('display', 'none');
$("#navbarSupportedContent").hide();


});
$("#hamburger-icon").click(function(event) {
// $( ".navbar-toggler" ).removeClass( "collapsed" );

$("#navbarSupportedContent").show();

event.stopPropagation();
});

$("#navbarSupportedContent").click(function(event) {
$("#navbarSupportedContent").show();

event.stopPropagation();

});
</script>

<script>

    
    // function showOrHideDiv() {
    //     var v = document.getElementById("showOrHide");
    //     if (v.style.display === "none") {
    //         v.style.display = "block";
    //     } else {
    //         v.style.display = "none";
    //     }
    // }
</script>