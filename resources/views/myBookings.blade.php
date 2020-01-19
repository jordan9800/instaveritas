@extends('layouts.userapp')

@section('content')

<!--Custom Banner Area-->
        <section class="custom-hero dark-overlay section-padding" style="background: url('app/users/images/custom-banner.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="custom-hero-title">
                            <h2>My Bookings</h2>
                        </div>
                        <div class="custom-hero-breadcrumb">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>My Bookings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Custom Banner Area-->

        <!--Radio Programs-->
        <section class="radio-programs section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 centered wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title cl-off-white">
                            <h2>Bookings</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                	@foreach($bookings as $booking)
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-radio-program mb-30">
                            <img src="{{ asset('app/users/images/studios/'.$booking->profile_photo) }}" alt="">
                            <h3><a href="#">{{ $booking->studio_name }}</a></h3>
                            <div class="program-meta">
                            	<span>{{ $booking->booking_date }}</span>
                                <span>{{ $booking->start_time }}</span>
                                <span>{{ $booking->end_time }}</span>
                                <span>₹ {{ $booking->total_price }}</span>
                                <span><a href="{{ route('studioDetails', ['name' => $booking->studio_name, 'id' => $booking->studio_id]) }}">Studio Details</a></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </section><!--/Radio Programs-->

        



@endsection