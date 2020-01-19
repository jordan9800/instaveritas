<!doctype html>
<html lang="en">
    
<!-- Mirrored from rexbd.net/html/stuzio/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 13:48:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		
		<link rel="shortcut icon" href="{{ asset('app/users/images/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('app/users/images/favicon.ico') }}" type="image/x-icon">
        

        <title>Studio Project</title>
        
        <!-- Bootstrap -->
        <link href="{{ asset('app/users/css/bootstrap.min.css') }}" rel="stylesheet">
		
        <link href="{{ asset('app/users/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app/users/css/magnific-popup.css') }}" rel="stylesheet">

		
        <link href="{{ asset('app/users/css/plyr.css') }}" rel="stylesheet">
        <link href="{{ asset('app/users/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('app/users/css/owl.carousel.min.css') }}" rel="stylesheet">
    
        
        <!-- Main css -->
        <link href="{{ asset('app/users/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        


        @yield('style')
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
    <body>

    	<!-- Preloader -->
        <div class="preloader">
            <img src="{{ asset('app/users/images/preloader.gif') }}" alt="">
        </div> <!-- /Preloader -->

        <!--Header Area-->
        <header class="header-area">
            <nav class="navbar sticky-top navbar-expand-lg main-menu">
                <div class="container">

                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('app/users/images/logo.png') }}" class="d-inline-block align-top" alt=""></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">

                            <div class="search-container">
                                <form action="{{ route('search') }}" method="Post">
                                  {{ csrf_field() }}
                                  <input type="text" id="studio_search" name="query" autocomplete="off" value="{{ request()->input('query')}}" placeholder="Search with studio name or city." />
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                  <div id="studioList"></div>
                                    
                                    
                                </form>
                              </div>

                            <li class="nav-item dropdown">
                                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studios</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    @foreach(App\StudioType::all() as $item)
                                        <a class="dropdown-item" href="{{ route('studioListing', ['type' => $item->studiotype_name]) }}">{{ $item->studiotype_name }}</a>
                                    @endforeach
                                </div>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="studio.html" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activities</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                  <a class="dropdown-item" href="{{ route('addstudio') }}">Add your Studio</a>
                                  @if(Auth::check())
                                    <a class="dropdown-item" href="{{ route('myStudios') }}">My Studios</a>
                                    <a class="dropdown-item" href="{{ route('myBookings') }}">My Booking</a>
                                  @endif
                                </div>
                            </li>
                        </ul>
                        @if(Auth::check())
                            <!-- <div class="menu-btn justify-content-end"><a href="signup.html" class="bttn-small btn-emt">Logout</a></div> -->

                            <div class="menu-btn justify-content-end"><a href="{{ route('logout') }}" class="bttn-small btn-emt">Logout</a></div>
                        @else 
                            <div class="menu-btn justify-content-end"><a href="{{ route('register') }}" class="bttn-small btn-emt">Signup</a></div>
                            <div class="menu-btn justify-content-end"><a href="{{ route('login') }}" class="bttn-small btn-emt">Login</a></div>
                        @endif
                    </div>
                </div>
            </nav>
        </header><!--/Header Area-->

        @yield('content')

        <!--Footer Area-->
        <footer class="footer-area section-padding-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 centered">
                        <div class="footer-content">
                            <img src="{{ asset('app/users/images/logo.png') }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-social wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-soundcloud"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <ul class="wow fadeInUp" data-wow-delay="0.5s">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Engineers</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--/Footer Area-->

			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('app/users/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('app/users/js/jquery-migrate.js') }}"></script>

        <script src="{{ asset('app/users/js/popper.js') }}"></script>
        <script src="{{ asset('app/users/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('app/users/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('app/users/js/scrollUp.min.js') }}"></script>

        <script src="{{ asset('app/users/js/magnific-popup.min.js') }}"></script>
		<script src="{{ asset('app/users/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('app/users/js/isotope.pkgd.min.js') }}"></script>



        <script src="{{ asset('app/users/js/jquery.youtubebackground.js') }}"></script>

        <script src="{{ asset('app/users/js/wow.min.js') }}"></script>
        <script src="{{ asset('app/users/js/script.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script>
          @if(Session::has('success'))
              toastr.success("{{ Session::get('success') }}")
          @endif
          @if(Session::has('error'))
              toastr.error("{{ Session::get('error') }}")
          @endif
          @if(Session::has('info'))
              toastr.info("{{ Session::get('info') }}")
          @endif
          </script>
          


          <script>
            $(document).ready(function(){

              $("#studio_search").keyup(function(){

                
                    var query = $(this).val();

                  var _token = $('input[name = "_token"]').val();


                      $.ajax({
                                url: "{{ route('autocomplete') }}",
                                method: "POST",
                                data: {query:query, _token:_token},
                                dataType: "json",
                                success:function(data)
                                {
                                  
                                  $("#studioList").fadeIn();
                                  $("#studioList").html(data);
                                  
                                }
                            })
            
              });

            });
          </script>

          @yield('extra-js')
    </body>

<!-- Mirrored from rexbd.net/html/stuzio/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 13:51:00 GMT -->
</html>