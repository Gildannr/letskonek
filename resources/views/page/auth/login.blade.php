@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    {{-- SweetAlert for login errors --}}
    @if ($errors->has('username'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: @json($errors->first('username'))
                });
            });
        </script>
    @endif
    
    {{-- SweetAlert for login success --}}
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: @json(session('success'))
                });
            });
        </script>
    @endif

    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="wpo-accountWrapper" action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="#"><img src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                                <a class="wpo-accountBtn" href="{{ route('register') }}">
                                    <span class="">Create Account</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/ilustration/ilustration-letskonek-07.png') }}" alt="">
                            </div>
                            <div class="back-home">
                                <a class="wpo-accountBtn" href="{{route ('home') }}">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="wpo-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Login</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input required type="text" id="email" name="email"
                                        placeholder="enter your email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input required class="pwd6" type="password" placeholder="enter your password"
                                            name="password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal6" type="button"><i
                                                    class="fa fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="check-box-wrap">
                                        {{-- <div class="input-box">
                                            <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                            <label for="fruit4">Remember Me</label>
                                        </div> --}}
                                        <div class="forget-btn">
                                            <a href="forgot.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="wpo-accountBtn">Login</button>
                                </div>
                            </div>
                            {{-- <h4 class="or"><span>OR</span></h4>
                            <ul class="wpo-socialLoginBtn">
                                <li><button class="facebook" tabindex="0" type="button"><span><i
                                                class="fa fa-facebook"></i></span></button></li>
                                <li><button class="twitter" tabindex="0" type="button"><span><i
                                                class="fa fa-twitter"></i></span></button></li>
                                <li><button class="linkedin" tabindex="0" type="button"><span><i
                                                class="fa fa-linkedin"></i></span></button></li>
                            </ul> --}}
                            <p class="subText">Don't have an account? <a href="{{ route('register') }}">Create free
                                    account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
