
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:52 GMT -->
<head>
<meta charset="UTF-8">
<title>edit client jobs</title>
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

                                        <div class="post-project">
                                            <h3>Edit a job</h3>
                                            <div class="post-project-fields">
                                                <div>

                                                    @if ($message = Session::get('success'))
                                                    <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @endif

                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div>{{$error}}</div>
                                                        @endforeach
                                                    <br>
                                                    @endif
                                                </div>
                                                <form method="post" action="{{ route('client.jobs.update', $post->id) }}">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <input type="text" name="title" placeholder="Title" value="{{ $post->title }}" required>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="inp-field">
                                                                <select class="categories" name="categorie" required>
                                                                    <option disabled selected>Category</option>
                                                                    @foreach ($categories as $categorie)
                                                                        @if($categorie->id == $post->categorie)
                                                                            <option selected value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                                                        @else
                                                                            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                        </div>



                                                        <div class="col-lg-12">
                                                            <div class="inp-field">
                                                                <select class="services" name="service" required>
                                                                    @foreach ($services as $service)
                                                                        @if($service->id == $post->service)
                                                                            <option selected value="{{ $service->id }}">{{ $service->nom }}</option>
                                                                        @else
                                                                            <option value="{{ $service->id }}">{{ $service->nom }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input type="text" name="skills" placeholder="Skills" value="{{ $post->skills }}" required>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="price-br">
                                                                <input type="text" name="price" placeholder="Price" value="{{ $post->price }}" required>
                                                                <i class="la la-dollar"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="date" placeholder="Date" value="{{ $post->date->format('d/m/Y') }}" required>
                                                        {{--
                                                            <div class="inp-field">
                                                                <select>
                                                                    <option>Full Time</option>
                                                                    <option>Half time</option>
                                                                </select>
                                                            </div> --}}
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <textarea name="description" placeholder="Description" required>{{ $post->description }}</textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <ul>
                                                                <li><button class="active" type="submit" value="post">Update</button></li>
                                                                <li><a href="#" title="">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--post-project-fields end-->
                                            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                                        </div><!--post-project end-->

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



<script>
    $(document).on('change','.categories',function(){
        console.log("yeees ! , its change");

        var categorie_id=$(this).val();
        console.log('categorie_id', categorie_id);

        var op=" ";

        $.ajax({
            type:'get',
            url:'{!! URL::to('getServices') !!}',
            data:{'id':categorie_id},
            success: handelResponse,
            error: handelError
        });


        function handelResponse(data){
            console.log(data);
            //console.log(data.length);
            op+='<option value="0" selected disabled>Services ..</option>';
            for(var i=0;i<data.length;i++){
                op+='<option value="'+data[i].id+'">'+data[i].nom+'</option>';
            }

            $(".services").html(" ");
            $(".services").append(op);
        }

        function handelError(){

        }
    });

</script>
</body>

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 16:51:52 GMT -->
</html>
