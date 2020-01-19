@extends('layouts.userapp')

@section('content')

        <!--Signup Area-->
        <section class="login-area dark-overlay section-padding-2" style="background: url('app/users/images/signup-bg.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="account-form">
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('name') }}
                                    </div>
                                @endif

                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                placeholder="Email" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('email') }}
                                    </div>
                                @endif

                                <input id="phone" type="number" name="phone" value="{{ old('phone') }}"
                                placeholder="Phone Number" required autocomplete="phone">

                                @if ($errors->has('phone'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('phone') }}
                                    </div>
                                @endif
                                
                                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('password') }}
                                    </div>
                                @endif

                                <input id="password-confirm" type="password" placeholder="Confirm Pasword" name="password_confirmation" required autocomplete="new-password">
                                
                                <button type="submit" class="bttn-mid btn-fill">Register now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Signup Area-->

@endsection