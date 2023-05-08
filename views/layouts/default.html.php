<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title><?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('bootstrap.min', 'landing', 'font-awesome')); ?>
	<?php echo $this->html->script('jquery-3.1.1.min.js') ?>
	<?php echo $this->styles(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <META content="<?php echo $this->WaiverHelper->getDescription(); ?>" name="description">
	<META content="index,follow" name="robots">
	<META name="revisit-after" content="2 days">
	<META name="copyright" content="Copyright - All Rights Reserved 2021 waiverelectronic">
	<META content="index,follow" name="GOOGLEBOT">
	<META content="waiverelectronic"  name="Author">
	<META name="language" content="English (US)">
	<link href="https://plus.google.com/104217211088502604025" ref="publisher">
	<link rel="canonical" href="<?php echo $this->WaiverHelper->getCanonicalLink(); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
	<META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">
	<?php echo $this->WaiverHelper->getPageMeta(); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "http://www.waiverelectronic.com",
  "sameAs" : [ "https://www.facebook.com/waiverElectronic/", "https://twitter.com/WaiverElectron1" ],
  "name": "WaiverElectronic",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1 206 513 9702",
   "contactType": "Customer service"
    }
}
</script>

<!-- Global site tag (gtag.js) - Google Ads: 880584866 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-880584866"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-880584866');
</script>

</head>

