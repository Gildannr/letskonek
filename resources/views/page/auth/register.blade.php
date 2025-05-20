@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="wpo-accountWrapper" action="{{ route('register.post') }}" method="POST">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="#"><img src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                                <a class="wpo-accountBtn" href="{{ route('login') }}">
                                    <span class="">Log in</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/ilustration/ilustration-letskonek-09.png') }}" alt="">
                            </div>
                            <div class="back-home">
                                <a class="wpo-accountBtn" href="{{ route('home') }}">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="wpo-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Signup</h2>
                                <p>Sign into your pages account</p>
                            </div>
                           @if ($errors->has('email_phone'))
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: @json($errors->first('email_phone'))
                                        });
                                    });
                                </script>
                            @endif





                            <div class="row">
                                <!--<div class="col-lg-12 col-md-12 col-12">-->
                                <!--    <label for="username">Username</label>-->
                                <!--    <input required type="text" id="username" name="username"-->
                                <!--        placeholder="Your Username here..">-->
                                <!--</div>-->
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="fullname">Full Name</label>
                                    <input required type="text" id="fullname" name="fullname"
                                        placeholder="Your Full Name here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="email">Email</label>
                                    <input required type="email" id="email" name="email"
                                        placeholder="Your Email here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="phone">Number WhatsApp</label>
                                    <input required type="text" id="phone" name="phone"
                                        placeholder="Your No. WA here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input required class="pwd2" type="password" placeholder="Your password here.."
                                            id="password" name="password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal3" type="button"><i
                                                    class="fa fa-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input required class="pwd3" type="password" placeholder="Your password here.."
                                            id="confirm_password" name="confirm_password" onkeyup="validatePassword()">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal2" type="button"><i
                                                    class="fa fa-eye"></i></button>
                                        </span>
                                        <span id="password_message"></span>
                                    </div>
                                </div>

                                <script>
                                    function validatePassword() {
                                        var password = document.getElementById("password").value;
                                        var confirm_password = document.getElementById("confirm_password").value;
                                        var message = document.getElementById("password_message");

                                        if (password != confirm_password) {
                                            message.style.color = 'red';
                                            message.innerHTML = 'Passwords do not match';
                                            document.getElementById('button-submit').disabled = true;
                                            return false;
                                        } else {
                                            message.style.color = 'green';
                                            message.innerHTML = 'Passwords match';
                                            document.getElementById('button-submit').disabled = false;
                                            return true;
                                        }
                                    }
                                </script>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" id="button-submit" class="wpo-accountBtn">Signup</button>
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
                            <p class="subText">have an account? <a href="{{ route('login') }}">Login Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
