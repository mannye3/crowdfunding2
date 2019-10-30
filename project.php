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
<<section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-1 parallax-window" data-parallax="scroll" data-image-src="assets/images/background/sponsor_section_bg.jpg" style="height: 500px;">
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
	<!-- fund details -->
	<section class="xs-content-section-padding xs-fund-details fundpress-fund-details">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-7">
				<div class="xs-sync-slider-wraper xs-mb-50">
					<div class="owl-carousel xs-sync-slider-preview xs-mb-10">
						<div class="xs-sync-slider-preview-content">
							<img src="assets/images/product/product_1.jpg" alt="">
						</div>
						<div class="xs-sync-slider-preview-content">
							<img src="assets/images/product/product_2.jpg" alt="">
						</div>
						<div class="xs-sync-slider-preview-content">
							<iframe class="xs-youtube-iframe" src="https://www.youtube.com/embed/Hn89qD03Tzc" allowfullscreen></iframe>
						</div>
						<div class="xs-sync-slider-preview-content">
							<img src="assets/images/product/product_3.jpg" alt="">
						</div>
						<div class="xs-sync-slider-preview-content">
							<img src="assets/images/product/product_4.jpg" alt="">
						</div>
					</div><!-- xs-sync-slider-preview -->

					<div class="owl-carousel xs-sync-slider-thumb">
						<div class="xs-sync-slider-thumb-content">
							<img src="assets/images/product/product_thumb_1.jpg" alt="">
						</div>
						<div class="xs-sync-slider-thumb-content">
							<img src="assets/images/product/product_thumb_2.jpg" alt="">
						</div>
						<div class="xs-sync-slider-thumb-content">
							<img src="assets/images/product/product_thumb_5.jpg" alt="">
							<div class="xs-sync-slider icon-position-center">
								<a href="#" class="full-round icon-identify-btn blue-btn opacity-btn xs-box-shadow"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<div class="xs-sync-slider-thumb-content">
							<img src="assets/images/product/product_thumb_3.jpg" alt="">
						</div>
						<div class="xs-sync-slider-thumb-content">
							<img src="assets/images/product/product_thumb_4.jpg" alt="">
						</div>
					</div><!-- xs-sync-slider-thumb -->
				</div><!-- xs-sync-slider-wraper -->
				<div class="xs-text-content-tab">
					<!-- Nav tabs -->
					<div class="xs-tab-nav fundpress-tab-nav-v2 xs-mb-30">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#description" role="tab" data-toggle="tab">
									Description
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#updates" role="tab" data-toggle="tab">
									Updates
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#comments_panel" role="tab" data-toggle="tab">
									comments <span class="color-green">(9)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#backers" role="tab" data-toggle="tab">
									Backers
								</a>
							</li>
						</ul>
					</div><!-- xs-tab-nav fundpress-tab-nav-v2 xs-mb-30 -->
					<!-- Tab panes -->
					<div class="tab-content xs-text-tab-content">
						<div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="description">
							<h5 class="color-navy-blue xs-mb-30">We are a group of 41 leaders from Ascension Leadership Academy. As a team we are committed to creating a world of Freedom, Love, and Transformation.</h5>
							<p class="xs-content-description fundpress-content-description xs-mb-30">Why I am supporting Safelight's cause... It took me a long time to admit outloud that I had been in an abusive relationship for roughly the last year an d half of my college career. I studied domestic violence/interpersonal <span class="color-navy-blue">partner violence during that time</span>, but continued to do what many people trapped in those relationships do... </p>
							<p class="xs-content-description fundpress-content-description xs-mb-30">I"is it worth it?", "do you really think that's what love is?", and yes, even when said "you study this stuff, you know what this is, why do you let yourself go through this?"</p>
							<h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">Our Mission:</h3>
							<p class="xs-content-description fundpress-content-description xs-mb-30">To raise $85,000 by October 14, 2017, in support of the Coalition to Abolish Slavery and Trafficking Los Angeles (CAST LA) and it's mission to build a future where Human Trafficking exists.</p>
							<p class="xs-content-description fundpress-content-description xs-mb-40">NYC Marathon 2016 was the most awesome race of all to date. The day was beautiful, the crowd fantastic, and I had a great day in the Big Apple even after taking a spill at Mile 13. Now, seriously ~ who breaks an arm running a marathon? And who keeps running because 'broken' didn't cross her mind? That would be me. What a learning curve!</p>
							<h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">Our Vission:</h3>
							<p class="xs-content-description fundpress-content-description xs-mb-0">Why I am supporting Safelight's cause... <span class="color-green">It took me a long time to admit outloud that</span> I had been in an abusive relationship for roughly the last year an d half of my college career. I studied domestic violence/interpersonal partner violence during that time, but continued to do what many people trapped in those relationships do... I stayed; even when asked "why?", "is it worth it?", "do you really think that's what love is?", and yes, even when said "you study this stuff, you know what this is, why do you let yourself go through this?"</p>
						</div><!-- tab-pane fadeInRights -->
						<div role="tabpanel" class="tab-pane fadeInRights fade" id="updates">
							<div class="xs-ul-list fundpress-content-text-list-wraper">
								<ul class="fundpress-content-text-list xs-content-text-list">
									<li>
										<p class="xs-content-description fundpress-content-description color-navy-blue">December 28</p>
										<div class="fundpress-title-text-content">
											<h4 class="color-navy-blue medium margin-bottom-0">Can you help us spread the word?</h4>
										</div>
										<p class="xs-content-description fundpress-content-description xs-mb-30">Hi supporters! <br>
										Can you help us spread the word about this fundraiser with friends or family who might be interested?</p>
										<p class="xs-content-description fundpress-content-description color-navy-blue">Here's the link:</p>
										<a href="https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary" class="color-green">
											https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary
										</a>
									</li>
									<li>
										<p class="xs-content-description fundpress-content-description color-navy-blue">December 28</p>
										<div class="fundpress-title-text-content">
											<h4 class="color-navy-blue medium margin-bottom-0">Can you help us spread the word?</h4>
										</div>
										<p class="xs-content-description fundpress-content-description xs-mb-30">Hi supporters! <br>
										Can you help us spread the word about this fundraiser with friends or family who might be interested?</p>
										<p class="xs-content-description fundpress-content-description color-navy-blue">Here's the link:</p>
										<a href="https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary" class="color-green">
											https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary
										</a>
									</li>
									<li>
										<p class="xs-content-description fundpress-content-description color-navy-blue">December 28</p>
										<div class="fundpress-title-text-content">
											<h4 class="color-navy-blue medium margin-bottom-0">Can you help us spread the word?</h4>
										</div>
										<p class="xs-content-description fundpress-content-description xs-mb-30">Hi supporters! <br>
										Can you help us spread the word about this fundraiser with friends or family who might be interested?</p>
										<p class="xs-content-description fundpress-content-description color-navy-blue">Here's the link:</p>
										<a href="https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary" class="color-green">
											https://www.xpeedstudio.com/projects/923398342/bodycartography-projects-20th-anniversary
										</a>
									</li>
								</ul>
								<div class="xs-navy-blue-bg fundpress-porject-lunch xs-content-padding text-center content-left">
									<h3 class="color-white xs-mb-10 regular">january 16, 2018</h3>
									<h4 class="color-white xs-mb-0 semi-bold">Project Launched</h4>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fadeInRights fade" id="comments_panel">
							<div class="xs-blog-post-comment border xs-content-padding">
								<!-- post comment -->
								<div id="comments" class="comments-area">
									<h4 class="comments-title"> 4 Comments</h4>
									<!-- start comment -->
									<ol class="comment-list">
										<li id="comment-1" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
											<article id="div-comment-1" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img alt="comment avatar image" src="assets/images/avatar/avatar_9.jpg"  class="avatar avatar-34 photo">
														<b class="fn">Jhony WIlliamson</b>
													</div><!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#">
															<time datetime="2018-08-17T04:24:26+00:00">17th August 2018</time>
														</a>
													</div><!-- .comment-metadata -->
												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>On the evening of November 10th, the audience at New York’s Metry opolitiona era was treated to the briefest of delights.</p>
												</div><!-- .comment-content -->
												<div class="reply">
													<a href="#" aria-label="Reply to admin"> 
														<i class="fa fa-mail-forward" aria-hidden="true"></i>
														Reply
													</a>
												</div>
											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-2" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
											<article id="div-comment-2" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img alt="comment avatar image" src="assets/images/avatar/avatar_7.jpg"  class="avatar avatar-34 photo">
														<b class="fn">William Smith</b>
													</div><!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#">
															<time datetime="2018-08-17T04:24:26+00:00">17th August 2018</time>
														</a>
													</div><!-- .comment-metadata -->
												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>On the evening of November 10th, the audience at New York’s Metry opolitiona era was treated to the briefest of delights.</p>
												</div><!-- .comment-content -->
												<div class="reply">
													<a href="#" aria-label="Reply to admin"> 
														<i class="fa fa-mail-forward" aria-hidden="true"></i>
														Reply
													</a>
												</div>
											</article><!-- .comment-body -->
											<ol class="children">
												<li id="comment-3" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
													<article id="div-comment-3" class="comment-body">
														<footer class="comment-meta">
															<div class="comment-author vcard">
																<img alt="" src="assets/images/avatar/avatar_8.jpg" class="avatar avatar-34 photo">
																<b class="fn">Julian Jenny</b> 
															</div><!-- .comment-author -->

															<div class="comment-metadata">
																<a href="#">
																	<time datetime="2018-08-17T04:24:41+00:00">17th August 2018</time>
																</a>
															</div><!-- .comment-metadata -->
														</footer><!-- .comment-meta -->

														<div class="comment-content">
															<p>On the evening of November 10th, the audience at New York’s Metry opolitans Opera was treated to the briefest of delights.</p>
														</div><!-- .comment-content -->

														<div class="reply">
															<a class="comment-reply-link" href="#" aria-label="Reply to admin"> 
																<i class="fa fa-mail-forward" aria-hidden="true"></i>
																Reply
															</a>
														</div>
													</article><!-- .comment-body -->
												</li><!-- #comment-## -->
												<li>
													<ol class="children">
														<li id="comment-4" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
															<article id="div-comment-4" class="comment-body">
																<footer class="comment-meta">
																	<div class="comment-author vcard">
																		<img alt="" src="assets/images/avatar/avatar_10.jpg" class="avatar avatar-34 photo">
																		<b class="fn">Julian Jenny</b> 
																	</div><!-- .comment-author -->

																	<div class="comment-metadata">
																		<a href="#">
																			<time datetime="2018-08-17T04:24:41+00:00">17th August 2018</time>
																		</a>
																	</div><!-- .comment-metadata -->
																</footer><!-- .comment-meta -->

																<div class="comment-content">
																	<p>On the evening of November 10th, the audience at New York’s Metry opolitans Opera was treated to the briefest of delights.</p>
																</div><!-- .comment-content -->

																<div class="reply">
																	<a class="comment-reply-link" href="#" aria-label="Reply to admin"> 
																		<i class="fa fa-mail-forward" aria-hidden="true"></i>
																		Reply
																	</a>
																</div>
															</article><!-- .comment-body -->
														</li><!-- #comment-## -->
													</ol><!-- .children -->
												</li>
											</ol><!-- .children -->
										</li><!-- #comment-## -->
									</ol>
									<!-- end comment -->
									
									<!-- start respond form -->
									<div id="respond" class="comment-respond">
										<h3 id="reply-title" class="comment-reply-title">Leave a comments 
											<small>
												<a rel="nofollow" id="cancel-comment-reply-link" href="http://demo.xpeedstudio.com/wp/premix/hello-world-2/#respond" style="display:none;">
												Cancel reply</a>
											</small>
										</h3>
										<div class="separator">
											<span></span><span></span><span></span>
										</div>			
										<form action="#" method="post" id="commentform" class="comment-form">
									
											<div class="comment-info">
												<input placeholder="Enter Name *" id="author" class="comment-100" name="author" type="text" value="" size="30" aria-required="true">

												<input placeholder="Enter Email *" class="comment-50" id="email" name="email" type="email" value="" size="30" aria-required="true">
												
												<input placeholder="Enter Website" class="comment-50" id="url" name="url" type="url" value="" size="30">
											</div>
											<div class="commentright ">
												<textarea placeholder="Enter Comments *" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
											</div>
											<div class="clearfix"></div>
											<p class="form-submit">
												<input name="submit" type="submit" id="submit" class="premix-btn light-red-btn coment-btn" value="Post Comment"> 
												<input type="hidden" name="comment_post_ID" value="165" id="comment_post_ID">
												<input type="hidden" name="comment_parent" id="comment_parent" value="0">
											</p>			
										</form>
									</div>
									<!-- end respond form -->
								</div>
								<!-- end post comment -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fadeInRights fade" id="backers">
							<div class="xs-backers-lsit-wraprer">
								<ul class="fundpress-backer-lsit">
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-1.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Emerson Royle</h3>
												<h4 class="color-green regular xs-mb-0">$54,821 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-3.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Emmy Anderson</h3>
												<h4 class="color-green regular xs-mb-0">$33,000 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-4.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Angelina Julie</h3>
												<h4 class="color-green regular xs-mb-0">$54,000 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-1.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Van Persia</h3>
												<h4 class="color-green regular xs-mb-0">$12,346 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-2.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Fula Tarner</h3>
												<h4 class="color-green regular xs-mb-0">$64,000 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-3.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Kale Anderson</h3>
												<h4 class="color-green regular xs-mb-0">$40,000 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
									<li class="row xs-margin-0">
										<div class="row xs-margin-0 col-md-6 text-left">
											<div class="xs-avatar full-round">
												<img src="assets/images/backers/backers-4.jpg" alt="">
											</div>
											<div class="fundpress-backer-info">
												<h3 class="color-navy-blue semi-bold">Emila Perry</h3>
												<h4 class="color-green regular xs-mb-0">$34,700 - No reward</h4>
											</div>
										</div>
										<div class="xs-btn-wraper col-md-6 text-right">
											<a href="#" class="xs-btn round-btn navy-blue-btn">Details</a>
										</div>
									</li>
								</ul>
								<div class="xs-animate-btn-wraper xs-gradient-overlay white-gradient-overlay">
									<a href="#" class="xs-animate-btn color-navy-blue">
										<i class="fa fa-long-arrow-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- tab-content xs-text-tab-content -->
				</div><!-- xs-text-content-tab -->
			</div>
			<div class="col-md-12 col-sm-12 col-lg-5">
				<div class="xs-sidebar-wraper">
					<div class="xs-single-sidebar xs-mb-20">
						<div class="xs-pie-chart-wraper fundpress-pie-chart-wraper">
							<div class="xs-pie-chart" data-percent="81">
								<div class="xs-pie-chart-percent-wraper icon-position-center bold color-navy-blue xs-spilit-container">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</div>
							<div class="xs-pie-chart-label">Fund Raised</div>
						</div><!-- xs-pie-chart-wraper -->
					</div>

					<div class="xs-single-sidebar xs-mb-30">
						<ul class="xs-list-with-content fundpress-simple-list-content">
							<li class="color-navy-blue bold xs-mb-20">US $75,280<span class="color-semi-black regular">Pledged</span></li>
							
							<li class="color-green bold xs-mb-20">US $87,000<span class="color-semi-black regular">Goal</span></li>

							<li class="color-brick-light-2 bold">119<span class="color-semi-black regular">Backers</span></li>
						</ul><!-- xs-list-with-content fundpress-simple-list-content -->
					</div>

					<div class="xs-single-sidebar xs-mb-40">
						<div class="xs-countdown-timer-wraper">
							<div class="countdown-container xs-countdown-timer-v2" data-countdown="2020/01/01"></div>
						</div><!-- xs-countdown-timer-wraper -->
					</div>

					<div class="xs-single-sidebar xs-mb-50">
						<div class="xs-spilit-container">
							<div class="xs-btn-wraper">
								<a href="#" class="icon-btn xs-btn radius-btn green-btn xs-btn-medium"><i class="fa fa-heart"></i>invest Now</a>
							</div>
							<div class="xs-social-list-wraper">
								<ul class="xs-social-list xs-social-list-v3 fundpress-social-list">
									<li><a href="#" class="color-facebook xs-box-shadow full-round"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="xs-box-shadow color-google-plus full-round"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="xs-box-shadow color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="xs-box-shadow color-navy-blue full-round"><i class="fa fa-plus"></i></a></li>
								</ul>
							</div>
						</div><!-- xs buttons and social list -->
					</div>

					<div class="xs-single-sidebar xs-mb-50">
						<div class="xs-spilit-container xs-spilit-container-v2">
							<div class="xs-avatar xs-avatar-big full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_2.jpg" alt="">
							</div>
							<div class="xs-avatar-title fundpress-avatar-title fundpress-avatar-title-v2">
								<a href="#" class="xs-mb-10">Alferd Keyn Williamson</a>
								<p class="xs-content-description fundpress-content-description xs-mb-20">CEO & Founder, Abstract Art Inc.</p>
								<ul class="xs-list-item-icon-text">
									<li class="xs-mb-0">
										<p class="xs-content-description fundpress-content-description">
											<i class="fa fa-map-marker color-green"></i>
											Aban dhaban typo pen road, New york, United States
										</p>
									</li>
								</ul>
							</div><!-- xs-avatar-title fundpress-avatar-title fundpress-avatar-title-v2 -->
						</div>
					</div>

					<div class="xs-single-sidebar">
						<div class="xs-sidebar-title fundpress-sidebar-title xs-mb-30">
							<h3 class="color-navy-blue">Support This Project</h3>
						</div>
						<div class="xs-info-card xs-purple-bg fundpress-info-card xs-box-shadow xs-mb-30 color-white">
							<h3 class="xs-mb-30">Pledge $500 or more</h3>
							<h4 class="xs-mb-20">HIS and HERS (or For Parents)</h4>
							<p class="xs-mb-20 xs-content-description fundpress-content-description">Two XpeedX Smart Systems beautifully packaged (will retail for $500 for two). </p>
							<span class="xs-mb-40">Free access to DynoLife App.</span>
							<div class="xs-spilit-container">
								<div class="xs-info-card-times">
									<h5>Estimated Delivery</h5>
									<h6>17Th Aug 2017</h6>
								</div>
								<div class="xs-info-card-times">
									<h5>Ships To</h5>
									<h6>Anywhere in the world</h6>
								</div>
							</div>
						</div>
						<div class="xs-info-card xs-pink-bg fundpress-info-card xs-box-shadow color-white">
							<h3 class="xs-mb-30">Pledge $700 or more</h3>
							<h4 class="xs-mb-20">Trainer Special</h4>
							<p class="xs-mb-20 xs-content-description fundpress-content-description">Ten XpeedX Smart Systems beautifully packaged individually for each of your trainees (will retail for $1380 for ten). </p>
							<span class="xs-mb-40">Free access to DynoLife App.</span>
							<div class="xs-spilit-container">
								<div class="xs-info-card-times">
									<h5>Estimated Delivery</h5>
									<h6>20Th Jun 2017</h6>
								</div>
								<div class="xs-info-card-times">
									<h5>Ships To</h5>
									<h6>Anywhere in the world</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	<!-- End fund details -->

	<!-- popular campaigns -->
	<section class="waypoint-tigger xs-gray-bg xs-section-padding">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-xl-9 col-md-9">
				<h2 class="color-navy-blue">Other Project</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>FundPress has built a platform focused on aiding entrepreneurs, startups, and companies raise capital from anyone.</p>
			</div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
				<a href="#" class="xs-btn round-btn navy-blue-btn">all Projects</a>
			</div><!-- .xs-btn-wraper .xs-col-3 .d-flex-center-end END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="row">
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-1.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="#">Technology</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Splash Drone 3 a Fully Waterproof Drone that floats</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$67,000<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>3<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_1.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Ema Watson</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-2.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="#">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">The Read Read: Braille Literacy Tool for the Blind</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$33,600<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>10<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_2.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Kene Williamson</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-3.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="#">Funding</a></li>
							<li><a href="#">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">BuildOne: $99 3D Printer w/ WiFi and Auto Bed Leveling!</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$12,760<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>66<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_3.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Leo Baddabes</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
		</div>
	</div>