<body class="content">
<div class="landing">
	<header id="fixedHeader" class="">
		<div class="headerContent">
			<div class="logo">
				<a href="/" id="logo">
				<img alt="WaiverElectronic" src="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png"></a>
			</div>
			<div id="header-buttons" class="header-buttons hidden-xs">
				<a href="/features" class="headerMenu">TOUR</a>
				<a href="/waiver-app" class="headerMenu">Waiver App</a>
				<a href="/templates" class="headerMenu">Waiver Gallery</a>
				<a href="/price" class="headerMenu" >PRICING</a>
				<a style="display: none" href="/blog" class="headerMenu" >BLOG</a>

				<a class="headerMenu" href="/#section4">CONTACT US</a>
				<a class="headerMenu" href="https://app.waiverelectronic.com/login">Log In</a>
				<a href="https://app.waiverelectronic.com/register" onclick="ga('send', 'event', 'registration', 'click', 'bottom', 1)" class="btn SignUpBtn">SIGN UP FOR FREE</a>
			</div>
			
			<div class="landing-nav-toggle landing-nav-toggle1 hidden-sm hidden-md hidden-lg header-menu-btn" style="color:#fff;display: inline-block;float:right;margin-right:20px;">
				<span class="glyphicon glyphicon-align-justify" aria-hidden="true" style="cursor:pointer;font-size: 22px;"></span>
			</div>
			<a class="landing-nav-toggle header-start hidden-sm hidden-md hidden-lg" href="https://app.waiverelectronic.com/register" onclick="ga('send', 'event', 'registration', 'click', 'bottom', 1)" class="headerMenu">Start Now</a>
		</div>
	</header>

	<div class="toggledHeaderMenu" style="display: none;position: fixed;top:0px;width: 100%;z-index: 11111111;padding:15px 10px;">
		<div style="border: 1px solid #939da5; background-color:#fff;display:table;padding: 20px 15px 15px;border-radius: 9px;width:100%;">
			<div style="text-align:right;">
				<a href="/"><img alt="WaiverElectronic" style="width: 40px;float: left;margin-top: -12px;" src="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png"></a>
				<span class="closeHeaderMenu" aria-hidden="true" style="cursor:pointer;font-size: 36px;position: relative;top: -18px;">&#10005;</span>
			</div>
			<div style="margin-top:15px;">
				<div class="col-xs-6 item">
					<div><a href="/features" class="headerMenu"><i class="fa fa-th" aria-hidden="true"></i> &nbsp;Tour</a></div>			
				</div>
				<div class="col-xs-6 item">
					<div><a href="/waiver-app" class="headerMenu" ><i class="fa fa-delicious" aria-hidden="true"></i> &nbsp;Waiver App</a></div>						
				</div>
				<hr/>
			</div>
			<div>
				<div class="col-xs-6 item">
					<div><a href="/templates" class="headerMenu"><i class="fa fa-server" aria-hidden="true"></i> &nbsp;Waiver Gallery</a></div>				
				</div>
				<div class="col-xs-6 item">
					<div><a href="https://www.waiverelectronic.com/online-waiver" ><i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp;Online Waiver</a></div>
				</div>
				<hr/>
			</div>
			<div>
				<div class="col-xs-6 item">
					<div><a href="/price" class="headerMenu"><i class="fa fa-table" aria-hidden="true"></i> &nbsp;Pricing</a></div>				
				</div>
				<div class="col-xs-6 item">
					<div><a class="headerMenu" href="/#section4"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;Contact Us</a></div>
				</div>
				<hr/>
			</div>
			<div class="col-xs-12" style="text-align:center;">
				<div style="padding-top:15px;">
					<a href="https://app.waiverelectronic.com/register" onclick="ga('send', 'event', 'registration', 'click', 'bottom', 1) " class="headerMenu">Sign Up <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>

	</div>

	<div class="content">
		<?php echo $this->content(); ?>
	</div>

	<section class="section4" id="section4">
		<div id="footer_form_section" class="inner">

			<h2>Best Online Waiver System</h1>
			<h3 class="subTitle">Start powering your waiver signing process with Electronic Waiver today!</h2>

			<form method="post" class="footer-form" novalidate="novalidate" style="overflow: hidden;">
				<span class="errorMsg mainMsg"></span>
				<div class="row">
					<input type="email" id="ent_email" name="email" autocomplete="off" spellcheck="false" placeholder="Email">
					<span class="helper-label">Email</span> <span class="errorMsg emailErrorMsg"></span>
				</div>

				<div class="row">
					<input type="password" id="ent_pass" name="password" autocomplete="off" spellcheck="false" placeholder="Password">
					<span class="helper-label">Password</span> <span class="errorMsg passErrorMsg"></span>
				</div>

				<div class="row">
					<input type="password" id="ent_pass2" name="password2" autocomplete="off" spellcheck="false" placeholder="Password Again">
					<span class="helper-label">Password Again</span><span class="errorMsg pass2ErrorMsg"></span>
				</div>

				<div class="row">
					<input type="text" id="ent_company" name="company" autocomplete="off" spellcheck="false" placeholder="Company name">
					<span class="helper-label">Company name</span><span class="errorMsg companyErrorMsg"></span>
					<span class="errorMsg"ng-show="errorMsg.length > 0">
						<?php
							if (isset($errorMsg)) {
								echo '*'.$errorMsg[0];
							}
						?>
						</span>
				</div>

				<div class="row">
            		<span class="button" onclick="ga('send', 'event', 'registration', 'click', 'bottom', 1)" id="submit_enterprise_demo_request" >Start free trial now</span>
				</div>

				<div id="spinner" class="spinner" style="display: none">
					<img id="img-spinner" src="/img/circle_trans.gif" alt="Loading"/>
				</div>

				<div class="row" style="margin:0">
					<p class="disclaimer">All fields are required</p>
				</div>

			</form>
			<hr class="new-line-hr"/>
			<div class="row inside footer-link">
				<div class="row col-md-4 col-sm-4">
					<div class="to-center">
						<img class="footer-logo" alt="WaiverElectronic" src="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png">
						<h3 class="logo-name">Waiver Electronic</h3>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="to-center">
						<h4>Explore WaiverElectronic</h4>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/features">Features</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/templates">Waiver Gallery</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/waiver-app">Waiver App</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/online-waiver">Online Waiver</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/gym-waiver-fitness-release-yoga-form">Gym Fitness and Yoga Waiver</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/electronic-signature-waiver">Electronic Signature Waiver</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/price">Pricing</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/terms">Terms And Conditions</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/privacy">Privacy</a></li>
						<li class="footer-nav-a"><a href="https://www.waiverelectronic.com/MINDBODY-integration">Mindbody Integration</a></li>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="to-center">
						<h4>Download the Waiver App</h4>
						<li class="footer-nav-a"><a class="footer-nav-a" href="https://apps.apple.com/us/app/waiverelectronic-online-waiver/id1120918528">App For IPAD/IPHONE</a></li>
						<li class="footer-nav-a"><a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250">App For Android Device</a></li>
					</div>
				</div>

                <div class="col-md-4 col-sm-4">
                    <div class="to-center">
						<h4>Social Media</h4>
						<ul style="list-style: none;padding-left:0;">
							<li style="width: 13%; float:left;"><a class="footer-nav-a" href="https://www.linkedin.com/company/waiver-electronic/"><img alt="WavierDigital Linkedin" style="width: 100%;" src="https://waiverphoto.s3.amazonaws.com/images/jzlrmq-58e91afdeb97430e81906504.png"></a></li>
							<li style="width: 13%; margin-left: 10px; float:left;"><a class="footer-nav-a" href="https://www.facebook.com/waiverElectronic/"><img style="width: 100%;" alt="WavierDigital Facebook" src="https://waiverphoto.s3.amazonaws.com/images/IzxaYt-584ac2d03ac3a570f94a666d.png"></a></li>
							<li style="width: 13%; margin-left: 10px; float:left;"><a class="footer-nav-a" href="https://twitter.com/WaiverElectron1"><img style="width: 100%;" alt="WavierDigital Twitter" src="https://waiverphoto.s3.amazonaws.com/images/YlriPb-twitter-logo.jpg"></a></li>
					    </ul>
					</div>
                </div>
			</div>
			<p class="contactUs">Contact Us</p>
			<span>General Questions: </span><a href="mailto:faq@waiverelectronic.com">&nbsp faq@waiverelectronic.com</a> <br><br>
			<p class="talk">© Electronic Works LLC. 2021, all rights reserved.</p>
			<footer class="footer clearfix" role="contentinfo"></footer>
		</div>
		<div style="background:#191d22; "><span style="color: #191d22">keywords：</span>
			<a style="color: #191d22" href="https://www.waiverelectronic.com/sitemapForWaiverElectronic.html" title="online waiver"target="_blank"><strong>online waiver</strong></a>
			<a style="color: #191d22" href="https://www.waiverelectronic.com/sitemap.xml" title="online waiver"target="_blank"><strong>online waiver</strong></a>
			<a style="color: #191d22" href="https://www.waiverelectronic.com/sitemapForWaiverElectronic.html" title="waiver app"target="_blank"><strong>waiver app</strong></a>
			<a style="color: #191d22" href="https://www.waiverelectronic.com/sitemap.xml" title="waiver app"target="_blank"><strong>waiver app</strong></a>
			<a style="color: #191d22" href="https://www.cleverwaiver.com" title="online waiver"target="_blank"><strong>online waiver</strong></a>
			<a style="color: #191d22" href="https://www.cleverwaiver.com" title="waiver app"target="_blank"><strong>waiver app</strong></a>
		</div>
	</section>
