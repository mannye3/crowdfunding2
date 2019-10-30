<?php include"inc/header.php"; ?>
<!-- header section -->
<!-- header version inner menu -->
<header class="fundpress-header-inner-version fundpress-header-main-version">
	<div class="container">
		<nav class="xs-menus fundpress-menu">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a class="nav-brand nav-logo" href="index.html">
					<img src="assets/images/logo.png" alt="">
				</a>
			</div><!-- . END -->
			<div class="nav-menus-wrapper">
				<div class="xs-logo-wraper">
					<a class="nav-brand xs-logo fundpress-logo-v1" href="index.html">
						<img src="assets/images/logo.png" alt="">
					</a>
				</div>
				<ul class="nav-menu">
					<li><a href="#">Home</a>
						<ul class="nav-dropdown">
							<li><a href="index.html">home version 1</a></li>
							<li><a href="index-v2.html">home version 2</a></li>
							<li><a href="index-v3.html">home version 3</a></li>
						</ul>
					</li>
					<li><a href="about.html">about</a></li>
					<li><a href="#">Blog</a>
						<ul class="nav-dropdown">
							<li><a href="news-feed.html">blog version 1</a></li>
							<li><a href="news-feed-v2.html">blog version 2</a></li>
							<li><a href="news-feed-v3.html">blog version 3</a></li>
							<li><a href="blog-single.html">blog details </a></li>
						</ul>
					</li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="#">pages</a>
						<ul class="nav-dropdown">
							<li><a href="team-member-details.html">team details</a></li>
							<li><a href="progress.html">progress</a></li>
							<li><a href="progress-successful.html">progress successful</a></li>
							<li><a href="progress-explore.html">progress explore</a></li>
							<li><a href="events.html">events</a></li>
							<li><a href="faq.html">faq</a></li>
							<li><a href="fund-details.html">fund-details</a></li>
							<li><a href="we-do.html">we do</a></li>
							<li><a href="portfolio.html">portfolio</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="single-shop.html">single Shop</a></li>
						</ul>
					</li>
				</ul>
				<div class="xs-navs-button">
					<ul class="xs-icon-with-text fundpress-icon-menu">
						<li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-unlock-alt color-green"></i>Log In</a></li>
						<li class="d-block d-lg-none d-xl-block"><a href="#" class="xs-btn round-btn green-btn">start a campaign</a></li>
					</ul>
				</div>
			</div><!-- .nav-menus-wrapper END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div>
</header>
<!-- header version inner menu closed -->


<!-- modal -->
<div class="modal fade bd-example-modal-lg xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#login" role="tab" data-toggle="tab">
							Login
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#signup" role="tab" data-toggle="tab">
							Signup
						</a>
					</li>
				</ul>
			</div><!-- fundpress-tab-nav-v3 -->
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
					<form action="#" method="POST" id="xs-login-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" name="name" id="xs_user_login_name" class="xs-input-control" placeholder="Enter your username">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_login_password" class="xs-input-control" placeholder="Enter your password">
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="login now" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
						<p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_twitter" class="btn btn-success btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
					<form action="#" method="POST" id="xs-register-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" name="name" id="xs_register_name" class="xs-input-control" placeholder="Enter your username">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-envelope2"></i>
							<input type="email" name="email" id="xs_register_email" class="xs-input-control" placeholder="Enter your email">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_register_password" class="xs-input-control" placeholder="Enter your password">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_register_repeat_pass" class="xs-input-control" placeholder="Enter your confirm password">
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="login now" id="xs_register_get_action" class="btn btn-warning btn-block">
						</div>
						<p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_register_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_register_twitter" class="btn btn-success btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div>
	</div>
</div><!-- End modal --><!-- End header section -->

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-1 parallax-window" data-parallax="scroll" data-image-src="assets/images/background/sponsor_section_bg.jpg" style="height: 500px;">
	<div class="xs-solid-overlay xs-bg-black"></div>
	<div class="container">
		<div class="fundpress-inner-welcome-content">
			<h2 class="color-white">Discover Innovative Products</h2>
			<ul class="xs-breadcumb fundpress-breadcumb">
				<li><a href="index.html" class="color-white"> Home /</a>  Discover</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->

