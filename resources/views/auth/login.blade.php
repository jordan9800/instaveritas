@extends('layouts.userapp')

@section('content')

<!--Custom Banner Area-->
        <section class="custom-hero dark-overlay section-padding" style="background: url('app/users/images/custom-banner.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 centered">
                        <div class="custom-hero-title">
                            <h2>Login your Account</h2>
                        </div>
                        <div class="custom-hero-breadcrumb">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Custom Banner Area-->

         <!--Login Area-->
        <section class="login-area dark-overlay section-padding-2" style="background: url('app/users/images/signup-bg.jpg') no-repeat fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="account-form">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <input type="email" placeholder="Email" name="email" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('email') }}
                                    </div>
                                @endif

                                <input type="password" name="password" placeholder="Password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <div class="alert alert-danger alert-dismissible userNameError" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       {{ $errors->first('password') }}
                                    </div>
                                @endif  

                                <button type="submit" class="bttn-mid btn-fill">Account Login</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Login Area-->


@endsection