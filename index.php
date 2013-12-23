<!DOCTYPE html>
<html manifest="manifest.appcache">
	<head>
		<title>Michael Quiapos | letstalk@michaelquiapos.com</title>
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
            /*theme-sky*/
            .theme-sky { background-color: #3b5998; color: #fff; }
            .theme-sky a { color: #85ceff; }
            .theme-sky a:hover { color: #1d73ab; }
            .theme-sky #header h1 { color: #85ceff; }
            .theme-sky #header h1 span { color: #fff; }
            .theme-sky .counter-more, .theme-sky #minimum-bid p { color: #85ceff; }
            .theme-sky .counter-extra span { color: #fff; }
            .theme-sky input[type="text"], .theme-sky textarea { color: #fff; border-color: #fff; }
            .theme-sky .button { color: #fff; background-color: #1d73ab; }
            .theme-sky .button:hover { background-color: #fff; }
            .theme-sky .separator { background-image: url(assets/img/sep-white.png); }
            /*fx-map-white*/
            body.fx-map-white {
                background-image: url(assets/img/map-white.png);
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
        </style>
	</head>

	<body class="theme-sky fx-map-white">
		<!-- Start: Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<h1>Designer and Front end Developer<span>.</span></h1>
						<div class="intro">I’m passionate about creating massive digital experiences for the world to consume.</div>
						<p><a href="contact" class="button button-medium"><i class="icon-envelope-alt"></i>&nbsp;&nbsp; Get in touch</a></p>
					</div>
				</div>
			</div>
		</header>
		<!-- End: Header -->

		<!-- Start: Main Section -->
		<section id="main">
			<div class="container separator row">
				<div class="column one-fourth">
					A lot of my time is focused on <strong>Responsive Web Design</strong> fit for both fixed and mobile device experiences.
					<p><a href="soon" class="button button-medium">Launch date&nbsp;&nbsp;<i class="icon-angle-right"></i></a></p>
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
							<li class="icon-treehouse-sign"><a href="http://teamtreehouse.com/michaelquiapos" title="Treehouse" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End: Social Media-->
		<!-- Loading: Respond.js (Old IE Media Queries) -->
		<!-- Note: Respond.js only understands min-width / max-width media queries -->
		<script async onload="myInit()" src="assets/js/respond.min.js"></script>
        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-39358372-1');ga('send','pageview');
        </script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css" media="screen">
	</body>
</html>