<main class="xs-all-content-wrapper">
	<!-- in progress explore section -->
	<section class="waypoint-tigger xs-content-section-padding">
	<div class="container">
		<div class="xs-isotope-grid-wraper xs-mb-40">
			<div class="xs-isotope-nav fundpress-isotope-nav">
				<ul id="filters" class="option-set clearfix">
					<li><a href="#" class="selected">All</a></li>
					<li><a href="#"> Comics</a></li>
					<li><a href="#"> Crafts</a></li>
					<li><a href="#"> Dance</a></li>
					<li><a href="#"> Design</a></li>
					<li><a href="#"> Fashion</a></li>
					<li><a href="#"> Food</a></li>
					<li><a href="#"> Games</a></li>
					<li><a href="#"> video">Film & Video</a></li>
					<li><a href="#"> lism">Journalism</a></li>
					<li><a href="#"> Music</a></li>
				</ul>
			</div><!-- .xs-isotope-nav .fundpress-isotope-nav END -->
			<div class="xs-col-3-isotope-grid">
				<div class="xs-col-3-isotope-grid-item comics crafts">
					<div class="fundpress-grid-item-content xs-mb-30">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-1.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="65" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Music</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">UI/UX</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$15,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="65" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>50<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
				<div class="xs-col-3-isotope-grid-item fashion dance">
					<div class="fundpress-grid-item-content xs-mb-30">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-2.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="32" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Craft</a></li>
								<li><a href="#">Handmade</a></li>
								<li><a href="#">Photography</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$45,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="32" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>45<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
				<div class="xs-col-3-isotope-grid-item food music">
					<div class="fundpress-grid-item-content xs-mb-30">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-3.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="80" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Games</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$76,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="80" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>79<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
				<div class="xs-col-3-isotope-grid-item music journalism">
					<div class="fundpress-grid-item-content">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-1.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="65" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Music</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">UI/UX</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$15,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="65" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>50<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
				<div class="xs-col-3-isotope-grid-item filandvideo games">
					<div class="fundpress-grid-item-content">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-2.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="32" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Craft</a></li>
								<li><a href="#">Handmade</a></li>
								<li><a href="#">Photography</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$45,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="32" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>45<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
				<div class="xs-col-3-isotope-grid-item food fashion">
					<div class="fundpress-grid-item-content">
						<div class="xs-item-header fundpress-item-header">
							<img src="assets/images/product/products-3.jpg" alt="">
							<div class="xs-item-header-content">
								<div class="xs-skill-bar">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count number-percentage" data-value="80" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div>
						</div><!-- .xs-item-header .fundpress-item-header END -->
						<div class="xs-item-content fundpress-item-content">
							<ul class="xs-simple-tag fundpress-simple-tag">
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Games</a></li>
							</ul>
							<a href="#" class="xs-post-title color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
							<ul class="xs-list-with-content fundpress-list-item-content">
								<li>$76,280<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="80" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>79<span>Days to go</span></li>
							</ul>
						</div><!-- .xs-item-content .fundpress-item-content END -->
					</div>
				</div><!-- .xs-col-3-isotope-grid-item END -->
			</div><!-- .xs-col-3-isotope-grid END -->
		</div>
		<div class="xs-pagination-wraper text-center">
			<ul class="xs-pagination fundpress-pagination">
				<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">12</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
</section>	<!-- End in progress explore section -->

	<!-- sponsor section -->
	<section class="xs-gray-bg xs-bg xs-section-padding fundpress-sponsor-section" style="background-image: url(assets/images/background/sponsor_section_bg.jpg);">
	<div class="xs-solid-overlay xs-bg-white"></div>
	<div class="container fundpress-partners-wraper">
		<div class="fundpress-heading-title">
			<h2 class="color-navy-blue xs-mb-0">Trusted by the biggest nonprofits, companies in the world.</h2>
		</div><!-- .xs-heading-title .fundpress-heading-title END -->
		<div class="content-center">
			<ul class="fundpress-partners">
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-1.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-2.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-3.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-4.png" alt=""></a></li>
			</ul><!-- .fundpress-partners END -->
		</div>
		<div class="content-center">
			<ul class="fundpress-partners">
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-5.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-6.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-7.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-8.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-9.png" alt=""></a></li>
			</ul><!-- .fundpress-partners END -->
		</div>
	</div>
</section>	<!-- End sponsor section -->
</main>

<?php include"inc/footer.php";   ?>