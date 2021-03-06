<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="stylesheet" type="text/css" href="/frontend/css/animate.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/line-awesome.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/line-awesome-font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" type="text/css" href="/frontend/lib/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="/frontend/lib/slick/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
      <link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <style>
         body, html {
         height: 100%;
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         }
         .hero-image {
         background-image:  url("/frontend/images/1.png");
         height: 100%;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         .hero-text {
         text-align: center;
         position: absolute;
         top: 39%;
         left: 50%;
         transform: translate(-50%, -50%);
         font-size:50px;
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <header style="height: 55px;">
            <div class="container">
               <div class="header-data">
                  <div class="logo">
                     <a href="{{ route('home') }}" title=""><img src="/frontend/images/logo.png" alt=""></a>
                  </div>
                  <!--logo end-->
                  <!--<div class="search-bar">
                     <form>
                     	<input type="text" name="search" placeholder="Search...">
                     	<button type="submit"><i class="la la-search"></i></button>
                     </form>
                     </div>--><!--search-bar end-->

                     <nav>
                        <ul style="margin-top: -13px; padding-top: 8px">
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
                              <a href="{{ route('jobeurs.profiles') }}" title="">
                              <span><img src="/frontend/images/icon4.png" alt=""></span>
                              Profiles
                              </a>
                              <ul>
                                 <li><a href="{{ route('jobeurs.profiles') }}" title="">Jobeurs Profiles</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>

                  <!--nav end-->
                  <div class="w3-container">
                     <div class="user-account" style="width: 110px; border-left: 0px solid #dd3e2b;
                        border-right: 0px solid #dd3e2b">
                        <div >
                           <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-success btn-lg" style="margin-top:-98px;padding: 6px 45px"> Login</button>
                           <div id="id01" class="w3-modal">
                              <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px ; margin-top:-32px">
                                 <div class="w3-center">
                                    <br>
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    <div><img src="/frontend/images/img_avatar.png" style="width:30% ; margin-left: 210px " class="w3-circle w3-margin-top">
                                    </div>
                                 </div>
                                 <form class="w3-container" action="/action_page.php">
                                    <div class="w3-section">
                                       <label><b>User E-mail</b></label>
                                       <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter User E-mail" name="usrname e-mail" required>
                                       <label><b>Password</b></label>
                                       <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
                                       <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
                                       <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
                                    </div>
                                 </form>
                                 <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </header>
      </div>
      <div class="hero-image">
         <div class="container">
            <div class="hero-text">
               <h1 style="color:#e44d3a">Offer <strong style="color:white">&amp;</strong> Find</h1>
               </br>
               <p style="font-size:27px;color:white"><b><span style="color:#e44d3a">services</span> and <span style="color:#e44d3a">jobs</span> easelly just on one clic</b></p>
                <a href="{{ route('jobeur.login') }}" class="btn btn-primary btn-lg">Register As Jobeur</a>
                <a href="{{ route('client.login') }}" class="btn btn-primary btn-lg">Register As Client</a>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
      <script type="text/javascript" src="/frontend/js/popper.js"></script>
      <script type="text/javascript" src="/frontend/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/frontend/js/jquery.mCustomScrollbar.js"></script>
      <script type="text/javascript" src="/frontend/lib/slick/slick.min.js"></script>
      <script type="text/javascript" src="/frontend/js/scrollbar.js"></script>
      <script type="text/javascript" src="/frontend/js/script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </body>
</html>
