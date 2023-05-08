<?php
use app\extensions\helper\WaiverHelper;
// echo '<pre>' . var_export($navs, true) . '</pre>';
?>


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
    <title>Template Gallery - WaiverElectronic</title>
    <?php echo $this->html->style(array('template-gallery','bootstrap.min', 'landing', 'font-awesome')); ?>
    <?php echo $this->html->script(array('jquery-1.9.1.min.js','bootstrap.min.js', 'jSignature.min.js', 'templateGallery.js')); ?>
    <META content="Templates Gallery" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <META content="index,follow" name="robots">
    <META content="index,follow" name="GOOGLEBOT">
    <META content="The World's Leading Digital Waiver Application"  name="Author">
    <link href="https://plus.google.com/104217211088502604025" ref="publisher">
    <link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
    <META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-78757167-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<div class="landing">
	<header id="fixedHeader" class="fixedHeader" style="border-bottom:1px solid #ccc;">
		<div class="headerContent row">
			<div class="logo" style="float:left;">
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

    <div class="gallery">
        <div class="nav">
            <div id="nav-box" class="">
                <div class="top-bar">Template Gallery</div>
                <div class="nav-list">
                    <div class="title-bar">CATEGORIES</div>
                    <div class="list-box">
                    </div>
                </div>
            </div>
        </div>
        <div class="templates">
            <div class="search-box">
                <div class="toTop">
                    <div style="position:relative;">
                        <input class="form-contorl" id="searchWaiverInput"/>
                        <span class="fa fa-search"></span>
                    </div>
                </div>
            </div>

            <div class="waivers">
                
            </div>
        </div>
    </div>


    <!-- signature modal -->
    <!-- Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <div class="waiver-title"></div>
                    <div class="option">
                        <div class="useTemplate">Use Template</div>
                        <i class="close-modal pull-right" onClick="closeModal()"></i>
                    </div>
                </div>
                <div class="modal-body" id="preview-body" style="background-color:#f3f5f8;min-height: 60vh;max-height:60vh;    padding-bottom: 0;">
					<div class="tools">
						<i class="fa fa-desktop toolActive" onClick="useModel('pc')" aria-hidden="true" style="font-size: 16px;"></i>
						<i class="fa fa-tablet" onClick="useModel('pad')" aria-hidden="true"></i>
						<i class="fa fa-mobile" onClick="useModel('phone')" aria-hidden="true"></i>
					</div>
					<div class="iframe"></div>
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="loginModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <div class="waiver-title">Account</div>
                    <div class="option">
                        <i class="close-modal pull-right closeLoginModal"></i>
                    </div>
                </div>
                <div class="modal-body" id="preview-body" style="background-color:#f3f5f8;padding-bottom: 15px;">
					<input id="toLogin" type="email" placeholder="Please enter you email"/>
					<p style="color:red;display:none;ext-align: left;padding: 0;margin: 10px 0 0;" class="err-msg">Please enter vailid email.</p>
					<button class="toLoginBtn">Use Template</button>
                </div>
            </div>
        </div>
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
	<div id="loadingPng"><img src="/img/loading.gif"></div>
</div>

</body>
</html>

<script>

