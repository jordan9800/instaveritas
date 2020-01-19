@extends('layouts.userapp')

@section('content')

<!--Custom Banner Area-->
        <section class="custom-hero dark-overlay section-padding" style="background: url('app/users/images/custom-banner.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="custom-hero-title">
                            <h2>Our Studio</h2>
                        </div>
                        <div class="custom-hero-breadcrumb">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Studios</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Custom Banner Area-->

        <!--Take a Tour-->
        <section class="take-a-tour section-padding darker-overlay section-padding" style="background: url('app/users/images/take-a-tour.jpg') no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title">
                            <h2>Take a tour</h2>
                        </div>
                    </div>
                </div>

                @if(!empty($studios))
                	@foreach($studios as $key => $studio)
                		@if($key == 0)
                			<div class="row justify-content-end">
			                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
			                        <div class="single-take-a-tour">
			                            <img src="{{ asset('app/users/images/studios/'. $studio->profile_photo) }}" alt="">
			                            <h3>{{ $studio->studio_name }}</h3>
			                            <p>{{ $studio->studio_details }}</p>
			                            <ul>
			                                @if($studio->max_occp  == 1)
				                            <li>Minimum Booking - {{ $studio->min_booking }} hr</li>
				                            @else 
				                            <li>Minimum Booking - {{ $studio->min_booking }} hrs</li>
				                            @endif

				                            <li>Maximum Occupancy - {{ $studio->max_occp }} (P)</li>
				                            <li>Pricing Per Hour - ₹ {{ $studio->pricing_per_hour }}</li>
			                            </ul>
			                            <a href="{{ route('studioDetails', ['name' => $studio->studio_name, 'id' => $studio->studio_id]) }}" class="bttn-mid btn-emt">Details</a>
			                        </div>
			                    </div>
			                </div>
                		@endif
                		@if($key % 2 != 0)
                			<div class="row">
			                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
			                        <div class="single-take-a-tour">
			                            <img src="{{ asset('app/users/images/studios/'. $studio->profile_photo) }}" alt="">
			                            <h3>{{ $studio->studio_name }}</h3>
			                            <p>{{ $studio->studio_details }}</p>
			                            <ul>
			                                @if($studio->max_occp  == 1)
				                            <li>Minimum Booking - {{ $studio->min_booking }} hr</li>
				                            @else 
				                            <li>Minimum Booking - {{ $studio->min_booking }} hrs</li>
				                            @endif

				                            <li>Maximum Occupancy - {{ $studio->max_occp }} (P)</li>
				                            <li>Pricing Per Hour - ₹ {{ $studio->pricing_per_hour }}</li>
			                            </ul>
			                            <a href="{{ route('studioDetails', ['name' => $studio->studio_name, 'id' => $studio->studio_id]) }}" class="bttn-mid btn-emt">Details</a>
			                        </div>
			                    </div>
			                </div>
                		@endif
                		@if($key % 2 != 0 && $key != 0)
                			<div class="row justify-content-end">
			                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
			                        <<div class="single-take-a-tour">
			                            <img src="{{ asset('app/users/images/studios/'. $studio->profile_photo) }}" alt="">
			                            <h3>{{ $studio->studio_name }}</h3>
			                            <p>{{ $studio->studio_details }}</p>
			                            <ul>
			                                @if($studio->max_occp  == 1)
				                            <li>Minimum Booking - {{ $studio->min_booking }} hr</li>
				                            @else 
				                            <li>Minimum Booking - {{ $studio->min_booking }} hrs</li>
				                            @endif

				                            <li>Maximum Occupancy - {{ $studio->max_occp }} (P)</li>
				                            <li>Pricing Per Hour - ₹ {{ $studio->pricing_per_hour }}</li>
			                            </ul>
			                            <a href="{{ route('studioDetails', ['name' => $studio->studio_name, 'id' => $studio->studio_id]) }}" class="bttn-mid btn-emt">Details</a>
			                        </div>
			                    </div>
			                </div>
                		@endif
                	@endforeach
                @else
                	<div class="row">
	                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.7s">
	                        <div class="single-take-a-tour mb-0">
	                            
	                            <h3>Your search did not match any studio.</h3>
	                            
	                            
	                            
	                        </div>
	                    </div>
                	</div>
                @endif
            </div>
        </section><!--/Take a Tour-->

@endsection