<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="/index.php"><img src="<?php bloginfo('template_directory'); ?>/images/localpoint_logo.png" alt="Localpoint by Digby" /></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/localpoint-product/" title="Localpoint Product">Overview</a></li>
							<li><a href="/localpoint-platform/" title="Localpoint Platform">Platform</a></li>
							<!--<li><a href="/localpoint-use-cases/" title="Localpoint Use Cases">Use Cases</a></li>-->
							<li><a href="/digby-services/" title="Digby Services">Services</a></li>
						</ul>
					</li>
					<li><a href="/localpoint-customers/">Customers</a></li>
					<li><a href="/digby-partners/">Partners</a>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.themobileretailblog.com" title="The Mobile Retail Blog" target="_blank">The Mobile Retail Blog</a></li>
								<!--<li><a href="" title="Mobile Stats">Stats</a></li>
								<li><a href="" title="Webinars hosted by Digby">Webinars</a></li>-->
								<li><a href="/whitepapers/" title="Whitepapers by Digby">Whitepapers</a></li>
							</ul>
						</li>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" title="Company">Company<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/about-digby/" title="About Digby">About Digby</a></li>
							<li><a href="/press/" title="Digby and Localpoint News">News</a></li>
							<li><a href="/digby-investors/" title="Digby Investors &amp; Board of Directors">Board &amp; Investors</a></li>
							<li><a href="/digby-careers" title="Digby Careers">Careers</a></li>
						</ul>
					</li>
					<li><a href="/contact-us/" title="Contact Us">Contact</a></li>
				</ul>
				<div class="navbar-right">
					<form class="navbar-form" role="search" method="get" action="<?php bloginfo('home'); ?>">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" value="" name="s" id="s" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button" type="submit" id="searchsubmit"><i class="icon-search"></i></button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</nav>
</header>