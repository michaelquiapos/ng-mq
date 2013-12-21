<!DOCTYPE html>
<html manifest="manifest.appcache">
	<head>
		<title>Michael Quiapos | digital media and communication arts | letstalk@michaelquiapos.com</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="rwd">
		<meta name="description" content="As a Designer with a bigger toolbox my work in digital media extends to Front-end development">
		<meta name="author" content="Michael Quiapos, http://michaelquiapos.com">
		<link rel="icon" href="favicon.ico"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <!-- Defer loading of JavaScript -->
        <script async onload="myInit()">
            // Add a script element as a child of the body
            function downloadJSAtOnload() {
                var element = document.createElement("script");
                element.src = "assets/js/deferredfunctions.js";
                document.body.appendChild(element);
            }
            // Check for browser support of event handling capability
            if (window.addEventListener)
                window.addEventListener("load", downloadJSAtOnload, false);
            else if (window.attachEvent)
                window.attachEvent("onload", downloadJSAtOnload);
            else window.onload = downloadJSAtOnload;
        </script>
        <style>
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                src: local('Open Sans Bold'), local('OpenSans-Bold'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 800;
                src: local('Open Sans Extrabold'), local('OpenSans-Extrabold'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/EInbV5DfGHOiMmvb1Xr-hnhCUOGz7vYGh680lGh-uXM.woff) format('woff');
            }
        </style>
        <style>
            /*theme-orchid*/
                .theme-orchid { background-color: #5a2182; color: #fff; }
                .theme-orchid a { color: #894eb3; }
                .theme-orchid a:hover { color: #2f074c; }
                .theme-orchid #header h1 { color: #894eb3; }
                .theme-orchid #header h1 span { color: #fff; }
                .theme-orchid .counter-more, .theme-orchid #minimum-bid p { color: #894eb3; }
                .theme-orchid .counter-extra span { color: #fff; }
                .theme-orchid input[type="text"], .theme-orchid textarea { color: #fff; border-color: #fff; }
                .theme-orchid .button { color: #fff; background-color: #2f074c; }
                .theme-orchid .button:hover { background-color: #fff; }
                .theme-orchid .separator { background-image: url(assets/img/sep-white.png); }
            /*fx-map-black*/
            body.fx-map-black {
                background-image: url(assets/img/map-black.png);
                background-repeat: no-repeat;
                background-position: center center;
            }
            /*header*/
            section, article, header, footer, nav, aside, hgroup { display: block; }
            header, #header, section, footer, #footer { margin: 0 auto; }
            #header { margin-top: 70px; }
            #header h1 {
                font-size: 3.750em;
                font-weight: 800;
                color: #888;
                letter-spacing: -3px;
                margin: 0 0 20px 0;
                padding: 0;
            }
            #header h1 span { color: #000; }
            #header .intro {
                font-weight: bold;
                font-size: 2.250em;
                line-height: 1.167em;
                letter-spacing: -2px;
            }
            @media screen and (max-width: 1024px) {
                #header { margin-top: 40px; }
                #header .intro { font-size: 1.875em; }
                .container { width: 960px; }
                .column { padding: 15px; }
                .social-links li i { font-size: 2em; }
            }
            /*container*/
            .container {
                margin: 0 auto;
                padding: 0;
                width: 1200px;
            }
            @media screen and (max-width: 800px) {
                .container { width: 780px; }
                .column { padding: 10px; }
            }
            @media screen and (max-width: 768px) {
                .container { width: 720px; }
            }
            @media screen and (max-width: 640px) {
                .container { width: 90%; }
                .column { padding: 10px 0; }
                .column { float: none; width: 100%; }
                .separator { background-position: 0 0; }
            }
            @media screen and (max-device-width: 540px) {
                .container { width: 450px; }
                .column { padding: 10px 0; }
                .column { float: none; width: 100%; }
                .separator { background-position: 0 0; }
            }
            @media screen and (max-width: 320px) {
                .container { width: 90%; }
            }
            @media screen and (max-device-width: 320px) {
                .container { width: 90%; }
            }
            /*row*/
            .clearfix:after, .row:after {
                content: ".";
                display: block;
                height: 0;
                font-size: 0;
                clear: both;
                visibility: hidden;
            }
            .clearfix, .row { display: inline-block; }
            * html .clearfix, * html .row { height: 1px; }
            .clearfix, .row  { display: block; }
            /*column*/
            .column {
                float: left;
                padding: 15px;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                *behavior: url(assets/htc/boxsizing.htc);
            }
            /*two-thirds*/
            .two-thirds { width: 66.66666%; }
            /*contact*/

            /*button*/
            form input, form button { -webkit-appearance: none; }
            .button {
                display: inline-block;
                color: #ffffff;
                background-color: #888;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }
            .button:hover { color: #ffffff; background-color: #000; }
            /*button-medium*/
            .button-medium { padding: 10px 15px; font-size: 1em; }
            /*icon-envelope-alt*/
            .icon-envelope-alt {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf003;');
            }
            /*main*/

            /*separator*/
            .separator {
                padding-top: 25px;
                margin-top: 55px;
                background-image: url(assets/img/sep-black.png);
                background-repeat: no-repeat;
                background-position: 15px 0;
            }
            /*one-fourth*/
            .one-fourth { width: 25%; }
            /*icon-angle-right*/
            .icon-angle-right {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf105;');
            }
            /*social*/

            /*social-links*/
            .social-links { margin: 0; padding: 0; list-style-type: none; }
            .social-links li { float: left; margin: 0 8px 8px 0; }
            .social-links li a { display: inline-block; }
            .social-links li i { font-size: 1.5em; }
            /*icon-twitter-sign*/
            .icon-twitter-sign {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf081;');
            }
            /*icon-facebook-sign*/
            .icon-facebook-sign {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf082;');
            }
            /*icon-google-plus-sign*/
            .icon-google-plus-sign {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf0d4;');
            }
            /*icon-github-sign*/
            .icon-github-sign {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf092;');
            }
            /*icon-linkedin-sign*/
            .icon-linkedin-sign {
                *zoom: expression( this.runtimeStyle['zoom'] = '1', this.innerHTML = '&#xf08c;');
            }
            /*icon-treehouse-sign*/
            .icon-treehouse-sign a {
                background: url(assets/img/logo-treehouse-des.png) no-repeat;
                margin-top: 0;
                display: block;
                width: 27px;
                height: 25px;
                background-size: 27px 150px;
                -webkit-background-size: 22px 150px;
            }
            .icon-treehouse-sign a:hover {
                background: url(assets/img/logo-treehouse-des.png) no-repeat 0 -25px;
                margin-top: 0;
                display: block;
                width: 27px;
                height: 25px;
                background-size: 27px 150px;
                -webkit-background-size: 22px 150px;
            }
            .icon-treehouse-sign.icon-treehouse-contact a:hover {
                background: url(assets/img/logo-treehouse-des.png) no-repeat 0 -94px;
                display: block;
                margin-top: -1px;
                width: 28px;
                height: 33px;
                background-size: 28px 190px;
                -webkit-background-size: 28px 190px;
            }
            .icon-treehouse-sign.icon-treehouse-soon a {
                background: url(assets/img/logo-treehouse-des.png) no-repeat 0 -127px;
                margin-top: -1px;
                width: 28px;
                height: 33px;
            }
            .form-message-success, .form-message-error {
                display: block;
                padding-bottom: 10px;
            }
            .one-third { width: 33.33333%; }
            .mt0 { margin-top: 0; }
        </style>
	</head>

	<body class="theme-orchid fx-map-black">
		<!-- Start: Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<h1>Say hello<span>.</span></h1>
						<div class="intro">Its always great to cast collective ideas and create a product that has a potential impact.</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End: Header -->

		<!-- Start: Main Section -->
		<section id="main">
			<div class="container separator">
				<div class="row">
					<!-- Start: Form -->
					<div class="column one-third">
						<div id="form-message"></div>
						<form id="form-contact" name="form-contact">
							<input type="text" name="name" id="name" value="">
							<input type="text" name="email" id="email" value="">
							<textarea name="message" id="message" rows="4"></textarea>
							<a href="#" class="button button-medium button-submit" id="submit-contact">Send your feedback</a>
						</form>
					</div>
					<!-- End: Form -->

					<div class="column one-third">
						<p class="mt0">I receive a wide variety of questions from friends, colleagues to community blogs.</p>
						<p>An address is always good so I can get back to you ...</p>
						<p>Maybe an introduction about yourself ...?</p>
						<p>Don’t be shy, send your question and I will get back to you shortly.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End: Main Section -->

		<!-- Start: Social Media -->
		<section id="social">
			<div class="container separator">
				<div class="row">
					<div class="column two-thirds">
						<p>I build cool ideas and get stoked on people that seek to change the world so <a href="mailto:letstalk@michaelquiapos.com"><strong>letstalk@michaelquiapos.com</strong></a> or <strong>connect</strong> with me on:</p>
						<ul class="social-links">
							<li><a href="https://twitter.com/michaelquiapos" class="rotate" title="Twitter" target="_blank"><i class="icon-twitter-sign"></i></a></li>
							<li><a href="https://www.facebook.com/michael.quiapos" class="rotate" title="Facebook" target="_blank"><i class="icon-facebook-sign"></i></a></li>
							<li><a href="https://plus.google.com/+MichaelQuiapos?rel=author" class="rotate" title="Google Plus" target="_blank"><i class="icon-google-plus-sign"></i></a></li>
							<li><a href="http://github.com/michaelquiapos" class="rotate" title="Github" target="_blank"><i class="icon-github-sign"></i></a></li>
							<li><a href="http://linkedin.com/in/michaelquiapos" class="rotate" title="LinkedIn" target="_blank"><i class="icon-linkedin-sign"></i></a></li>
							<li class="icon-treehouse-sign icon-treehouse-contact"><a href="http://teamtreehouse.com/michaelquiapos" title="Treehouse" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End: Social Media-->
        <!-- Loading: jQuery -->
        <script async src="assets/js/jquery-1.10.2.min.js"></script>
        <!-- Loading, Setting Up: Form, Form Validation Plugin -->
        <script async src="assets/js/jquery.form.min.js"></script>
        <script async src="assets/js/jquery.validate.min.js"></script>
        <script async src="assets/js/jquery.validation.settings.js"></script>
		<!-- Loading: Respond.js (Old IE Media Queries) -->
		<!-- Note: Respond.js only understands min-width / max-width media queries -->
        <script async onload="myInit()" src="assets/js/respond.min.js"></script>
		<?php include_once("assets/php/analyticstracking") ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css" media="screen">
	</body>
</html>