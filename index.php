<?php 
 include"inc/header.php";
 include"inc/nav.php"; ?>
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
</div><!-- End modal --><!-- End home section -->

<!-- welcome section -->
<section class="xs-screen-height xs-welcome-section xs-bg fundpress-welcome-section">
	<div class="xs-banner-slider owl-carousel">
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$45,280<span class="d-block">Pledged</span></li>
									<li>$87,000<span class="d-block">Goal</span></li>
									<li>119<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_1.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$10,280<span class="d-block">Pledged</span></li>
									<li>$50,000<span class="d-block">Goal</span></li>
									<li>19<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_2.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$55,280<span class="d-block">Pledged</span></li>
									<li>$80,000<span class="d-block">Goal</span></li>
									<li>100<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_3.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End welcome section -->

 <!-- cause matters -->
    <section id="cause-matters" class="waypoint-tigger xs-section-padding">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
				<h2 class="color-navy-blue">Popular Projects</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>Fundpress site thoughtfully designed for real humans which means the best user experience for your entire community of donors, fundraisers, customers, and staff.</p>
			</div><!-- .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
				<a href="progress.html" class="xs-btn round-btn navy-blue-btn">all Projects</a>
			</div><!-- .xs-btn-wraper .xs-col-3 .d-flex-center-end END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="xs-tab-wraper fundpress-tab-wraper">
			<div class="fundpress-tab-nav xs-tab-nav">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#comics" role="tab" data-toggle="tab">Comics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#crafts" role="tab" data-toggle="tab">Crafts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#dance" role="tab" data-toggle="tab">Dance</a>
					</li>
					
				</ul>
			</div><!-- .xs-isotope-nav .fundpress-isotope-nav END -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active show" id="comics">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="#">Music</a></li>
										<li><a href="#">Technology</a></li>
										<li><a href="#">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="#">Craft</a></li>
										<li><a href="#">Handmade</a></li>
										<li><a href="#">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="#">Lifestyle</a></li>
										<li><a href="#">Photography</a></li>
										<li><a href="#">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>    <!-- End cause matters -->



<!-- square service -->
<section  class="xs-navy-blue-bg fundpress-square-service-section v3">
	<div class="container">
		<div class="fundpress-section-heading fundpress-heading-title fundpress-heading-title-v2 content-left">
			<h2 class="color-white">Asking for money is hard. FundPress makes it easier. </h2>
		</div><!-- .xs-heading-title .fundpress-heading-title-v2 .fundpress-heading-title END -->
		<div class="row">
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-1.png" alt="">
					<a href="#" class="color-white">Free & Simple Setup. </a>
					<p>Start fundraising in minutes. No goal requirements, no deadlines.  </p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-2.png" alt="">
					<a href="#" class="color-white">Most Money Raised.</a>
					<p>Join the millions who have raised more than $2 billion on FundPress.</p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-3.png" alt="">
					<a href="#" class="color-white">Expert Advice, 24/7.</a>
					<p>Our campaign coaches will answer your questions in 5 minutes, day or night.</p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-4.png" alt="">
					<a href="#" class="color-white">Safety. Guaranteed.</a>
					<p>The GoFundMe Guarantee protects your donations and supporters. </p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
		</div>
	</div>
	<div class="xs-shape-background">
		<div class="xs-waves">
			<div class="xs-wave xs-wave_1"></div>
			<div class="xs-wave xs-wave_2"></div>
			<div class="xs-wave xs-wave_3"></div>
			<div class="xs-wave xs-wave_4"></div>
			<div class="xs-wave xs-wave_5"></div>
		</div>
	</div>
</section><!-- End square service -->



<!-- event section -->
<section class="xs-bg fundpress-event-section xs-section-padding v3" style="background-image: url(assets/images/icons-background-1.png);">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
				<h2 class="color-navy-blue">You can join in Special Events</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>This equity FundPress platform allows businesses to sell shares in their company to accredited investors.</p>
			</div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-md-3 col-xl-3 d-flex-center-end">
				<a href="events.html" class="xs-btn round-btn navy-blue-btn">Events</a>
			</div><!-- .xs-btn-wraper .d-flex-center-end .xs-col-3 END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="fundpress-event-wraper">
			<div class="fundpress-single-event-wraper row">
				<div class="col-md-3">
					<div class="fundpress-event-image">
						<img src="assets/images/event/event-1.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 fundpress-event-details">
					<h3 class="color-white xs-post-title fundpress-post-title">Using HRV and CorSense to Otimize Training.</h3>
					<p>In a time of overwhelming emotions, sadness, and pain, the last thing the  families need to be worrying obligations associated with this tragic.</p>
					<div class="countdown-container xs-countdown-timer" data-countdown="2019/01/01"></div>
				</div>
				<div class="col-md-3">
					<div class="fundpress-btn-wraper">
						<a href="#" class="xs-btn round-btn green-btn">subscribe</a>
					</div>
				</div>
			</div><!-- .fundpress-single-event-wraper END -->
			<div class="fundpress-single-event-wraper row">
				<div class="col-md-3">
					<div class="fundpress-event-image">
						<img src="assets/images/event/event-2.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 fundpress-event-details">
					<h3 class="color-white xs-post-title fundpress-post-title">Otimize Training & Recovery Using HRV</h3>
					<p>In a time of overwhelming emotions, sadness, and pain, the last thing the  families need to be worrying obligations associated with this tragic.</p>
					<div class="countdown-container xs-countdown-timer" data-countdown="2020/01/01"></div>
				</div>
				<div class="col-md-3">
					<div class="fundpress-btn-wraper">
						<a href="#" class="xs-btn round-btn green-btn">subscribe</a>
					</div>
				</div>
			</div><!-- .fundpress-single-event-wraper END -->
		</div>
	</div>
</section><!-- End event section -->


<!-- sponsor section -->
<section class="xs-bg xs-section-padding fundpress-sponsor-section" style="background-image: url(assets/images/background/sponsor_section_bg.jpg);">
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
</section><!-- End sponsor section -->

<?php include"inc/footer.php";   ?>
