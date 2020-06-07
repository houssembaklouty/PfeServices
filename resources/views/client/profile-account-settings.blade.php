
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/profile-account-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:58 GMT -->
<head>
<meta charset="UTF-8">
<title>Client Account Setting</title>
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

                                @if (Auth::guard('client')->check())
                                    <a href="{{ route('client.home') }}" title="">
                                        <span><img src="/frontend/images/icon1.png" alt=""></span>
                                        Home
                                    </a>
                                @else
                                    <a href="{{ route('home') }}" title="">
                                        <span><img src="/frontend/images/icon1.png" alt=""></span>
                                        Home
                                    </a>
                                @endif
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
									<li><a href="{{ route('jobeurs.profiles') }}" title="">Jobeurs Profiles</a></li>
									<li><a href="{{ route('client.profile') }}" title="">my-profile-feed</a></li>
								</ul>
							</li>
							<li>
								<a href="{{ route('client.jobs') }}" title="">
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
                                                    <h3><a href="#" >Proposition de : {!! $notification->data['jobeur'] !!}</a> <br> {!! $notification->data['proposition'] .'/ PRICE: '. $notification->data['price'] !!}</h3>
                                                    <span>{{ $notification->created_at->diffForHumans() }}</span>
                                                </div><!--notification-info -->
                                            </div>
                                        </div><!--nott-list end-->
                                    @endforeach
                                    <div class="view-all-nots">
                                        <a href="{{ route('clientNotifMarkAsRead') }}">Mark as read All Notification </a>
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
								<li><a href="{{ route('client.profile.account_setting') }}" title="">Account Setting</a></li>
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
		<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">


								    <a class="nav-item nav-link active" id="nav-edit-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-edit" aria-selected="false"><i class="fa fa-random"></i>Edit Profil</a>
								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">

							  	<div class="tab-pane fade show active" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">
									<div class="acc-setting">
										<h3>Account Setting</h3>
                                        <form action="{{ route('client.edit.profile') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="cp-field">
												<h5>Name</h5>
												<div class="cpp-fiel">
                                                    <input type="text" name="name" placeholder="Name" value="{{ Auth::guard('client')->user()->name }}">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Email</h5>
												<div class="cpp-fiel">
                                                    <input type="text" name="email" placeholder="Email" value="{{ Auth::guard('client')->user()->email }}">
													<i class="fa fa-lock"></i>
												</div>
                                            </div>

											<div class="cp-field">
												<h5>Phone</h5>
												<div class="cpp-fiel">
                                                    <input type="text" name="tel" placeholder="Phone" value="{{ Auth::guard('client')->user()->tel }}">
													<i class="fa fa-lock"></i>
												</div>
                                            </div>

											<div class="cp-field">
												<h5>Profil img</h5>
                                                <input type="file" name="profil_img" class="form-control">
											</div>

											<div class="save-stngs pd2">
												<ul>
													<li><button type="submit">Save</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
                                </div>

							  	<div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
							  		<div class="acc-setting">
										<h3>Deactivate Account</h3>
                                        <form action="{{ route('client.deactivate.account_setting') }}"method="post">
											<div class="save-stngs pd3">
                                                @csrf

                                                <input type="hidden" name="active" value="0">
												<ul>
													<li><button type="submit">Confirmer</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>




	</div><!--theme-layout end-->



    <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/popper.js"></script>
    <script type="text/javascript" src="/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/frontend/js/flatpickr.min.js"></script>
    <script type="text/javascript" src="/frontend/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="/frontend/js/script.js"></script>


</body>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/profile-account-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:52:01 GMT -->
</html>
