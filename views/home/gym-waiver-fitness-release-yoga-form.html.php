<?php
use app\extensions\helper\WaiverHelper;
$metaText = '<meta property="og:title" content="Online Waiver App | Fitness, Gym, Yoga Waivers and Release Form">
<meta property="og:site_name" content="WaiverElectronic">
<meta property="og:url" content="https://www.waiverelectronic.com/gym-waiver-fitness-release-yoga-form">
<meta property="og:description" content="Customize waivers for health clubs, yoga studios, and sports, and use our online fitness waivers and your health release form. ">
<meta property="og:type" content="website">
<meta property="og:image" content="https://waiverphoto.s3.amazonaws.com/images/ZiZRRy-waiver-kiosk-app-ipad.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WaiverElectron1">
<meta name="twitter:title" content="Online Waiver App | Fitness, Gym, Yoga  Waivers and Release Form">
<meta name="twitter:description" content="Customize waivers for health clubs, yoga studios, and sports, and use our online fitness waivers and your health release form.">
<meta name="twitter:image" content="https://waiverphoto.s3.amazonaws.com/images/ZiZRRy-waiver-kiosk-app-ipad.jpg">';

$this->title("Online Waiver App | Fitness, Gym, Yoga  Waivers and Release Form");
$this->WaiverHelper->setDescription("Customize waivers for health clubs, yoga studios, and sports, and use our online fitness waivers and your health release form.");
$this->WaiverHelper->setCanonicalLink("https://www.waiverelectronic.com/gym-waiver-fitness-release-yoga-form");
$this->WaiverHelper->setPageMeta($metaText);
?>

<section id="gym-hero1" class="hero gym-waiver common-banner">
    <div class="inner">
        <div class="copy">
            <h1 style="width: 80%;margin: auto; text-align: center;">The Best Electronic Waiver Service Designed for Your <strong> Gym, Fitness, Yoga </strong> Business.</h1>
            <h2>Perfect for online fitness waiver, yoga waiver, electronic gym liability waivers and new member registration form.</h2>
            <p class="badges others-page-down-App ">
                <a href="https://apps.apple.com/us/app/waiverelectronic-online-waiver/id1120918528" class="app apple-light"><span class="accessAid sr-only">Download on the Apple Store</span></a>
                <a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250" class="app android-light"><span class="accessAid sr-only">Get it on Google Play</span></a>
            </p>
            <a href="/gym-waiver-fitness-release-yoga-form#section4" style="color:white"><h3 class="button signup" style="font-weight: 400;">Get your free trial</h3></a>
        </div>
    </div>
</section>

<section class="onlineWaiverSection gym-waiver-page">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Create Waiver Form in Two Minutes</h4>
            <p>WaiverElectronic offers a very flexible online waiver form creation tool and you can use it to create many different forms on your own. You can custom your digital waivers with your own logo and background.</p>
            <ul class="des-list">
                <li class="row-li">Fitness Waiver</li>
                <li class="row-li">Yoga Waiver</li>
                <li class="row-li">Gym Waiver</li>
                <li class="row-li">Member Registration Form</li>
                <li class="row-li">New Client Intake Form</li>
                <li class="row-li">Fitness Evaluationt</li>
                <li class="row-li">Participant Consent</li>
                <li class="row-li">Crossfit Waiver</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img alt="Waiver Electronic: Sign Electronic waivers" src="https://waiverphoto.s3.amazonaws.com/images/1pLXaU-image-landing.jpg" style="width:100%;">
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection gym-waiver-page gym-waiver-page-flex" style="padding-top: 3.5em;">
    <div class="containerCentered container">
        <div class="col-md-6" style="text-align: left;padding-left: 30px;">
            <img alt="Waiver Electronic: Waiver Kiosk App" src="https://waiverphoto.s3.amazonaws.com/images/ZiZRRy-waiver-kiosk-app-ipad.jpg" style="width:90%;margin-bottom:30px;">
        </div>
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Collect Gym, Fitness, Yoga waivers electronically </h4>
            <p>You can collect the digitals waivers using many different platforms. </p>
            <ul class="des-list">
                <li>Download our waiver kiosk app on your iPad, Android tablets, or Amazon Fire. Convert your tablets into a waiver check in station. </li>
                <li>Put the waiver link online and let your customers sign it through their own smart phones or computer browsers. </li>
            </ul>
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection gym-waiver-page" style="padding-top: 3.5em;">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Manage Digital Waivers</h4>
            <p>WaiverElectronic Offers the best digital waiver management system which you can use to manage your gym, fitness, or yoga waivers paperless. All of your waivers will be stored in the cloud based system forever. You can search and find your previously signed waiver in seconds simply, so you can get rid of the paper piles forever.</p>
        </div>
        <div class="col-md-6">
            <img alt="Waiver Electronic: Manage Waivers Online" src="https://waiverphoto.s3.amazonaws.com/images/11PVoE-manage-waivers-online.jpg" style="width:100%;margin-top:-35px;">
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
