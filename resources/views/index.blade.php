@extends('layouts.userapp')

@section('content')

<!-- Hero area -->
        <section class="hero-area-3 dark-overlay" style="background: url('app/users/images/hero-bg-4.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 centered">
                        <div class="static-hero-content">
                            <h3>Raise your asking for any query</h3>
                            <h2>Music is Life</h2>
                            <a href="#" class="bttn-mid btn-fill">Explore us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero area -->

        <!--How It Works-->
        <section class="how-it-works-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-off-white">
                            <h2>How it works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-how-it-works">
                            <h3>Select your time</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eveniet recusandae ratione aliquam</p>
                            <a href="#" class="bttn-small btn-fill">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-how-it-works">
                            <h3>Make payment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eveniet recusandae ratione aliquam</p>
                            <a href="#" class="bttn-small btn-fill">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-how-it-works">
                            <h3>Enjoy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eveniet recusandae ratione aliquam</p>
                            <a href="#" class="bttn-small btn-fill">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/How It Works-->

        


        <!--Radio Jocky-->
        <section class="radio-jocky-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-black2">
                            <h2>Studios That Are Right For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-rj">
                            <img src="{{ asset('app/users/images/rj-1.jpg') }}" alt="">
                            <div class="single-rj-content">
                                <h3>Rehersal Space</h3>
                                <a href="#" class="bttn-small btn-fill">Explore</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-rj">
                            <img src="{{ asset('app/users/images/rj-3.jpg') }}" alt="">
                            <div class="single-rj-content">
                                <h3>Podcast Space</h3>
                                <a href="#" class="bttn-small btn-fill">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-rj">
                            <img src="{{ asset('app/users/images/rj-4.jpg') }}" alt="">
                            <div class="single-rj-content">
                                <h3>Home Studio</h3>
                                <a href="#" class="bttn-small btn-fill">Explore</a>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section><!--/Radio Jocky-->

       
        

        <!--About Area-->
        <section class="about-area section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-content">
                            <div class="section-title cl-black2">
                                <h2>This is who we are</h2>
                            </div>
                            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia eveniet recusandae ratione aliquam minus fugit doloremque deserunt, ex explicabo.</p>
                            <p class="jumbo-block">"Explicabo nemo voluptas quo praesentium pariatur! Alias voluptatem ratione quibusdam, sapiente tenetur."</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="about-asset">
                            <img src="{{ asset('app/users/images/about2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/About Area-->

        <!--App Download Area-->
        <section class="app-download-area">
            <div class="app-download-content-area">
                <div class="app-download-img" style="background: url(app/users/images/app-bg2.jpg) no-repeat"></div>
                <div class="app-download-content wow fadeInRight" data-wow-delay="0.3s">
                    <div class="section-title cl-black2">
                        <h2>Get app</h2>
                    </div>
                    <p class="mb-20">Amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt. Sed est dis ultricies sed. Sed amet, a adiinmoipendisse est vestibulum, non amet quam</p>
                    <p class="mb-20">Tincidunt vel, vestibulum arcu velit, justo aliquam duis sodales senisl nisl amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt. Sed est dis ultricies sed. Sed amet, a adiinmoipendisse est vestibulum, non amet quam Tincidunt vel, vestibulum arcu velit, justo aliquam duis sodales senisl nisl amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt. Sed est dis ultricies sed. Sed amet, a adiinmoipendisse est vestibulum, non amet quam</p>
                    <p class="mb-20">Tincidunt vel, vestibulum arcu velit, justo aliquam duis sodales senisl nisl amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt. Sed est dis ultricies sed. Sed amet, a adiinmoipendisse est vestibulum, non amet quam Tincidunt vel, vestibulum arcu velit, justo aliquam duis sodales senisl nisl amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt. Sed est dis ultricies sed. Sed amet, a adiinmoipendisse est vestibulum, non amet quam</p>
                    <a href="#" class="bttn-mid btn-fill"><i class="fa fa-play"></i>Google Play</a>
                    <a href="#" class="bttn-mid btn-emt"><i class="fa fa-apple"></i>App Store</a>
                </div>
            </div>
        </section><!--/App Download Area-->

        

        <!--Pricing Area-->
        <section class="pricing-area section-padding dark-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-off-white">
                            <h2>Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-table table-responsive table-responsive-sm table-responsive-xs">
                            <table class="table table-dark">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col">Services</th>
                                  <th scope="col">Min Hours</th>
                                  <th scope="col">Hourly Rate</th>
                                  <th scope="col">Studio</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Recording</th>
                                  <td>3</td>
                                  <td>$35</td>
                                  <td>Studio 1</td>
                                </tr>
                                <tr>
                                  <th scope="row">Mixing</th>
                                  <td>4</td>
                                  <td>$45</td>
                                  <td>Studio 3</td>
                                </tr>
                                <tr>
                                  <th scope="row">Audio</th>
                                  <td>1</td>
                                  <td>$55</td>
                                  <td>Studio 2</td>
                                </tr>
                                <tr>
                                  <th scope="row">Remaking</th>
                                  <td>2</td>
                                  <td>$65</td>
                                  <td>Studio 4</td>
                                </tr>
                                <tr>
                                  <th scope="row">Recording</th>
                                  <td>3</td>
                                  <td>$35</td>
                                  <td>Studio 1</td>
                                </tr>
                                <tr>
                                  <th scope="row">Mixing</th>
                                  <td>4</td>
                                  <td>$45</td>
                                  <td>Studio 3</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="centered">
                            <a href="book-studio.html" class="bttn-mid btn-fill">Book Studio</a>    
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Pricing Area-->


        <!--Blog Area-->
        <section class="blog-area section-padding">
            <div class="container">
            	<div class="row justify-content-center">
                    <div class="col-lg-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-black2">
                            <h2>Music Tips</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-blog">
                            <img src="{{ asset('app/users/images/blog-1.jpg') }}" alt="">
                            <div class="blog-single-content">
                                <h2><a href="#">Get ready for Dubb</a></h2>
                                <div class="blog-meta">
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#"><i class="fa fa-calendar"></i> 20.04.19</a>
                                </div>
                                <p>Amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-blog">
                            <img src="{{ asset('app/users/images/blog-2.jpg') }}" alt="">
                            <div class="blog-single-content">
                                <h2><a href="#">Book your Studio</a></h2>
                                <div class="blog-meta">
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#"><i class="fa fa-calendar"></i> 20.04.19</a>
                                </div>
                                <p>Amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-blog mb-0">
                            <img src="{{ asset('app/users/images/blog-3.jpg') }}" alt="">
                            <div class="blog-single-content">
                                <h2><a href="#">Register for Padd</a></h2>
                                <div class="blog-meta">
                                    <a href="#"><i class="fa fa-user"></i> Admin</a>
                                    <a href="#"><i class="fa fa-calendar"></i> 20.04.19</a>
                                </div>
                                <p>Amet nonummy explicabo, purus pulvinar quam, morbi umontes, integer et fusce tincidunt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Blog Area-->

@endsection