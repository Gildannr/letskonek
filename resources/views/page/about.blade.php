@extends('layouts.detail')

@section('title', 'About Us')

@section('content')

    @php
        // Assuming the first record is the main About Us content
        $aboutContent = $cmsAbout->firstWhere('id_about_us', 1);
        // Assuming the second record is the Founder's Story
        $founderStory = $cmsAbout->firstWhere('id_about_us', 2);
    @endphp

    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $aboutContent->title ?? 'About Us' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>{{ $aboutContent->sub_title ?? 'About Us' }}</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start of wpo-about-section -->
    @if($aboutContent)
    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="wpo-about-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-img-wrap">
                            <div class="wpo-about-img-right">
                                @if($aboutContent->gambar)
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($aboutContent->gambar) }}" alt="{{ $aboutContent->title }}">
                                @else
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($aboutContent->gambar) }}" alt="About Konek Default Image">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <small>{{ $aboutContent->sub_title ?? 'About Konek' }}</small>
                                <h2>{{ $aboutContent->title ?? 'A New Different Way To Improve Your Skills.' }}
                                    {{-- Shape element kept for styling --}}
                                    <span>
                                        Skills.
                                    </span>
                                </h2>
                            </div>
                            <div>{!! $aboutContent->description !!}</div>
                            {{-- Removed static feature blocks --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- end of wpo-about-section -->

    <!-- start of Founder Story section -->
    @if($founderStory)
    <section class="wpo-courses-section section-padding">
        <div class="container">
            <div class="wpo-about-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <small>{{ $founderStory->sub_title ?? 'Founder Story' }}</small>
                                <h2>{{ $founderStory->title ?? 'Christiani Sagala' }}
                                    {{-- Shape element kept for styling --}}
                                    <span>
                                        <i class="shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206 53" fill="none">
                                                <path d="M152.182 2.58319C107.878 0.889793 54.8748 6.13932 21.2281 18.6943C14.2699 21.4407 7.93951 24.7738 5.70192 28.7128C4.27488 31.2398 5.03121 33.954 7.69121 36.2925C14.8835 42.3911 31.9822 45.4011 46.8006 47.3115C78.3067 51.0179 113.672 51.7406 145.489 48.3204C167.194 46.0009 200.667 39.5923 199.399 28.5709C198.543 20.0621 180.437 14.5729 162.979 11.6178C138.219 7.469 111.131 6.00576 84.5743 5.86862C71.32 5.85789 58.0913 6.85723 45.6675 8.78436C33.512 10.7186 21.2709 13.4317 12.6602 17.5817C11.2246 18.2877 8.62449 17.4553 9.9973 16.6813C20.7486 11.2493 38.0215 7.73493 53.9558 5.76368C77.1194 2.90994 101.75 3.75426 125.339 5.14356C158.167 7.2615 207.554 13.5139 204.928 30.7413C203.629 36.0898 194.762 40.5057 184.681 43.5503C156.563 51.768 119.114 53.6844 85.6331 52.5265C65.1694 51.7477 44.4831 50.1855 25.9972 46.2442C11.4129 43.1186 -1.0337 37.8297 0.0679738 30.5063C2.14003 19.9035 31.4913 12.0006 52.6201 7.98775C71.2971 4.45904 91.3384 2.2302 111.674 1.24636C125.228 0.595237 138.962 0.539188 152.536 1.15931C153.475 1.20224 154.154 1.55523 154.051 1.94876C153.951 2.33872 153.115 2.62135 152.182 2.58319Z" />
                                            </svg>
                                        </i>
                                    </span>
                                </h2>
                            </div>
                            <div>{!! $founderStory->description !!}</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-img-wrap">
                            <div class="wpo-about-img-right">
                                @if($founderStory->gambar)
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($founderStory->gambar) }}" alt="{{ $founderStory->title }}" style="border-radius: 20px;">
                                @else
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($founderStory->gambar) }}" alt="Founder Story Default Image" style="border-radius: 20px;">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- end of Founder Story section -->

    <!-- start wpo-Team-section -->
    @if($teams->isNotEmpty())
    <section class="wpo-team-section section-padding">
        <div class="container">
            <div class="wpo-section-title-s2">
                <small>Our Professionals</small>
                <h2>Meet our
                    <span>
                        Team {{-- Or Teachers if preferred --}}
                    </span>
                </h2>
            </div>
            <div class="wpo-team-wrap">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-box">
                                        @if($team->gambar)
                                            <img src="https://letskonek.satuvisitech.com/images/post/{{ ($team->gambar) }}" alt="{{ $team->title }}">
                                        @else
                                            <img src="https://letskonek.satuvisitech.com/images/post/{{ ($team->gambar) }}"> {{-- Default image --}}
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    {{-- Link to TEAM detail route --}}
                                    @if($team->slug)
                                        <h2><a href="{{ route('team.detail', $team->slug) }}">{{ $team->title }}</a></h2>
                                    @else
                                        <h2>{{ $team->title }}</h2>
                                    @endif
                                    {{-- Use sub_title from Team model --}}
                                    <span>{{ $team->sub_title ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- end Team-section -->
@endsection
