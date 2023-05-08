<?php

use app\extensions\helper\WaiverHelper;
$metaText = '<meta property="og:title" content="Waiver App for iPad and Android | Digital Waiver Kiosk">
<meta property="og:site_name" content="WaiverElectronic">
<meta property="og:url" content="https://www.waiverelectronic.com/waiver-app">
<meta property="og:description" content="Digital Waiver Apps - Collect digital waivers on your smartphone or tablets. Sign waivers through our waiver app. Try us for free today! ">
<meta property="og:type" content="website">
<meta property="og:image" content="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WaiverElectron1">
<meta name="twitter:title" content="Waiver App for iPad and Android | Digital Waiver Kiosk">
<meta name="twitter:description" content="Digital Waiver Apps - Collect digital waivers on your smart phone or tablets. Sign waivers through our waiver app. Try us for free today!">
<meta name="twitter:image" content="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png">';

$this->title("Waiver App for iPad and Android | Digital Waiver Kiosk");
$this->WaiverHelper->setDescription("Digital Waiver Apps - Collect digital waivers on your smart phone or tablets. Sign waivers through our waiver app. Try us for free today!");
$this->WaiverHelper->setCanonicalLink("https://www.waiverelectronic.com/waiver-app");
$this->WaiverHelper->setPageMeta($metaText);

?>

<section id="price-hero1" class="hero waiver-app-banner common-banner">
    <div class="inner">
        <div class="copy-app">
            <h1>The Best Waiver App for iPad, Android Tablets and Amazon Fire</h1>
            <h2>Download our digital waiver app today and turn your iPads or Tablets into a dedicated waiver signing station</h2>
            <p class="badges others-page-down-App ">
                <a href="https://apps.apple.com/us/app/waiverelectronic-online-waiver/id1120918528" class="app apple-light"><span class="accessAid sr-only">Download on the Apple Store</span></a>
                <a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250" class="app android-light"><span class="accessAid sr-only">Get it on Google Play</span></a>
            </p>
            <a href="/waiver-app#section4" style="color:white"><h3 class="button signup" style="font-weight: 400;">Get your free trial</h3></a>
            
        </div>
    </div>
</section>
<img class="ipad-img waiver-app-ipad-img" src="/img/ipadImage.png" alt="waiver signing app on ipad"/>
<section class="section price-section2 featureSection waiver-app">
    <div class="inside digital-inside">
        <div class="headerText">
            <h2>Digital Waiver App Features You Love</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <i class="fa fa-tablet inline" aria-hidden="true"></i>
                    <h4 class="stepHeader featureHeader">Set up as Waiver Kiosk</h4>
                </div>
                <p class="text">Download and install our waiver app on IOS, Android smart phone or tablets. Setup as Waiver Kiosk.</p>
            </div>
            <div class="col-md-6">
                <div>
                    <i class="fa fa-wifi inline" aria-hidden="true"></i>
                    <h4 class="stepHeader featureHeader">No Internet Required</h4>
                </div>
                <p class="text">Bad internet connection? No Wifi available? Not a problem! You can turn on airplane mode on your smart devices and store your signed waivers locally. Upload
                these local signed waivers when stable WIFI available.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <i class="fa fa-picture-o inline" aria-hidden="true"></i>
                    <h4 class="stepHeader featureHeader">Take photo and Attach to Digital Waivers.</h4>
                </div>
                <p class="text">You can scan the QR code on signed waivers and attach photos to them using the digital waiver app.</p>
            </div>
            <div class="col-md-6">
                <div>
                    <i class="fa fa-file-code-o inline" aria-hidden="true"></i>
                    <h4 class="stepHeader featureHeader">Customize your Own Splash Page on Waiver Signing App</h4>
                </div>
                <p class="text last-p">Add your own logo, select the background you like, choose and create your own waiver list.</p>
            </div>
        </div>
    </div>
     <div class="inside waiver-app-not-show">
        <h3 style="text-align: center; font-size: 30px;">Highest Rating Waiver Kiosk App in App Store</h3>
        <img class="comment-img" style="width: 90%; margin-top: 68px;" src="/img/ratings.png" alt="waiver signing app"/>

     </div>
</section>

<!--
<div class="demoWaiverFrame" style="display:none;">
    <span>Try Our Demo Waiver +</span>
</div>
<div class="demoWaiverFrameWindow" style='display:none;'>
    <span class="frameTitle">Try Our Demo Waiver -</span>
    <span class="closeFrame">×</span>
    <iframe id="iframeOnload" src="https://app.waiverelectronic.com/render/templateByRefId/59ad08b2e41824000e8a0101" frameborder=0 ></iframe>
</div>
<script>
    $(document).ready(function(e){  
    　　var iframe = document.getElementById("iframeOnload");    
        if (iframe.attachEvent) {    //ie
            iframe.attachEvent("onload", function() {    
                $('.demoWaiverFrame').show();
            });    
        } else {    
            iframe.onload = function() {    
                $('.demoWaiverFrame').show();
            };    
        }  
    })  
    $(function () {
        $('.demoWaiverFrame').click(function() {
            $('.demoWaiverFrameWindow').slideDown();
            $('.demoWaiverFrame').hide();
        })
        $('.closeFrame, .frameTitle').click(function() {
            $('.demoWaiverFrameWindow').slideUp();
            $('.demoWaiverFrame').show();
        })
    })
</script>
-->