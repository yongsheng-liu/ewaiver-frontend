<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2011, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

/**
 * This layout is used to render error pages in both development and production. It is recommended
 * that you maintain a separate, simplified layout for rendering errors that does not involve any
 * complex logic or dynamic data, which could potentially trigger recursive errors.
 */
use lithium\core\Libraries;
$path = Libraries::get(true, 'path');
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset(); ?>
	<title>Unhandled exception</title>
	<?php echo $this->html->style(['bootstrap.min','mls','font-awesome']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->script('jquery-3.1.1.min.js') ?>
	<?php echo $this->html->script('bootstrap.min.js') ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>
<body class="lithified">
		
	<div class="mls-left-nav">
		<div class="nav-list-box">
			<img class="logo" src="/img/logo.png">
			<div class="mls-nav-text">
				<div class="mls-nav-link">
					<div class="section-box home">
						<a class="mls-nav-header" href="/">HOME</a>
					</div>
					<div class="section-box products">
						<a class="mls-nav-header" href="/products">Products</a>
					</div>
					<div class="section-box technology dropdown">
						<a class="mls-nav-header" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Technology</a>
						<ul class="dropdown-menu">
							<li><a href="/technology" class="pwr">PWR Technology</a></li>
							<li><a href="/technology-app" style="margin: 25px 0;" class="app">PWR Applications</a></li>
							<li><a href="/technology-faq" class="faq">Frequently Asked Questions</a></li>
						</ul>
					</div>
					<div class="section-box about dropdown">
						<a class="mls-nav-header" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">About</a>
						<ul class="dropdown-menu" style="left: -110px;">
							<li><a href="/about-carees" class="carees">Careers</a></li>
							<li><a href="/about-team" style="margin: 25px 0;" class="team">Team</a></li>
							<li><a href="/about-investors" style="margin: 25px 0;" class="investors">Investors</a></li>
							<li><a href="/about-investors#newsAndAnnouncements">- News and Announcements</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="mls-nav-text-mobile">
				<div class="section-box dropdown">
					<span class="fa fa-align-justify" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></span>
					<ul class="dropdown-menu" >
						<li><a href="/">HOME</a></li>
						<li><a href="/products">Products</a></li>
						<li class="technology">
							<a class="mls-nav-text-mobile-technology">Technology</a>
							<div class="technology-link">
								<a href="/technology" class="pwr">PWR Technology</a>
								<a href="/technology-app" class="app">PWR Applications</a>
								<a href="/technology-faq" class="faq">Frequently Asked Questions</a>
 							</div>
						</li>
						<li class="about">
							<a class="mls-nav-text-mobile-about">About</a>
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

	<div class="row-fluid">
		<h1>An unhandled exception was thrown</h1>
	</div>

	<div class="content">
		<?php echo $this->content(); ?>
	</div>

	<hr>

	<footer class="mls-footer clearfix">
		<div class="foot-content">
			<img class="logo" src="/img/logo.png"/>
			<div class="right-reserved">
				<img class="add-mark" src="/img/add-mark.png"> 5 Great Valley Parkway, Suite 180 Malvern, PA 19355</div>
			</div>
		</div>
	</footer>
</body>

<script>
	$(document).ready(function() {
		let url = window.location.href;
		if (url.match('/products')) {
			$('.mls-left-nav .products').addClass('activeNav');
		} else if (url.match('/technology')) {
			$('.mls-left-nav .technology').addClass('activeNav');
			$('.mls-left-nav .technology a').removeClass('activeSubNav');
			if (url.match('/technology-app')) {
				$('.mls-left-nav .technology .app').addClass('activeSubNav');
			} else if (url.match('/technology-faq')) {
				$('.mls-left-nav .technology .faq').addClass('activeSubNav');
			} else {
				$('.mls-left-nav .technology .pwr').addClass('activeSubNav');
			}
		} else if (url.match('/about')) {
			$('.mls-left-nav .about').addClass('activeNav');
			$('.mls-left-nav .about a').removeClass('activeSubNav');
			if (url.match('/about-team')) {
				$('.mls-left-nav .about .team').addClass('activeSubNav');
			} else if (url.match('/about-carees')) {
				$('.mls-left-nav .about .carees').addClass('activeSubNav');
			} else if (url.match('/about-investors')) {
				$('.mls-left-nav .about .investors').addClass('activeSubNav');
			} 
		} else {
			$('.mls-left-nav').addClass('home-page-nav');
			$('.mls-left-nav .home').addClass('activeNav');
		}
	})

    $('.mls-nav-text-mobile .mls-nav-text-mobile-technology').click(function(e) {
		e.stopPropagation();
        $('.mls-nav-text-mobile .technology-link').toggle();
    })
	$('.mls-nav-text-mobile .mls-nav-text-mobile-about').click(function(e) {
		e.stopPropagation();
        $('.mls-nav-text-mobile .about-link').toggle();
    })
</script>
</html>
