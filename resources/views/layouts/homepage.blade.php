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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
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
			{{-- <ul id="top_menu">
				<li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
				<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
			</ul> --}}
			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu"></i><span>Menu</span>
			</a>
			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
					{{-- <a href="index.html"><img src="img/logo.svg" width="140" height="35" alt=""></a> --}}
                    <h3 style="text-transform: uppercase; font-weight:900; color:rgb(255, 255, 255)"> {{ trans('panel.site_title') }}</h3>
				</div>
				<ul>
					<li class="submenu">
						<a href="/" class="show-submenu">Home</a>
					</li>
                    <li class="submenu">
						<a href="{{ route('about.us') }}" class="show-submenu">About Us</a>
					</li>
					{{-- <li class="submenu">
						<a href="#0" class="show-submenu">About</a>
						<ul>
							<li><a href="{{ route('about.us') }}">About Us</a></li>
						</ul>
					</li> --}}
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
							<li><a href="{{ route('about.us')}}">About us</a></li>
							{{-- <li><a href="#.">Book a chance on out site</a></li>
							<li><a href="#.">Help Desk</a></li>
							<li><a href="#.">My account</a></li>
							<li><a href="#.">Blogs</a></li>
							<li><a href="#.">Contact Us</a></li> --}}
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
                            @foreach ($categories as $item)
                                <li><a href="#.">{{ $item->title }}</a></li>
                            @endforeach

							{{-- <li><a href="listing-grid-2-full.html">Best Rated</a></li>
							<li><a href="listing-grid-1-full.html">Best Price</a></li>
							<li><a href="listing-grid-3.html">Latest Submissions</a></li> --}}
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_3">Contacts Us</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i> {!! trans('panel.address') !!}</li>
							<li><i class="icon_mobile"></i>{!! trans('panel.phone') !!}</li>
							<li><i class="icon_mail_alt"></i><a href="malto:{!! trans('panel.email') !!}">{!! trans('panel.email') !!}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="{{ route('sub.subsc')}}" name="newsletter_form"
								>
                                @csrf
								<div class="form-group">
									<input type="email" name="email" id="email_newsletter"
										class="form-control" placeholder="Your email">
									<button type="submit" ><i
											class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="{!! trans('panel.twitter') !!}"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="{{ asset('img/twitter_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="{!! trans('panel.facebook') !!}"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="{{ asset('img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="{!! trans('panel.instagram') !!}"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="{{ asset('img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="{!! trans('panel.youtube') !!}"><img
											src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
											data-src="{{ asset('img/youtube_icon.svg')}}" alt="" class="lazy"></a></li>
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
						{{-- <li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li> --}}
						<li><span>Copyright © 2021 {{ trans('panel.site_title') }}</span></li>
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
				{{-- <a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a> --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		// Video Header
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
    @yield('js')
</body>

</html>
