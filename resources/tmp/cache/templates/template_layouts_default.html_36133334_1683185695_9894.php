<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2009, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Biopeptek - <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(['bootstrap.min','pep','font-awesome']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->script('jquery-3.1.1.min.js') ?>
	<?php echo $this->html->script('bootstrap.min.js') ?>
	<?php echo $this->styles(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="../img/logo.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<div class="pep-left-nav">
		<div class="nav-list-box">
			<a href='/'><img class="logo" src="/img/biopeptek-logo.png"><img class="logo-color" src="/img/biopeptek-logo-color.png"></a>
			<div class="pep-nav-text">
				<div class="pep-nav-link">
					<div class="section-box home">
						<a class="pep-nav-header" href="/" style="width:57px;">Home</a>
					</div>
					<div class="section-box products">
						<a class="pep-nav-header" id="serviceNav" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true" style="width:207px;">
							Service & Products&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<div class="dropdown-menu-inner">
								<li><a href="/serviceAndProducts#CustomPeptideSynnthesis" class="custom">Custom Peptide Synnthesis</a></li>
								<li style="margin: 20px 0;"><a href="/serviceAndProducts#PeptideCMC" class="cmc">Peptide CMC</a></li>
								<li style="margin: 20px 0;"><a href="/serviceAndProducts#CatalogPeptides" class="catalog">Catalog Peptides</a></li>
								<li><a href="/serviceAndProducts#cGMPPeptideAPIsManufacturing" class="cgmp">cGMP Peptide APIs Manufacturing</a></li>
 							</div>
						</ul>
					</div>
					<div class="section-box peptideResources dropdown">
						<a class="pep-nav-header" href="/peptideResources" style="width:181px;">Peptide Resources</a>
					</div>
					<div class="section-box about dropdown">
						<a class="pep-nav-header" href="/about" style="width:58px;">About</a>
					</div>
					<div class="section-box contact dropdown">
						<a class="pep-nav-header" href="/contact" style="width:108px;">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="pep-nav-text-mobile">
				<div class="section-box dropdown">
					<span class="fa fa-align-justify" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></span>
					<ul class="dropdown-menu" >
						<li><a href="/">HOME</a></li>
						<li class="technology">
							<a class="pep-nav-text-mobile-technology">Service & Products</a>
							<div class="technology-link">
								<a href="/serviceAndProducts#CustomPeptideSynnthesis" class="pwr">Custom Peptide Synnthesis</a>
								<a href="/serviceAndProducts#PeptideCMC" class="app">Peptide CMC</a>
								<a href="/serviceAndProducts#CatalogPeptides" class="faq">cGMP Peptide APIs Manufacturing</a>
								<a href="/serviceAndProducts#cGMPPeptideAPIsManufacturing" class="faq">cGMP Peptide APIs Manufacturing</a>
 							</div>
						</li>
						<li><a href="/peptideResources">Peptide Resourcess</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<?php echo $this->content(); ?>
	</div>


	<footer class="pep-footer clearfix">
		<div class="row inside footer-link">
			<div class="col-md-4 col-sm-4">
				<div class="pep-footer-section-1">
					<img class="footer-logo" src="/img/logo2.png">
					<div class="media">
						<div><a href="https://www.linkedin.com/company/biopeptekpharmaceuticals/"><img src="/img/icons8-linkedin-2-64(1).png"/></a></div>
 					</div>
					<div class="copyright">
						Copyright © 2023<br>
						Biopeptek Pharmaceuticals LLC.<br>
						All right reserved<br>
 					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="pep-footer-section-2">
					<div class="pep-footer-title">Quick Links</div>
					<div class="footer-nav-a"><a href="https://biopeptek.com/serviceAndProducts#CustomPeptideSynnthesis">Custom Peptide Synthesis</a></div>
					<div class="footer-nav-a"><a href="https://biopeptek.com/serviceAndProducts#cGMPPeptideAPIsManufacturing">cGMP Peptide Manufacturing</a></div>
					<div class="footer-nav-a"><a href="https://biopeptek.com/serviceAndProducts#PeptideCMC-APIs">Peptide API Process Development</a></div>
					<div class="footer-nav-a"><a href="https://biopeptek.com/serviceAndProducts#PeptideCMC-Analytical">Analytical Development & Quality control</a></div>
					<div class="footer-nav-a"><a href="https://biopeptek.com/serviceAndProducts">Global Regulatory Affairs CMC Support</a></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="pep-footer-section-3">
					<div class="pep-footer-title">Stay Connected</div>
					<div class="pep-footer-text"><span>A</span> 5 Great Valley Pkwy STE 100, Malvern, PA 19355</div>
					<div class="pep-footer-text"><span>T</span> (610)643-4881</div>
					<div class="pep-footer-text"><span>F</span> (610)910-3487</div>
					<div class="pep-footer-text"><span>E</span> <a href="mailto:info@biopeptek.com">info@biopeptek.com</a></div>
					<div class="pep-footer-text-1">Sign up to receive news and updates</div>
					<div class="sign-up-box">
						<input class="name sing-up-name" placeholder="Name"/>
						<input class="email sing-up-email" placeholder="Email"/>
						<div class="sign-up">Sign up</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div id="spinner" class="spinner" style="display: none">
		<img id="img-spinner" src="/img/circle_trans.gif" alt="Loading"/>
	</div>
</body>
<script>
	$(document).ready(function() {
		let url = window.location.href;
		if (url.match('/serviceAndProducts')) {
			$('.pep-left-nav .products').addClass('activeNav');
			$('.pep-left-nav .products a').removeClass('activeSubNav');
			if (url.match('#CustomPeptideSynnthesis')) {
				$('.pep-left-nav .products .custom').addClass('activeSubNav');
			} else if (url.match('#PeptideCMC')) {
				$('.pep-left-nav .products .cmc').addClass('activeSubNav');
			} else if (url.match('#CatalogPeptides')) {
				$('.pep-left-nav .products .catalog').addClass('activeSubNav');
			} else if (url.match('#cGMPPeptideAPIsManufacturing')) {
				$('.pep-left-nav .products .cgmp').addClass('activeSubNav');
			}
		} else if (url.match('/peptideResources')) {
			$('.pep-left-nav .peptideResources').addClass('activeNav');
			$('.pep-left-nav .peptideResources a').removeClass('activeSubNav');
		} else if (url.match('/about')) {
			$('.pep-left-nav .about').addClass('activeNav');
		} else if (url.match('/contact')) {
			$('.pep-left-nav .contact').addClass('activeNav');
		} else {
			$('.pep-left-nav .home').addClass('activeNav');
		}
	})
	$(document).scroll(function() {
		var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
		if(scrollTop > 60) {
			$('.pep-left-nav').addClass('scroll-nav');
		} else {
			$('.pep-left-nav').removeClass('scroll-nav');
		}
	})
	$('.pep-nav-text .section-box').hover(function() {
		if ($(this).children('.pep-nav-header')[0].id == 'serviceNav') {
			$(this).addClass('open')
		} else {
			$(this).removeClass('open')
		}
	},function() {
		$(this).removeClass('open')
	})
	$('.pep-nav-text .products .dropdown-menu').hover(function() {
		$(this).parent().addClass('open')
	},function() {
		if (!$(this).siblings().hover()) {
			$(this).parent().removeClass('open')
		}
	})

    $('.pep-nav-text-mobile .pep-nav-text-mobile-technology').click(function(e) {
		e.stopPropagation();
        $('.pep-nav-text-mobile .technology-link').toggle();
    })
	$('.pep-nav-text-mobile .pep-nav-text-mobile-about').click(function(e) {
		e.stopPropagation();
        $('.pep-nav-text-mobile .about-link').toggle();
    })
    function validateEmail (email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}
	$('.pep-footer .sign-up').click(function() {
		let name = $('.sing-up-name').val();
        let email = $('.sing-up-email').val();
		if (!name) {
            alert("Please enter your name")
            return;
        } else if (!email) {
            alert("Please enter your email")
            return;
        } 
        if (!validateEmail(email)) {
			alert("Please enter a valid email")
            return;
		}

		let nameArr = name.split(' ');
		let firstName = nameArr[0];
		let lastName = '';
		if (nameArr && nameArr.length > 1) {
			lastName = nameArr[1]
		}
		$('#spinner').show();
		$.ajax({
            url: 'https://www.mainlinebiosciences.com/api/business/signup_hubspot',
            dataType: 'json',
            type: 'post',
            data: JSON.stringify ({
                firstName: firstName,
				lastName: lastName,
                email: email
            }),
            contentType: "application/json",
            success: function( response, textStatus, jQxhr ){
                $('#spinner').hide();
                if (response.result) {
					alert("Thank you for reaching out. You have signed up to our email list successfully.")
                    $('.sing-up-name').val('')
                    $('.sing-up-email').val('');
                } else {
                    alert("Thank you for reaching out. You have signed up to our email list successfully.")
                }

            },
            error: function( jqXhr, textStatus, errorThrown ){
                $('#spinner').hide();
                console.log( errorThrown );
            }
        });
	})
</script>
</html>