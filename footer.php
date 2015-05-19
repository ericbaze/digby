<footer>
	<div class="container">
		<div class="row top-footer">
			<div class="col-xs-5">
				<div class="questions">
					<span class="title">Questions?</span> <a href="tel:866.802.0298">866.802.0298</a>
				</div>
			</div>
			<div class="col-xs-7">
				<ul class="list-unstyled list-inline pull-right social-buttons">
					<li><a href="/contact-us/" title="Contact Us"><i class="icon-envelope"></i></a></li>
					<li><a href="http://www.twitter.com/digbymobile" title="Follow us on Twitter!" target="_blank"><i class="icon-twitter"></i></a></li>
					<li><a href="http://www.linkedin.com/company/digby"><i class="icon-linkedin" target="_blank"></i></a></li>
					<li><a href="https://www.facebook.com/digbymobile"><i class="icon-facebook" target="_blank"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="/index.php"><img src="<?php bloginfo('template_directory'); ?>/images/digby_logo.png" alt="Digby &reg;" class="digby-logo img-responsive" /></a>
					<ul class="list-unstyled">
						<li>3801 S Capital of TX Hwy</li>
						<li>Barton Creek Plaza II #100</li>
						<li>Austin, TX 78704 <a href="https://maps.google.com/maps?q=3801+S+Capital+of+Texas+Hwy,+Austin,+TX&hl=en&sll=30.307761,-97.753401&sspn=0.641404,1.380157&oq=380&hnear=3801+S+Capital+of+Texas+Hwy,+Austin,+Texas+78704&t=m&z=16" class="map-link" title="Map to 3801 South Capital of Texas Highway, Austin, TX 78704" target="_blank">[map]</a></li>
					</ul>
					<ul class="list-unstyled">
						<li>US: <a href="tel:512.782.9559">512.782.9559</a></li>
						<li>UK: <a href="tel:44.20.3286.0285">+44.20.3286.0285</a></li>
						<li>CN: <a href="tel:86.15208101620">+86.15208101620</a></li>
					</ul>
				</div>
				<div class="col-md-9 hidden-xs hidden-sm">
					<div class="link-column">
						<h4><a href="/localpoint-product/" title="Localpoint Product">Product</a></h4>
						<a href="/localpoint-product/" title="Localpoint Product Overview">Overview</a><br/>
						<a href="/localpoint-platform" title="Localpoint Geofencing Platform">Platform</a><br/>
						<!--<a href="/localpoint-use-cases/" title="Localpoint Use Cases">Use Cases</a><br/>-->
						<a href="/digby-services/" title="Digby Services">Services</a><br/>
					</div>
					<div class="link-column">
						<h4><a href="/localpoint-customers/" title="Localpoint Customers">Customers</a></h4>
						<a href="/localpoint-customers/#current" title="Current Localpoint Customers">Current Customers</a><br/>
						<a href="/localpoint-customers/#casestudies" title="Localpoing Customer Case Studies">Case Studies</a><br/>
					</div>
					<div class="link-column">
						<h4><a href="/digby-partners/" title="Digby Partners">Partners</a></h4>
						<a href="/digby-partners/#benefits" title="Digby Partner Benefits">Benefits</a><br/>
						<!--<a href="/digby-partners/#howitworks" title="Digby Partnership - How it Works">How it Works</a><br/>-->
						<!--<a href="/digby-partners/#usecases" title="Digby Partner Use Cases">Use Cases</a><br/>-->
						<a href="/digby-partners/#current" title="Current Digby Partners">Current Partners</a><br/>
						<a href="/digby-partners/#casestudies">Case Studies</a><br/>
					</div>
					<div class="link-column">
						<h4><a href="/whitepapers/" title="Resources">Resources</a></h4>
						<a href="http://www.themobileretailblog.com/" target="_blank" title="Blog">The Mobile Retail Blog</a><br/>
						<!--<a href="">Stats</a><br/>
						<a href="">Webinars</a><br/>-->
						<a href="/whitepapers/" title="Whitepapers">Whitepapers</a><br/>
					</div>
					<div class="link-column">
						<h4><a href="/about-digby/" title="Digby Company">Company</a></h4>
						<a href="/about-digby/" title="About Digby">About Digby</a><br/>
						<a href="/press/" title="Digby News">News</a><br/>
						<a href="/digby-investors/" title="Digby Investors">Investors</a><br/>
						<a href="/digby-careers/" title="Digby Careers">Careers</a><br/>
					</div>
				</div>
			</div>
			<div class="text-muted">&copy; 2013 Digby&reg;. All Rights Reserved. <!-- | <a href="#">Privacy Policy</a>--></div>
		</div>
	</div>
</footer>
<!-- Javascript -->
<script type="text/javascript" language="javascript">llactid=14533</script>
<script type="text/javascript" language="javascript" src="http://t4.trackalyzer.com/trackalyze.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.custom.min.js"></script>
<script>
	// make the template directory available globally as a js variable
	templateDirectory = "<?php bloginfo('template_directory'); ?>";

	$(document).ready(function() {	
		// set up any carousels
		$('.carousel').carousel('cycle');
		$("#step-carousel").swiperight(function() {
			$("#step-carousel").carousel('prev');
		});
		$("#step-carousel").swipeleft(function() {
			$("#step-carousel").carousel('next');
		});
	});
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/lead-gen-form.js"></script>
<?php wp_footer(); ?>
</body>
</html>