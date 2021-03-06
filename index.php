﻿<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Ed Hatrick Smith - Web: designer / developer / problem solver</title>
	<meta name="description" content="The portfolio website of Ed Hatrick-Smith: front-end designer, developer and general web problem-solver. "/>
	<meta name="keywords" content="web developer, desginer, photographer, awesome person, solutions"/>
	<meta name="google-site-verification" content="FGCHMT29z0H1Np_P99FJRivgCOpe23gNOddpI8Q2OaI"/>
	<meta name="author" content="Edward Hatrick-Smith: ed.hatricksmith@gmail.com"/>
	<link rel="stylesheet" type="text/css" href="css/styles.index.min.css"/>
	<?php $thisPage="home";?>
	<?php include_once("/home/akolob/public_html/analyticstracking.php") ?>
</head>
<body>
	<?php include("/home/akolob/public_html/header.php");?>
	<div id="slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="/images/slider/slide_wardrobe_world.jpg" alt="Wardrobe World site design"/>
				</li>
				<li>
					<img src="/images/slider/slide_haurakiapp.jpg" alt="Radio Hauraki app design" />
				</li>
				<li>
					<img src="/images/slider/slide_heatwell.jpg" alt="Heatwell site design and development"/>
				</li>
				<li>
					<img src="/images/slider/slide_whoareyou.jpg" alt="Who Are You? competition design" />
				</li>
			</ul>
		</div>
	</div>
	<div id="home">
		<article>
			<h1>Hi, I’m Ed and this is my Portfolio - testing</h1>
			<p class="first">Thanks for taking the time to look at <a href="work/work.php">my work</a> and learn a little more about me. I have recently returned from a short break in Australia and as such am refreshed and eager to drive my career to higher levels of expertise in a variety of disciplines. I aim to embody the very essence of the professional in my day to day life.</p>
			<p>This website has been produced to present my abilities within the design and front-end web development fields. I do however believe that my strengths reach beyond production. It might be worth having a quick look at <a href="/EdHatrickSmith-CV.pdf" target="_blank">my C.V.</a> to get any idea of where my strengths lie.</p>
			<p>Obviously its hard to gauge someones character from a website, so if  you are interested in having a chat, <a href="contacts/contacts.php">get in touch</a> and we can grab a coffee.</p>
		</article>
		<aside>
			<h2>What I do at a glance</h2>
			<div class="skill_block design border">
				<h3>Design:</h3>
			<p class="skill_font">Web design, Flash banners, print documents, mobile sites and apps.</p>
		</div>
		<div class="skill_block development border">
			<h3>Development:</h3>
			<p class="skill_font">Front end HTML, CSS, jQuery, PHP, CMS installation, performance optimisation</p>
		</div>
		<div class="skill_block problems">
			<h3>Web Solutions:</h3>
			<p class="skill_font">Social Media, E-Commerce, S.E.O., marketing, intranets, website administration</p>
		</div>
	</aside>
</div>
<div class="clearfix"></div>
<?php include("/home/akolob/public_html/footer.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/jquery.easing-min.js"></script>
<script type="text/javascript"> 
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide", direction: "horizontal", animationLoop: true, slideshow: true, slideshowSpeed: 5000, animationSpeed: 600, initDelay: 0, randomize: false, pauseOnHover: false, useCSS: true, touch: true, controlNav: true, directionNav: true, prevText: "Previous", nextText: "Next", keyboard: true,});
	});
</script>
</body>
</html>