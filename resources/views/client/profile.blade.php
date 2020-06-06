<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:49:52 GMT -->
<head>
<meta charset="UTF-8">
<title>client profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="/frontend/css/animate.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/frontend/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/frontend/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css">
</head>

<body>


	<div class="wrapper">


		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="{{ route('home') }}" title=""><img src="/frontend/images/logo.png" alt=""></a>
					</div><!--logo end-->
					<!--<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div>--><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="{{ route('home') }}" title="">
									<span><img src="/frontend/images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="{{ route('categories') }}" title="">
									<span><img src="/frontend/images/icon2.png" alt=""></span>
									Categories
								</a>
							</li>
							<!--
							<li>
								<a href="projects.html" title="">
									<span><img src="/frontend/images/icon3.png" alt=""></span>
									Projects
								</a>
							</li>-->
							<li>
								<a href="#" title="">
									<span><img src="/frontend/images/icon4.png" alt=""></span>
									Profiles
								</a>
								<ul>
									<li><a href="{{ route('jobeurs.profiles') }}" title="">jobeurs Profiles</a></li>
									<li><a href="{{ route('client.profile') }}" title="">my-profile-feed</a></li>
								</ul>
							</li>
							<li>
								<a href="jobs.html" title="">
									<span><img src="/frontend/images/icon5.png" alt=""></span>
									Jobs
								</a>
							</li>

							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="/frontend/images/icon7.png" alt=""></span>
									Notification
								</a>
								<div class="notification-box">
									<div class="nt-title">
										<h4>Notification</h4>

									</div>

                                    @foreach (Auth::guard('client')->user()->unreadNotifications as $notification)
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="notification-info">
                                                    <h3><a href="#" >{!! $notification->data['msg'] !!}</a> <br> {!! $notification->data['proposition'] .'/ PRICE: '. $notification->data['price'] !!}</h3>
                                                    <span>{{ $notification->created_at->diffForHumans() }}</span>
                                                </div><!--notification-info -->
                                            </div>
                                        </div><!--nott-list end-->
                                    @endforeach
                                    <div class="view-all-nots">
                                        <a href="{{ route('jobuerNotifMarkAsRead') }}">Mark as read All Notification </a>
                                    </div>
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
                            <img src="{{ url('images/profil', Auth::guard('client')->user()->profil_img ) }}" width="30" height="30">

							<a href="#" title="">{{ Auth::guard('client')->user()->name }}</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<!--<h3>Online Status</h3>
							<ul class="on-off-status">
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c5">
										<label for="c5">
											<span></span>
										</label>
										<small>Online</small>
									</div>
								</li>
								<li>
									<div class="fgt-sec">
										<input type="radio" name="cc" id="c6">
										<label for="c6">
											<span></span>
										</label>
										<small>Offline</small>
									</div>
								</li>
							</ul>
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div>--><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<!--<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>-->
							</ul>
                            <h3 class="tc">
                                <a href="{{ route('client.logout') }}" class="dropdown-item btn btn-default btn-flat"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </h3>




						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->



		<section class="cover-sec">
			<img src="/frontend/images/resources/cover-img.jpg" alt="">

		</section>


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
                                            <img src="{{ url('images/profil', Auth::guard('client')->user()->profil_img ) }}" width="170" height="170">
										</div><!--user-pro-img end-->
										<div class="user_pro_status">

											<ul class="flw-status">
												<li>
													<span>Evaluation</span>
													<b>34</b>
												</li>

											</ul>
										</div><!--user_pro_status end-->


									</div><!--user_profile end-->
									<div class="suggestions full-width">


									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>{{ Auth::guard('client')->user()->name }}</h3>
										<div class="star-descp">
											<span>note</span>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
											</ul>

										</div><!--star-descp end-->
										<div class="tab-feed st2">
											<ul >

												<li data-tab="info-dd" class="active">
													<a href="#" title="">
														<img src="/frontend/images/ic2.png" alt="">
														<span>Info</span>
													</a>
												</li>

												</ul>


										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div></div>
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">

										<div class="user-profile-ov st2">
											<h3><a href="#" title="" class="exp-bx-open">Personal Information </a></h3></br></br></br>
											<h4>E-mail </h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
											<h4>Phone Number</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>

										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="ed-box-open">Evaluation</a></h3> </br></br></br>
											<h4>Evaluation</h4>
											<span>2015 - 2017</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div><!--user-profile-ov end-->

									</div><!--product-feed-tab end-->

				</div>
			</div>
		</main>





<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
<script type="text/javascript" src="/frontend/js/popper.js"></script>
<script type="text/javascript" src="/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/frontend/js/flatpickr.min.js"></script>
<script type="text/javascript" src="/frontend/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="/frontend/js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/my-profile-feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:52 GMT -->
</html>
