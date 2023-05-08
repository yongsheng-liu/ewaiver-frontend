<?php
use app\extensions\helper\WaiverHelper;
$metaText = '<meta property="og:title" content="Best Electronic Signature Waiver | Free Waiver Signing App ">
<meta property="og:site_name" content="WaiverElectronic">
<meta property="og:url" content="https://www.waiverelectronic.com/electronic-signature-waiver">
<meta property="og:description" content="WaiverElectronic provides you the best electronic signature waiver release solution that allows you to collect digital waiver signatures online. ">
<meta property="og:type" content="website">
<meta property="og:image" content="https://waiverphoto.s3.amazonaws.com/images/0uqQr6-1副本.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@WaiverElectron1">
<meta name="twitter:title" content="Best Electronic Signature Waiver | Free Waiver Signing App">
<meta name="twitter:description" content="WaiverElectronic provides you the best electronic signature waiver release solution that allows you to collect digital waiver signatures online.">
<meta name="twitter:image" content="https://waiverphoto.s3.amazonaws.com/images/0uqQr6-1副本.jpg">';

$this->title("Best Electronic Signature Waiver | Free Waiver Signing App ");
$this->WaiverHelper->setDescription("WaiverElectronic provides you the best electronic signature waiver release solution that allows you to collect digital waiver signatures online.");
$this->WaiverHelper->setCanonicalLink("https://www.waiverelectronic.com/electronic-signature-waiver");
$this->WaiverHelper->setPageMeta($metaText);
?>

<section id="feature-hero1" class="hero electronic-signature-bg common-banner">
    <div class="inner">
        <div class="copy">
            <h1 style="width: 80%;margin: auto;">Streamline your business with the best electronic waiver solution</h1>
            <h2>Support collecting electronic waivers on multiple platforms</h2>
            <p class="badges others-page-down-App ">
                <a href="https://apps.apple.com/us/app/waiverelectronic-online-waiver/id1120918528" class="app apple-light"><span class="accessAid sr-only">Download on the Apple Store</span></a>
                <a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250" class="app android-light"><span class="accessAid sr-only">Get it on Google Play</span></a>
            </p>
            <a href="/electronic-signature-waiver#section4" style="color:white"><h3 class="button signup" style="font-weight: 400;">Get your free trial</h3></a>
        </div>
    </div>
</section>

<div class="row electronic-signature-page">
    <div class="sectionPrice" style="padding:40px;">
        <h3 style="background-color: white; color: #0070ba; font-weight:400!important;text-align:center !important;">Power your business with the legally bind electronic signatures</h3>
    </div>
</div>

<section class="onlineWaiverSection electronic-signature-page">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Collect Electronic Signatures on Waiver Kiosk App</h4>
            <p>The electronic signature is the legal equivalent to the traditional signatures on paper. Digital signature waiver is 100% legal. President Clinton signed electronic waiver into law in 2000. Customers can sign their names with fingers easily with our waiver signing app.</p>
        </div>
        <div class="col-md-6">
            <img alt="WaiverElectronic" src="https://waiverphoto.s3.amazonaws.com/images/0uqQr6-1副本.jpg" style="width:100%;margin-top:-30px;">
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection electronic-signature-page">
    <div class="containerCentered container reverse-flow">
        <div class="col-md-6">
            <img alt="WaiverElectronic" src="https://waiverphoto.s3.amazonaws.com/images/fHtB2q-computer sign1副本.jpg" style="width:90%;margin-top:-50px;">
        </div>
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Collect Electronic Signatures on a Computer Browser</h4>
            <p>Open the online waiver links in any computer browser, customers can sign electronic signatures using mouse. </p>
        </div>
    </div>
</section>
<hr class="new-line mobile-newLine"/>
<section class="onlineWaiverSection electronic-signature-page">
    <div class="containerCentered container">
        <div class="col-md-6">
            <h4 id="top-title" class="textUppercased h3-to-h4" style="text-align: left;text-transform: uppercase;margin-bottom: 30px;">Add Electronic Initials on the electronic waiver form</h4>
            <p>Add legally-binding electronic initials to sections of your waiver which needs extra attention.  </p>
        </div>
        <div class="col-md-6">
            <img alt="WaiverElectronic" src="https://waiverphoto.s3.amazonaws.com/images/Yd4IAo-initial副本.jpg" style="width:95%;margin-top: -50px;">
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
