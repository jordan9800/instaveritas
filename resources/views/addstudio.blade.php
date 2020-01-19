@extends('layouts.userapp')

@section('content')

<!--Custom Banner Area-->
        <section class="custom-hero dark-overlay section-padding" 
        style="background: url('app/users/images/custom-banner.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="custom-hero-title">
                            <h2>Add A Studio</h2>
                        </div>
                        <div class="custom-hero-breadcrumb">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Studio</a></li>
                                <li>Add Studio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Custom Banner Area-->

        <!--Before Booking Studio-->
        <section class="before-booking-studio section-padding dark-overlay" style="background: url('app/users/images/hero-bg-3.jpg') no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centered">
                        <h2>Add your studio, rent it out and earn money.</h2>
                        <!-- <a href="studio.html" class="bttn-mid btn-fill">Studio</a> -->
                    </div>
                </div>
            </div>
        </section><!--/Before Booking Studio-->

        <!--Studio Booking Form-->
        <section class="studio-booking section-padding dark-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-off-white">
                            <h2>Add Now</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="account-form">
                            <form method="POST" action="{{ route('addstudio.submit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <hr>
                                <h3 style="color:white">Description</h3>
                                <input type="text" name="studio_name" value="{{ old('studio_name') }}" placeholder="Studio Name*" required autofocus>

                                @if ($errors->has('studio_name'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_name') }}
                                    </div>
                                @endif

                                <textarea name="studio_details" required>Enter studio details...*</textarea>

                                @if ($errors->has('studio_details'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_details') }}
                                    </div>
                                @endif

                                <select name="studio_type" required>
                                    <option value="">Select Studio Type</option>
                                    @foreach($types as $type)
                                    	<option value="{{ $type->studiotype_id }}">{{ $type->studiotype_name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('studio_type'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_type') }}
                                    </div>
                                @endif
                                
                                <select name="minimum_booking" required>
                                	<option value="">Select Minimum Booking</option>
                                    <option value="1">1 hr</option>
                                    <option value="2">2 hrs</option>
                                    <option value="3">3 hrs</option>
                                    <option value="4">4 hrs</option>
                                    <option value="5">5 hrs</option>
                                </select>

                                @if ($errors->has('minimum_booking'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('minimum_booking') }}
                                    </div>
                                @endif

                                <select name="maximum_occupancy" required>
                                	<option value="">Select Maximum Occupancy</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">25</option>
                                    <option value="25">25</option>
                                </select>

                                @if ($errors->has('maximum_occupancy'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('maximum_occupancy') }}
                                    </div>
                                @endif

                                <input type="number" name="pricing" value="{{ old('pricing') }}" placeholder="Pricing Per Hour(₹)*" required autofocus>

                                @if ($errors->has('pricing'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('pricing') }}
                                    </div>
                                @endif

                                <input type="file" name="profile_photo" placeholder="Profile Photo(Not to exceed 2MB)*" required autofocus>

                                @if ($errors->has('profile_photo'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('profile_photo') }}
                                    </div>
                                @endif

                                <input type="file" name="extra_photos[]" placeholder="Extra Photos(Image Not to exceed 2MB)">

                                @if ($errors->has('extra_photos'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('extra_photos') }}
                                    </div>
                                @endif

                                <input type="text" name="past_clients" placeholder="Name of past clients if any." autofocus>

                                @if ($errors->has('past_clients'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('past_clients') }}
                                    </div>
                                @endif

                                <input type="text" name="audio_samples" placeholder="URL of any social media platform like spotify." autofocus>

                                @if ($errors->has('audio_samples'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('audio_samples') }}
                                    </div>
                                @endif



                                <hr>
                                <h3 style="color:white">Features</h3>

                                <input type="text" name="studio_amenities" placeholder="Mention amenities provided in your studio.*" value="{{ old('studio_amenities')}}"  required autofocus>

                                @if ($errors->has('studio_amenities'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_amenities') }}
                                    </div>
                                @endif

                                <input type="text" name="studio_equipments" placeholder="Mention equipments provided in your studio." value="{{ old('studio_equipments')}}"  autofocus>

                                @if ($errors->has('studio_euqipments'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_equipments') }}
                                    </div>
                                @endif

                                <input type="text" name="studio_rules" placeholder="Mention rules to follow if any." value="{{ old('studio_rules')}}"  autofocus>

                                @if ($errors->has('studio_rules'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_rules') }}
                                    </div>
                                @endif


                                <hr>
                                <h3 style="color:white">Location</h3>
                                <input type="text" name="studio_address" placeholder="Studio full address.*" value="{{ old('studio_address')}}" required autofocus>

                                @if ($errors->has('studio_address'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_address') }}
                                    </div>
                                @endif

                                <select name="studio_city" required>
                                	<option value="">Select Studio City</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Kolkata">Kolkata</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                </select>

                                @if ($errors->has('studio_city'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_city') }}
                                    </div>
                                @endif

                                <select name="studio_country" required>
                                	<option value="">Select Studio City</option>
                                    <option value="India">India</option>
                                </select>

                                @if ($errors->has('studio_country'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_country') }}
                                    </div>
                                @endif


                                <hr>
                                <h3 style="color:white">Studio Hours</h3>
                                <select name="studio_opening" required>
                                	<option value="">Select Opening Hour</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                </select>

                                @if ($errors->has('studio_opening'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_opening') }}
                                    </div>
                                @endif

                                <select name="studio_closing" required>
                                	<option value="">Select Closing Hour</option>
                                    <option value="5">5:00 pm</option>
                                    <option value="6">6:00 pm</option>
                                    <option value="7">7:00 pm</option>
                                    <option value="8">8:00 pm</option>
                                    <option value="9">9:00 pm</option>
                                    <option value="10">10:00 pm</option>
                                    <option value="11">11:00 pm</option>
                                </select>

                                @if ($errors->has('studio_closing'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('studio_closing') }}
                                    </div>
                                @endif
                                
                                
                                <button type="submit" class="bttn-mid btn-fill">Add Studio</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Studio Booking Form-->

        

        <!--Testimonial Area-->
        <section class="testimonial-area dark-overlay" style="background: url('app/users/images/testimonial-bg.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                        <div class="testimonials owl-carousel wow fadeInUp" data-wow-delay="0.3s">
                            <div class="single-testimonial">
                                <div class="reviewer-thumb">
                                    <img src="{{ asset('app/users/images/reviewer-thumb-1.png') }}" alt="">
                                    <h4>John Linkon</h4>
                                    <p>CEO, Netflix</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cupiditate, deleniti. Repellendus, non. Eaque ab fuga omnis! Sequi voluptas provident nisi accusantium quaerat, eum earum esse doloribus possimus. Quisquam, quidem!</p>
                            </div>
                            <div class="single-testimonial">
                                <div class="reviewer-thumb">
                                    <img src="{{ asset('app/users/images/reviewer-thumb-2.png') }}" alt="">
                                    <h4>Robatson Lee</h4>
                                    <p>CEO, Universal</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cupiditate, deleniti. Repellendus, non. Eaque ab fuga omnis! Sequi voluptas provident nisi accusantium quaerat, eum earum esse doloribus possimus. Quisquam, quidem!</p>
                            </div>
                            <div class="single-testimonial">
                                <div class="reviewer-thumb">
                                    <img src="{{ asset('app/users/images/reviewer-thumb-1.png') }}" alt="">
                                    <h4>Tom Hanks</h4>
                                    <p>Actor</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cupiditate, deleniti. Repellendus, non. Eaque ab fuga omnis! Sequi voluptas provident nisi accusantium quaerat, eum earum esse doloribus possimus. Quisquam, quidem!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Testimonial Area-->

@endsection