
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:52 GMT -->
<head>
<meta charset="UTF-8">
<title>client jobs</title>
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

		<!--<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Search keywords">
						<button type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="posts-section">


                                        @foreach($posts as $post)

										<div class="posty" style="margin-bottom: 1em;">
											<div class="post-bar no-margin">
												<div class="post_topbar">
													<div class="usy-dt">
                                                        {{-- <img src="/frontend/images/resources/us-pc2.png" alt=""> --}}
                                                        <img src="{{ url('images/profil', $post->client_relation->profil_img ) }}" alt="user" width="50" height="50">
														<div class="usy-name">
															<h3>{{ $post->client_relation->name }}</h3>
															<span><img src="/frontend/images/clock.png" alt="">{{ $post->created_at->diffForHumans() }}</span>
														</div>
                                                    </div>

                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>

												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="/frontend/images/icon8.png" alt=""><span>{{ $post->catgeory->nom }}</span></li>
														<li><img src="/frontend/images/icon9.png" alt=""><span>{{ $post->service_relation->nom }}</span></li>
													</ul>

                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>

												<div class="job_descp">
													<h3>{{ $post->title }}</h3>
													<ul class="job-dt">
														<li><a>{{ $post->date->format('d/m/Y') }}</a></li>
														Price: <li><span>{{ $post->price }}</span></li>
													</ul>
                                                    <p>{{ $post->description }}</p>
                                                    Skills:
													<ul class="skill-tags">
														<li><a href="#" title="">{{ $post->skills }}</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul style="justify-content:space-around!important;" class="like-com">

                                                    <li  ><a href="#" style="margin-top: 20px;" title="" class="com"><img src="/frontend/images/com.png" alt=""> Proposition(s) {{$post->propositions->count() }}</a></li>
													</ul>

												</div>
											</div><!--post-bar end-->



											<div class="comment-section">
												<div class="plus-ic">
													<i class="la la-plus"></i>
												</div>
												<div class="comment-sec">
                                                    @foreach($post->propositions as $propositions)
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
                                                                    <a href="{{ route('client.jobeur_profile', $propositions->jobeur->id) }}">

                                                                        <img src="{{ url('images/profil', $propositions->jobeur->profil_img ) }}" alt="jobeur avatar" width="50" height="50">
                                                                    </a>
																</div>
																<div class="comment">
																	<h3>{{ $propositions->jobeur->name }}</h3>
                                                                <span>
                                                                    <img src="/frontend/images/clock.png" alt="">
                                                                    {{ $propositions->created_at->diffForHumans() }}
                                                                </span>
                                                                    <p>{{ $propositions->proposition }} </p>

                                                                    @if($propositions->etat == false)
                                                                        <form method="post" action="{{ route('client.proposition.change_state') }}">
                                                                            @csrf

                                                                            <input type="hidden" name="id" value="{{ $propositions->id }}">
                                                                            <input type="hidden" name="etat" value="1">

                                                                            <button class="btn btn-sm btn-success pull-right" type="submit" value="post">Accepter</button>
                                                                        </form>
                                                                        @else
                                                                        <form method="post" action="{{ route('client.proposition.change_state') }}">
                                                                            @csrf

                                                                            <input type="hidden" name="id" value="{{ $propositions->id }}">
                                                                            <input type="hidden" name="etat" value="0">

                                                                            <button class="btn btn-sm btn-danger pull-right" type="submit" value="post">Refusé</button>
                                                                        </form>
                                                                    @endif
																</div>
															</div><!--comment-list end-->
														</li>
                                                    </ul>
                                                    @endforeach
												</div><!--comment-sec end-->

											</div><!--comment-section end-->
                                        </div><!--posty end-->

                                        @endforeach


									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->


	</div><!--theme-layout end-->



    <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/popper.js"></script>
    <script type="text/javascript" src="/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/frontend/js/flatpickr.min.js"></script>
    <script type="text/javascript" src="/frontend/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="/frontend/js/script.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:52 GMT -->
</html>
