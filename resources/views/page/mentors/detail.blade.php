@extends('layouts.master')

@section('title', $mentor->mentros_name ?? 'Mentor Detail')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $mentor->mentros_name ?? 'Mentor Detail' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('mentors') }}">Mentors</a></li>
                            <li>{{ $mentor->mentros_name ?? 'Detail' }}</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="shape-1"><img src="{{ asset('assets/images/shape/1.svg') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('assets/images/shape/2.svg') }}" alt=""></div>
        <div class="shape-3"><img src="{{ asset('assets/images/shape/3.svg') }}" alt=""></div>
        <div class="shape-4"><img src="{{ asset('assets/images/shape/4.svg') }}" alt=""></div>
    </section>
    <!-- end page-title -->

    <!-- .team-pg-area start -->
    <div class="team-pg-area section-padding">
        <div class="container">
            <div class="team-single-wrap">
                <div class="team-info-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="team-info-img">
                                @if($mentor->gambar)
                                    <img src="{{ asset('storage/' . $mentor->gambar) }}" alt="{{ $mentor->mentros_name }}">
                                @else
                                    <img src="{{ asset('assets/images/at-single.jpg') }}" alt="Default Mentor Image">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-info-text">
                                <h2>{{ $mentor->mentros_name }}</h2>
                                <ul>
                                    @if($mentor->address)<li>Address:<span>{!! $mentor->address !!}</span></li>@endif
                                    @if($mentor->phone)<li>Phone:<span>{{ $mentor->phone }}</span></li>@endif
                                    @if($mentor->email)<li>Email:<span>{{ $mentor->email }}</span></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-exprience-area team-widget">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="exprience-wrap">
                                <h2>Description</h2>
                                <div>{!! $mentor->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .team-pg-area end -->

    <!-- start wpo-subscribe-section -->
    <section class="wpo-subscribe-section section-padding pt-0">
        <div class="container">
            <div class="wpo-subscribe-wrap">
                <div class="subscribe-text">
                    <h3>Subscribe to our newsletter to receive
                        latest news on our services.</h3>
                </div>
                <div class="subscribe-form">
                    <form action="#">
                        <div class="input-field">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end subscribe-section -->
@endsection