</body>
</html>

<!-- Linkedin Ads-->
<script type="text/javascript">
_linkedin_partner_id = "299771";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=299771&fmt=gif" />
</noscript>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-78757167-1', 'auto');
	ga('send', 'pageview');

</script>

<script>

	$("#submit_enterprise_demo_request").click(function(){
		if (validate()) {
			//If pass validation, go call register api here
			$('#spinner').show();
			var url = "https://app.waiverelectronic.com/api/auth/register"
			//url = "ewaiver.herokuapp.com/api/auth/register"
			var email = $("#ent_email").val();
			var pass = $('#ent_pass').val();
			var company = $('#ent_company').val();

			$.ajax({
				url: url,
				dataType: 'json',
				type: 'post',
				data: JSON.stringify ({
					email: email,
					password: pass,
					company: company
				}),
				contentType: "application/json",
				success: function( response, textStatus, jQxhr ){
					$('#spinner').hide();
					if (response.result) {
						window.location.href = "https://app.waiverelectronic.com/login?rcode=" + response.success.rcode;
					} else {
						$(".mainMsg").text(response.failed);
					}

				},
				error: function( jqXhr, textStatus, errorThrown ){
					$('#spinner').hide();
					console.log( errorThrown );
				}
			});


		}
	});
	function validate() {
		var valid = true;
		if (!validateEmail($("#ent_email").val())) {
			var emailMsg = '* Incorrect email format.';
			$(".emailErrorMsg").text(emailMsg);
			valid = false;
		}

		if ($('#ent_pass').val().length < 5) {
			var passMsg = '* Password has to be longer than 5 characters';
			$(".passErrorMsg").text(passMsg);
			valid = false;
		}

		if ($('#ent_pass').val() !== $('#ent_pass2').val()) {
			var pass2Msg = '* Passwords do not match.';
			$(".pass2ErrorMsg").text(pass2Msg);
			valid = false;
		}

		if ($('#ent_company').val().length == 0) {
			var companyMsg = "* Please enter your company's name";
			$(".companyErrorMsg").text(companyMsg);
			valid = false;
		}

		return valid;
	}

	function validateEmail (email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}

	$( "#ent_email" ).focusout(function() {
		if($('#ent_email').val().length == 0) {
			$('#email_label').show();
		}

	}).focus(function() {
		$('#email_label').hide();
	});

	$( "#ent_pass" ).focusout(function() {
		if($('#ent_pass').val().length == 0) {
			$('#pass_label').show();
		}
	}).focus(function() {
		$('#pass_label').hide();
	});

	$( "#ent_pass2" ).focusout(function() {
		if($('#ent_pass2').val().length == 0) {
			$('#pass2_label').show();
		}
	}).focus(function() {
		$('#pass2_label').hide();
	});

	$( "#ent_company" ).focusout(function() {
		if($('#ent_company').val().length == 0) {
			$('#company_label').show();
		}
	}).focus(function() {
		$('#company_label').hide();
	});

	$( ".landing-nav-toggle1, .closeHeaderMenu" ).click(function() {
		$( ".toggledHeaderMenu" ).slideToggle(500);
	});

	$(window).scroll(function(){
	    var winTop=$(window).scrollTop();
		if (winTop > 1) {
			$('#fixedHeader').addClass('fixedHeader');
		} else {
			$('#fixedHeader').removeClass('fixedHeader');
		}
	});