$(document).on('click', '.template-category', function() {
	$('.list-box .template-category').removeClass('active');
	$(this).addClass('active');
})
$(document).on('click', '.useTemplate', function() {
	$('#loginModal').modal('show');
})
$('.closeLoginModal').click(function() {
	$('#loginModal').modal('hide');
})
$('.toLoginBtn').click(function() {
	var email = $("#toLogin").val();
	$(".err-msg").hide();
	if (!email || !validateEmail(email)) {
		$(".err-msg").show();
		return
	}
	window.location.href = "https://app.waiverelectronic.com/register?email=" + email;
})
var templateGallery = null;
$(document).ready(function(){
	$('#loadingPng').toggle();
	$.ajax({
		url:'https://app.waiverelectronic.com/api/console/getTemplateGallery',
		type:'GET',
		headers:{
			'Content-Type': 'application/json;charset=UTF-8'
		},
		success:function(res){
			if(res.result) {
				$('#loadingPng').toggle();
				templateGallery = res.success;
				var navHtml = '';
				var galleryHtml = '';
				for(var i = 0; i < res.success.length; i++) {
					var tag = res.success[i]['tag'];
					if (i == 0) {
						navHtml += '<a href="#' + tag + '" style="text-decoration: none;">'
								    + '<div class="template-category active" >' + tag + '</div>'
								+ '</a>';
					} else {
						navHtml += '<a href="#' + tag + '" style="text-decoration: none;">'
							    	+ '<div class="template-category">' + tag + '</div>'
							 	+ '</a>';
					}

					galleryHtml += '<div class="waiver-tag" id="' + tag + '">' + tag + '</div><div class="row">';
					var content = res.success[i]['content'];
					for (var y = 0; y < content.length; y++) {
						galleryHtml +=  '<div class="col-md-4">' +
											'<div class="waiver-title">' + tag + ' - ' + content[y]['header'] + '</div>' +
											'<div class="img-box">' +
												'<div class="mask"></div>' +
												'<img src="' + content[y]['img'] + '">' +
												'<a class="previewEye" target="_blank" onClick="openPreviewModal(&apos;' + content[y]['url'] + '&apos;,&apos;' + tag + '-' + content[y]['header'] + '&apos;)">' +
													'<div><i class="fa fa-eye" aria-hidden="true"></i> Preview</div>' +
												'</a>' +
											'</div>' +
											'<div class="useTemplate">Use Template</div>' +
										'</div>';
					}
					galleryHtml += '</div>';
				}
				$('#nav-box .list-box').html(navHtml)
				$('#nav-box').addClass('nav-box-top');
				$('.gallery .waivers').html(galleryHtml)
				
			} else {
				$('#loadingPng').toggle();
			}
		}

	})
})
var serachRefresh = false;
$('#searchWaiverInput').on('input', function() {
	var inputVal = $(this).val();
	var galleryHtml = '';
	if (inputVal.length >= 3) {
		serachRefresh = true;
		for (var i = 0; i < templateGallery.length; i++) {
			var tag = templateGallery[i]['tag'];
			var searchHtml = '<div class="waiver-tag" id="' + tag + '">' + tag + '</div><div class="row">';
  
			var content = templateGallery[i]['content'];
			var searchResultHtml = '';
			for (var y = 0; y < content.length; y++) {
				if (content[y]['header'] && content[y]['header'].toLowerCase().includes(inputVal)) {
					searchResultHtml +=  '<div class="col-md-4">' +
									'<div class="waiver-title">' + tag + ' - ' + content[y]['header'] + '</div>' +
									'<div class="img-box">' +
										'<div class="mask"></div>' +
										'<img src="' + content[y]['img'] + '">' +
										'<a class="previewEye" target="_blank" onClick="openPreviewModal(&apos;' + content[y]['url'] + '&apos;,&apos;' + tag + '-' + content[y]['header'] + '&apos;)">' +
											'<div><i class="fa fa-eye" aria-hidden="true"></i> Preview</div>' +
										'</a>' +
									'</div>' +
									'<div class="useTemplate">Use Template</div>' +
								'</div>';
					
				}
			}
			if (searchResultHtml) {
				galleryHtml += searchHtml + searchResultHtml + '</div>';
		    }
		}
		$('.gallery .waivers').html(galleryHtml)
	} else {
		if (!serachRefresh) return;
		serachRefresh = false;
		for (var i = 0; i < templateGallery.length; i++) {
			var tag = templateGallery[i]['tag'];
			var searchHtml = '<div class="waiver-tag" id="' + tag + '">' + tag + '</div><div class="row">';
  
			galleryHtml += '<div class="waiver-tag" id="' + tag + '">' + tag + '</div><div class="row">';
			var content = templateGallery[i]['content'];
			for (var y = 0; y < content.length; y++) {
				galleryHtml +=  '<div class="col-md-4">' +
									'<div class="waiver-title">' + tag + ' - ' + content[y]['header'] + '</div>' +
									'<div class="img-box">' +
										'<div class="mask"></div>' +
										'<img src="' + content[y]['img'] + '">' +
										'<a class="previewEye" target="_blank" onClick="openPreviewModal(&apos;' + content[y]['url'] + '&apos;,&apos;' + tag + '-' + content[y]['header'] + '&apos;)">' +
											'<div><i class="fa fa-eye" aria-hidden="true"></i> Preview</div>' +
										'</a>' +
									'</div>' +
									'<div class="useTemplate">Use Template</div>' +
								'</div>';
			}
			galleryHtml += '</div>';
		}
		$('.gallery .waivers').html(galleryHtml)
	}
})


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
		} else {
		}
	});



</script>