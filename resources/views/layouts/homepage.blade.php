<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ trans('panel.site_title') }} - Discover & Book the best cleaning companies at the best price">
	<meta name="author" content="Josh">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="https://app-cdn.clickup.com/assets/favicons/favicon-16x16.png" type="image/x-icon">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('css/bootstrap_customized.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="{{ asset('css/home.css')}}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('css/custom.css')}}" rel="stylesheet">

</head>

<body>

	<header class="header clearfix element_to_stick">
		<div class="container">
			<div id="logo">
				<a href="{{ route('home.page') }}">
					{{-- <img src="img/logo.svg" width="140" height="35" alt="" class="logo_normal">
					<img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky"> --}}
                   <h3 style="text-transform: uppercase; font-weight:900; color:green"> {{ trans('panel.site_title') }}</h3>
				</a>
			</div>
			<ul id="top_menu">
				<li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
				<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
			</ul>
			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu"></i><span>Menu</span>
			</a>
			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
					<a href="index.html"><img src="img/logo.svg" width="140" height="35" alt=""></a>
				</div>
				<ul>
					<li class="submenu">
						<a href="#0" class="show-submenu">Home</a>
						<ul>
							<li><a href="index.html">Default</a></li>
							<li><a href="index-2.html">Video Background</a></li>
							<li><a href="index-3.html">Slider</a></li>
							<li><a href="index-4.html">GDPR Cookie Bar EU Law</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#0" class="show-submenu">Listing</a>
						<ul>
							<li class="third-level"><a href="#0">List pages</a>
								<ul>
									<li><a href="grid-listing-filterscol.html">List default</a></li>
									<li><a href="grid-listing-filterscol-map.html">List with map</a></li>
									<li><a href="grid-listing-filterscol-full-width.html">List full width</a></li>
									<li><a href="grid-listing-filterscol-full-masonry.html">List Masonry Filter</a></li>
								</ul>
							</li>
							<li><a href="detail-restaurant.html">Detail page 1</a></li>
							<li><a href="detail-restaurant-2.html">Detail page 2</a></li>
							<li><a href="submit-restaurant.html">Submit Restaurant</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="admin_section/index.html" target="_blank">Admin Section</a></li>

						</ul>
					</li>
					<li class="submenu">
						<a href="#0" class="show-submenu">Other Pages</a>
						<ul>
							<li><a href="404.html">404 Error</a></li>
							<li><a href="confirm.html">Confirm Booking</a></li>
							<li><a href="help.html">Help and Faq</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="booking.html">Booking</a></li>
							<li><a href="leave-review.html">Leave a review</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="coming_soon/index.html">Coming Soon</a></li>
							<li><a href="account.html">Sign Up</a></li>
							<li><a href="icon-pack-1.html">Icon Pack 1</a></li>
							<li><a href="icon-pack-2.html">Icon Pack 2</a></li>
						</ul>
					</li>
					<li><a href="submit-restaurant.html">Submit</a></li>
					<li><a href="#0">A link</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- /header -->

	@yield('content')

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="#.">About us</a></li>
							<li><a href="#.">Book a chance on out site</a></li>
							<li><a href="#.">Help Desk</a></li>
							<li><a href="#.">My account</a></li>
							<li><a href="#.">Blogs</a></li>
							<li><a href="#.">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="listing-grid-1-full.html">Top Categories</a></li>
							<li><a href="listing-grid-2-full.html">Best Rated</a></li>
							<li><a href="listing-grid-1-full.html">Best Price</a></li>
							<li><a href="listing-grid-3.html">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_3">Contacts Us</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="icon_mobile"></i>+94 423-23-221</li>
							<li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form"
								id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter"
										class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i
											class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						{{-- <li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
								data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li> --}}
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2021 {{ trans('panel.site_title') }}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('js/common_scripts.min.js')}}"></script>
	<script src="{{ asset('js/common_func.js')}}"></script>
	<script src="{{ asset('assets/validate.js')}}"></script>
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5">
					Don’t have an account? <a href="account.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new
						preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('js/modernizr.min.js')}}"></script>
	<script src="{{ asset('js/video_header.min.js')}}"></script>
	<script>
		// Video Header
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

</body>

</html>
