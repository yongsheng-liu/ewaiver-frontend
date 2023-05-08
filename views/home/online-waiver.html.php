<?php
use app\extensions\helper\WaiverHelper;
$metaText = '<meta property="og:title" content="Online Waiver System | Start to Sign Online Waivers today!">
<meta property="og:site_name" content="WaiverElectronic">
<meta property="og:url" content="https://www.waiverelectronic.com/online-waiver">
<meta property="og:description" content="WaiverElectronic provides an online waiver management system that makes online waiver signing easier than ever, Online waivers solution to manage your signed waivers and customer data. ">
<meta property="og:type" content="website">
<meta property="og:image" content="https://waiverphoto.s3.amazonaws.com/images/1pLXaU-image-landing.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WaiverElectron1">
<meta name="twitter:title" content="Online Waiver System | Start to Sign Online Waivers today!">
<meta name="twitter:description" content="WaiverElectronic provides an online waiver management system that makes online waiver signing easier than ever, Online waivers solution to manage your signed waivers and customer data.">
<meta name="twitter:image" content="https://waiverphoto.s3.amazonaws.com/images/1pLXaU-image-landing.jpg">';

$this->title("Online Waiver System | Start to Sign Online Waivers today!");
$this->WaiverHelper->setDescription("WaiverElectronic provides an online waiver management system that makes online waiver signing easier than ever, Online waivers solution to manage your signed waivers and customer data.");
$this->WaiverHelper->setCanonicalLink("https://www.waiverelectronic.com/online-waiver");
$this->WaiverHelper->setPageMeta($metaText);
?>

<section id="feature-hero1" class="hero online-waiver-bg common-banner">
    <div class="inner">
        <div class="copy" style="top:45%;">
            <H1 style="width: 80%;margin: auto;">Set Up the Online Waiver Kiosk in minutes and Start to Sign Waiver Online Today!</H1>
            <h2>The best waiver software that allows you to create and collect online waiver signatures effortlessly. </h2>
            <p class="badges others-page-down-App ">
                <a href="https://apps.apple.com/us/app/waiverelectronic-online-waiver/id1120918528" class="app apple-light"><span class="accessAid sr-only">Download on the Apple Store</span></a>
                <a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250" class="app android-light"><span class="accessAid sr-only">Get it on Google Play</span></a>
            </p>
            <a href="/online-waiver#section4" style="color:white"><h3 class="button signup" style="font-weight: 400;">Get your free trial</h3></a>
        </div>
    </div>
</section>

<div class="row online-waiver-page">
    <div class="sectionPrice" style="padding:40px;">
        <h3 style="background-color: white; color: #0070ba; font-weight:400!important;text-align:center !important;">The ultimate online waiver solution that provides online waiver app for both Android tablets and iPads. </h3>
    </div>
</div>

<section class="onlineWaiverSection online-waiver-page">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Create Custom Online Liability Waiver Form in Minutes</h4>
            <p>You can create your online release form on your own using our powerful online waiver template tool. It fully supports minor liability waiver. You can also send us your existing document and we can convert it into online waiver form for you for free. </p>
        </div>
        <div class="col-md-6">
            <img alt="Waiver Electronic: Sign online waivers" src="https://waiverphoto.s3.amazonaws.com/images/1pLXaU-image-landing.jpg" style="width:100%;">
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection online-waiver-page">
    <div class="containerCentered container reverse-flex">
        <div class="col-md-6">
            <img alt="Waiver Electronic: Sign online waivers" src="https://waiverphoto.s3.amazonaws.com/images/zdK2ai-view-section-img.jpg" style="width:90%;">
        </div>
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Sign Online Waivers on a Computer</h4>
            <p>After creating your online digital waiver, you can open the unique links for each of your online waiver form and start to collect waivers online! </p>
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection online-waiver-page">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Collect Online Waivers using Digital Waiver Kiosk App</h4>
            <p>Free online waiver kiosk app available for iPad, Android tablets and Amazon Fire tablets. You can download the waiver software on these mobile devices and turn them into the dedicated waiver station. The digital waiver signing app also supports offline mode. You can sign waivers without internet connection. </p>
        </div>
        <div class="col-md-6">
            <img alt="Waiver Electronic: Sign online waivers" src="https://waiverphoto.s3.amazonaws.com/images/C3b7Rj-kiosk.jpg" style="width:95%;">
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection online-waiver-page">
    <div class="containerCentered container reverse-flex">
        <div class="col-md-6">
            <img alt="Waiver Electronic: Sign online waivers" src="https://waiverphoto.s3.amazonaws.com/images/kd8z2v-view-section2-img_02.jpg" style="width:90%;">
        </div>
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Manage the Signed Electronic Waivers Online</h4>
            <p>All of the signed waivers are stored in our online waiver system securely. You can search and find your signed online waivers agreements within seconds. </p>
        </div>
    </div>
</section>
<a href="/features"><p class="view-all-btn view-all-btn-moblie"><span>VIEW MORE FEATURES</span></p></a>

<script >
    $(function () {
        $('#myTabs li').click(function (e) {
            e.preventDefault()
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var idx = $(this).index();
            $('#tab-content').children('div').removeClass('active in');
            $('#tab-content').children('div').eq(idx).addClass('active in');
        })
    }); 
</script>