</script>

<!--
<script>
	function toggle() {
		var sign = document.getElementById("sign3").innerHTML;
		if (sign == '+') {
			document.getElementById("sign3").innerHTML = '-'
			document.getElementById("waiverElectronic_iframe3").style.display = "block";
			document.getElementById("waiverElectronic_iframe3").style.width = window.innerWidth * 0.8 + "px";
			document.getElementById("waiverElectronic_iframe3").style.height = window.innerHeight * 0.8 + "px";
		} else {
			document.getElementById("sign3").innerHTML = '+'
			document.getElementById("waiverElectronic_iframe3").style.display = "none";
		}
	}
</script>
<div id="waiverElectronic_floater3" class="" style="position: fixed !important;
              bottom: 0px !important;
              right: 10px;
              background: #0070ba!important;
              min-height: 25px !important;
              padding: 10px 15px 0 15px !important;
              border-top-left-radius: 15px !important;
              border-top-right-radius: 15px !important;
              border-top: #FFF solid 2px !important;
              border-left: #FFF solid 2px !important;
              border-right: #FFF solid 2px !important;
              border-bottom: #000000 0 !important;
              font-weight: bold !important;
              font-size: 20px !important;
              z-index: 2147483647 !important;
              cursor: pointer !important;
              font-family: 'Verdana' !important;
              ">
	<a id="waiverElectronic_link3" onclick="toggle();" style="color:white !important; text-align: center;">Try Our Demo Waiver <span id="sign3">+</span> </a>
	<iframe id="waiverElectronic_iframe3" style="display:none;" src="http://app.waiverelectronic.com/render/template/5762399cdf3d8f000a5e6096" frameborder="0"></iframe>
</div>
-->

