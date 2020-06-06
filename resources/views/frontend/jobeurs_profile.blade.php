
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/profiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:24 GMT -->
<head>
<meta charset="UTF-8">
<title>Jobeurs List</title>
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
						<a href="index.html" title=""><img src="/frontend/images/logo.png" alt=""></a>
					</div><!--logo end-->

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
							<li>
								<a href="{{ route('jobeurs.profiles') }}" title="">
									<span><img src="/frontend/images/icon4.png" alt=""></span>
									Profiles
								</a>
								<ul>
									<li><a href="{{ route('jobeurs.profiles') }}" title="">Jobeurs Profiles</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
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
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="/frontend/images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>

						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
                        @if(Auth::guard('jobeur')->user( ))
                            <div class="user-info">
                                <img src="{{ url('images/profil', Auth::guard('jobeur')->user()->profil_img ) }}" width="30" height="30">
                                <a href="#" title="">{{ Auth::guard('jobeur')->user()->name }}</a>
                                <i class="la la-sort-down"></i>
                            </div>

                        @elseif(Auth::guard('client')->user()->name != null)
                            <div class="user-info">
                                <img src="{{ url('images/profil', Auth::guard('client')->user()->profil_img ) }}" width="30" height="30">
                                <a href="#" title="">{{ Auth::guard('client')->user()->name }}</a>
                                <i class="la la-sort-down"></i>
                            </div>

                        @elseif(Auth::guard('admin')->user()->name != null)
                            <div class="user-info">
                                <img src="{{ url('images/profil', Auth::guard('admin')->user()->profil_img ) }}" width="30" height="30">
                                <a href="#" title="">{{ Auth::guard('admin')->user()->name }}</a>
                                <i class="la la-sort-down"></i>
                            </div>

                        @endif

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

							</ul>
							<h3 class="tc"><a href="#" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->



		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Jobeurs Profiles</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
                        @foreach($jobeurs as $jobeur)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        @if($jobeur->profil_img)
                                            <img src="{{ url('/images/profil', $jobeur->profil_img) }}" alt="{{ $jobeur->profil_img }}" width="91" height="91">
                                        @else
                                            <img src="/frontend/images/resources/pf-icon1.png" width="91" height="91">
                                        @endif
                                        <h3>{{ $jobeur->name }}</h3>
                                        <h4>{{ $jobeur->email }}</h4>
                                        <ul>
                                            @isset($jobeur->tel)
                                                <li><a href="#" class="follow">TEL : {{ $jobeur->tel }}</a></li>
                                            @endisset

                                            @isset($jobeur->email)
                                                <li><a href="mailto:{{ $jobeur->email }}" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                            @endisset

                                        </ul>
                                    </div>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                        @endforeach
					</div>
				</div><!--companies-list end-->

			</div>
		</section><!--companies-info end-->


	</div><!--theme-layout end-->



    <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/popper.js"></script>
    <script type="text/javascript" src="/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/frontend/js/flatpickr.min.js"></script>
    <script type="text/javascript" src="/frontend/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="/frontend/js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/profiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:35 GMT -->
</html>
