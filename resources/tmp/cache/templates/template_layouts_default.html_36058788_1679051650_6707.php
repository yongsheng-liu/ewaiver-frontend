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
			<img class="logo" src="/img/logo.png">
			<div class="pep-nav-text">
				<div class="pep-nav-link">
					<div class="section-box home">
						<a class="pep-nav-header" href="/">Home</a>
					</div>
					<div class="section-box products">
						<a class="pep-nav-header" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Service & Products</a>
						<ul class="dropdown-menu">
							<li><a href="/serviceAndProducts#CustomPeptideSynnthesis" class="custom">Custom Peptide Synnthesis</a></li>
							<li><a href="/serviceAndProducts#PeptideCMC" class="cmc" style="margin: 20px 0;">Peptide CMC</a></li>
							<li><a href="/serviceAndProducts#CatalogPeptides" class="catalog" style="margin: 20px 0;">Catalog Peptides</a></li>
							<li><a href="/serviceAndProducts#cGMPPeptideAPIsManufacturing" class="cgmp">cGMP Peptide APIs Manufacturing</a></li>
						</ul>
					</div>
					<div class="section-box peptideResources dropdown">
						<a class="pep-nav-header" href="/peptideResources">Peptide Resources</a>
					</div>
					<div class="section-box about dropdown">
						<a class="pep-nav-header" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">About</a>
					</div>
					<div class="section-box about dropdown">
						<a class="pep-nav-header" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="pep-nav-text-mobile">
				<div class="section-box dropdown">
					<span class="fa fa-align-justify" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></span>
					<ul class="dropdown-menu" >
						<li><a href="/">HOME</a></li>
						<li><a href="/products">Products</a></li>
						<li class="technology">
							<a class="pep-nav-text-mobile-technology">Technology</a>
							<div class="technology-link">
								<a href="/technology" class="pwr">PWR Technology</a>
								<a href="/technology-app" class="app">PWR Applications</a>
								<a href="/technology-faq" class="faq">Frequently Asked Questions</a>
 							</div>
						</li>
						<li class="about">
							<a class="pep-nav-text-mobile-about">About</a>
							<div class="about-link">
								<a href="/about-carees" class="carees">Careers</a>
								<a href="/about-team" class="team">Team</a>
								<a href="/about-investors" class="investors">Investors</a>
								<a href="/about-investors#newsAndAnnouncements">- News and Announcements</a>
 							</div>
						</li>
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
						<div><img src="/img/icons8-facebook-f-96(1).png"/></div>
						<div><img src="/img/icons8-twitter-50(1).png"/></div>
						<div><img src="/img/icons8-linkedin-2-64(1).png"/></div>
 					</div>
					<div class="copyright">
						Copyright © 2023<br>
						Biopeptek Pharmaceuticals LLC.<br>
						All right reserved<br>
 					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="pep-footer-section-2r">
					<div class="pep-footer-title">Quick Links</div>
					<div class="footer-nav-a"><a href="">Custom peptide synthesis</a></div>
					<div class="footer-nav-a"><a href="">cGMP peptide manufacturing</a></div>
					<div class="footer-nav-a"><a href="">Peptide API process development</a></div>
					<div class="footer-nav-a"><a href="">Analytical development & Quality control</a></div>
					<div class="footer-nav-a"><a href="">Global regulatory affairs CMC support</a></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="pep-footer-section-3">
					<div class="pep-footer-title">Stay Connected</div>
					<div class="pep-footer-text"><span>A</span> 5 Great Valley Parkway, Suite 100 Malvern, PA 19355</div>
					<div class="pep-footer-text"><span>T</span> (610) 634-4881</div>
					<div class="pep-footer-text"><span>E</span> info@biopeptek.com</div>
					<div class="pep-footer-text-1">Sign up to receive news and updates</div>
					<div class="sign-up-box">
						<input class="name" placeholder="Name"/>
						<input class="email" placeholder="Email"/>
						<div class="sign-up">Sign up</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
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
		} else {
			$('.pep-left-nav .home').addClass('activeNav');
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
</script>
</html>