</section>	<!-- End popular campaigns -->
</main>


		<footer class="xs-footer-section xs-fixed-footer fundpress-footer-section">
			<div class="fundpress-footer-top-layer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="fundpress-single-footer">
								<div class="xs-footer-logo">
									<a href="index.html">
										<img src="assets/images/footer_logo.png" alt="">
									</a>
								</div>
								<div class="fundpress-footer-content">
									<p>FundPress online and raise money for charity and causes you’re passionate about. FundPress is an innovative, cost-effective online fundraising website for personal fundraising pages.</p>
								</div><!-- . END -->
								<ul class="xs-social-list fundpress-social-list">
									<li><a href="#" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="color-pinterest full-round"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="color-instagram full-round"><i class="fa fa-instagram"></i></a></li>
								</ul><!-- .xs-social-list .fundpress-social-list END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-3">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">Explore Campaigns</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Gadgets</a></li>
										<li><a href="#">Monuments</a></li>
										<li><a href="#">Travels</a></li>
										<li><a href="#">Accessoriers</a></li>
										<li><a href="#">Books</a></li>
										<li><a href="#">Community Programs</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-2">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">About</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">How It Works</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Press</a></li>
										<li><a href="news-feed.html">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-2">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">Help</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="#">Our Rules</a></li>
										<li><a href="#">Trust & Safety</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Privacy Policy</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
					</div>
				</div>
			</div><!-- .xs-footer-wraper .fundpress-footer-top-layer END -->
			<div class="xs-footer-bottom-layer fundpress-footer-bottom">
				<div class="container">
					<div class="xs-footer-bottom-wraper">
						<div class="xs-copyright-text fundpress-copyright-text">
							<p>Built with <i class="fa fa-heart"></i> by <a href="https://xpeedstudio.com/">XpeedStudio</a></p>
						</div>
						<div class="xs-back-to-top-wraper">
							<a href="#" class="xs-back-to-top full-round green-btn xs-back-to-top-btn show-last-pos">
								<i class="fa fa-angle-up"></i>
							</a>
						</div><!-- .xs-back-to-top-wraper END -->
					</div>
				</div>
			</div><!-- .xs-footer-bottom-layer .fundpress-footer-bottom END -->
		</footer>


		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/Popper.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/parallax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/spectragram.min.js"></script>
		<script src="assets/js/jquery.waypoints.min.js"></script>
		<script src="assets/js/scrollax.js"></script>

		<script src="assets/js/main.js"></script>
	</body>

<!-- Mirrored from demo.xpeedstudio.com/html/fundpress/fund-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 14:26:45 GMT -->
</html>
