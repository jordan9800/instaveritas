@extends('layouts.userapp')

@section('content')

 

        <!--Studio Area-->
        <section class="studio-area-2 section-padding-2 dark-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="custom-hero-title">
                            <h2>Our Studio</h2>
                        </div>
                        <div class="custom-hero-breadcrumb">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Studios</a></li>
                                <li>{{ $studio->studio_name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="studio-slider owl-carousel">
                            <div class="single-studio-slide">
                                <img src="{{ asset('app/users/images/studios/'.$studio->profile_photo) }}" alt="">
                                <!-- <div class="studio-slide-caption">
                                    Live Recording Scene
                                </div> -->
                            </div>
                            @if(!empty($studio->extra_photos))
	                            @foreach(json_decode($studio->extra_photos) as $image)
		                            <div class="single-studio-slide">
		                                <img src="{{ asset('app/users/images/studios/'.$image) }}" alt="">
		                                <!-- <div class="studio-slide-caption">
		                                    Extream Level of Mixing
		                                </div> -->
		                            </div>
	                            @endforeach
                            @endif
                            <!-- <div class="single-studio-slide">
                                <img src="{{ asset('app/users/images/studio-gallery-3.jpg') }}" alt="">
                                <div class="studio-slide-caption">
                                    Expert engineer on Albam
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="studio-text">
                        	<span style="cs">{{ $studio->studiotype_name }}</span>
                            <h1 style="color: #cccccc;">{{ $studio->studio_name }}</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    	<div class="studio-text">
                            <h4 style="color: #b3b3b3;">About this studio</h4>
                        </div>
                        <div class="studio-text">
                            <p>{{ $studio->studio_details }}</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="studio-text">
                            <h4 style="color: #b3b3b3;">Details to keep in mind</h4>
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                    	<div class="studio-text">
                            <h4 style="color: #b3b3b3;">Details to keep in mind</h4>
                        </div>
                        <div class="studio-text">

                        	@if($studio->max_occp  == 1)
                            <p>Minimum Booking - {{ $studio->min_booking }} hr</p>
                            @else 
                            <p>Minimum Booking - {{ $studio->min_booking }} hrs</p>
                            @endif

                            <p>Maximum Occupancy - {{ $studio->max_occp }} (P)</p>
                            <p>Pricing Per Hour - ₹ {{ $studio->pricing_per_hour }}</p>
                            <p>Opening Time - {{ $studio->studio_opening }} am</p>
                            <p>Closing Time - {{ $studio->studio_closing }} pm</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    	<div class="studio-text">
                            <h4 style="color: #b3b3b3;">Studio Amenities</h4>
                        </div>
                        <div class="studio-text">
                            <p>{{ $studio->studio_amenities }}</p>
                        </div>
                    </div>

                    @if(!empty($studio->studio_equipments))
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.7s">
                    	<div class="studio-text">
                            <h4 style="color: #b3b3b3;">Studio Equipments</h4>
                        </div>
                        <div class="studio-text">
                            <p>{{ $studio->studio_equipments }}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($studio->studio_rules))
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    	<div class="studio-text">
                            <h4 style="color: #b3b3b3;">Studio Amenities</h4>
                        </div>
                        <div class="studio-text">
                            <p>{{ $studio->studio_amenities }}</p>
                        </div>
                    </div>
                    @endif

                    
                   
                </div>
            </div>
        </section><!--/Studio Area-->

        <!--Portfolio Section -->
        <section class="studio-booking section-padding dark-bg">
        
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="section-title">
                            <h2 style="color: white;">Book Studio</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="account-form">
                            <form id="bookstudioform" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="text" id="datepicker" name="date" placeholder="Select Date" required>
                                 <input type="text" class="timepicker" id="startTime" name="start_time" placeholder="Start Time" required> 
                                 <input type="text" class="timepicker" name="end_time" placeholder="End Time" required>  
                                 <input type="hidden" name="studio_id" value="{{ $studio->studio_id}}">          
                                <span id="form_edit_output"></span>
                                <button type="submit" class="bttn-mid btn-fill">Book</button>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section><!--/Portfolio Section-->

        <!--Testimonial Area-->
        <section class="studio-area-2 section-padding-2 dark-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testimonials owl-carousel">
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


@section('style')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('extra-js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js">
          </script>
<script>

	$(document).ready(function(){

		$("#datepicker").datepicker({ minDate: 0 });
        $('.timepicker').timepicker();


        $("form#bookstudioform").on('submit', function(event){
            event.preventDefault();
             event.stopImmediatePropagation();

            //var formdata = $("#editquestionform").serialize();
            var formdata = new FormData(this);

            $.ajax({
                url: "{{ route('bookStudio') }}",
                method: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:formdata,
                dataType:"json",
                success:function(data)
                {
                   if(data.error.length > 0)
                   {
                      var error_html = '';
                      for(var count = 0; count<data.error.length; count++)
                      {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                      }
                      $('#form_edit_output').html(error_html);
                   }
                   else
                   {
                     //$('#form_output').html(data).success;
                     toastr.success(data.success);
                     
                      location.reload();
                   }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

	});
	
</script>
@endsection