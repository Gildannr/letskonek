@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @foreach ($cmsHome as $item)
        @if ($item->urutan == 1)
            <!-- start of hero -->
            <section class="static-hero-s3">
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container-fluid">
                        <div class="hero-content">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Personalized Navigation for Career and Study
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>When the world offers you robots, we bring you real human connections. Let's KONEK together! Advance your career and studies, and create a real impact!</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="student-pic">
                                <!-- <img src="assets/images/slider/banner1.png" alt=""> -->
                                <img src="assets/images/ilustration/ilustration-letskonek-02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- end of hero slider -->
    @endforeach

    <!-- start of wpo-about-section -->
    <section class="wpo-about-section-s3 section-padding">
            <div class="container">
                <div class="wpo-about-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-img">
                                <!-- <img src="assets/images/about/1.png" alt=""> -->
                                <img src="assets/images/ilustration/ilustration-letskonek-07.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-text">
                                <div class="wpo-section-title">
                                    <small>About KONEK!</small>
                                    <h2>Welcome to KONEK!
                                    </h2>
                                </div>
                                <p>In today's era, where AI and robots provide vast amounts of data and automation, the significance of real human connections becomes even more crucial. At KONEK, we believe that personal interactions are indispensable for advancing your career and education. While technology offers tools and information, it's the human touch that adds relevance and context, providing invaluable insights from real-life experiences.
                                </p>
                                <p>At KONEK, we bridge the gap between technology and human interaction by connecting you with the relevant people who can offer the support and insights you need. We're dedicated to helping you thrive by leveraging the power of real human connections. 
                                </p>
                                <a href="about.html" class="theme-btn-s2">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- end of wpo-about-section -->

    <!-- start of wpo-courses-section -->
    {{-- <section class="wpo-courses-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title-s2">
                        <small>Our Courses</small>
                        <h2>Explore
                            <span>
                                Courses
                                <i class="shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206 53" fill="none">
                                        <path
                                            d="M152.182 2.58319C107.878 0.889793 54.8748 6.13932 21.2281 18.6943C14.2699 21.4407 7.93951 24.7738 5.70192 28.7128C4.27488 31.2398 5.03121 33.954 7.69121 36.2925C14.8835 42.3911 31.9822 45.4011 46.8006 47.3115C78.3067 51.0179 113.672 51.7406 145.489 48.3204C167.194 46.0009 200.667 39.5923 199.399 28.5709C198.543 20.0621 180.437 14.5729 162.979 11.6178C138.219 7.469 111.131 6.00576 84.5743 5.86862C71.32 5.85789 58.0913 6.85723 45.6675 8.78436C33.512 10.7186 21.2709 13.4317 12.6602 17.5817C11.2246 18.2877 8.62449 17.4553 9.9973 16.6813C20.7486 11.2493 38.0215 7.73493 53.9558 5.76368C77.1194 2.90994 101.75 3.75426 125.339 5.14356C158.167 7.2615 207.554 13.5139 204.928 30.7413C203.629 36.0898 194.762 40.5057 184.681 43.5503C156.563 51.768 119.114 53.6844 85.6331 52.5265C65.1694 51.7477 44.4831 50.1855 25.9972 46.2442C11.4129 43.1186 -1.0337 37.8297 0.0679738 30.5063C2.14003 19.9035 31.4913 12.0006 52.6201 7.98775C71.2971 4.45904 91.3384 2.2302 111.674 1.24636C125.228 0.595237 138.962 0.539188 152.536 1.15931C153.475 1.20224 154.154 1.55523 154.051 1.94876C153.951 2.33872 153.115 2.62135 152.182 2.58319Z" />
                                    </svg>
                                </i>
                            </span>
                            By Category
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row-grid wpo-courses-wrap wpo-courses-slider owl-carousel">
                <div class="grid s1">
                    <div class="wpo-courses-item">
                        <div class="wpo-courses-text">
                            <div class="courses-icon">
                                <i class="fi flaticon-user-experience"></i>
                            </div>
                            <h2><a href="course-single.html">UI/UX Design</a></h2>
                            <p>We are providing you the best UI/UX design guideline. That help you be professional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid s2">
                    <div class="wpo-courses-item">
                        <div class="wpo-courses-text">
                            <div class="courses-icon">
                                <i class="fi flaticon-megaphone"></i>
                            </div>
                            <h2><a href="course-single.html">Digital Marketing</a></h2>
                            <p>We are providing you the best Digital Marketing guideline. That help you be
                                professional. </p>
                        </div>
                    </div>
                </div>
                <div class="grid s3">
                    <div class="wpo-courses-item">
                        <div class="wpo-courses-text">
                            <div class="courses-icon">
                                <i class="fi flaticon-code"></i>
                            </div>
                            <h2><a href="course-single.html">Development</a></h2>
                            <p>We are providing you the best Development guideline. That help you be professional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid s4">
                    <div class="wpo-courses-item">
                        <div class="wpo-courses-text">
                            <div class="courses-icon">
                                <i class="fi flaticon-knowledge"></i>
                            </div>
                            <h2><a href="course-single.html">Self Improvement</a></h2>
                            <p>We are providing you the best Self Improvement guideline. That help you be
                                professional. </p>
                        </div>
                    </div>
                </div>
                <div class="grid s5">
                    <div class="wpo-courses-item">
                        <div class="wpo-courses-text">
                            <div class="courses-icon">
                                <i class="fi flaticon-video-lesson"></i>
                            </div>
                            <h2><a href="course-single.html">Video Editing</a></h2>
                            <p>We are providing you the best Video Editing guideline. That help you be professional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1"><img src="assets/images/shape/1.svg" alt=""></div>
        <div class="shape-2"><img src="assets/images/shape/2.svg" alt=""></div>
        <div class="shape-3"><img src="assets/images/shape/3.svg" alt=""></div>
        <div class="shape-4"><img src="assets/images/shape/4.svg" alt=""></div>
    </section> --}}
    <!-- end of wpo-courses-section -->

    <!-- wpo-popular-area start -->
    <div class="wpo-popular-area">
        <div class="container">
            <div class="wpo-section-title-s2">
                <small>Category Product</small>
                <h2>Our Category Product
                </h2>
            </div>
            <div class="wpo-popular-wrap">
                <div class="row">

                    @foreach ($getProductCategories as $category)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-popular-single">
                                <div class="wpo-popular-item">
                                    <div class="wpo-popular-img">
                                        @if($category->image)
                                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->product_category }}">
                                        @else
                                            <img src="assets/images/popular/img-1.jpg" alt="{{ $category->product_category }}">
                                        @endif
                                        {{-- <div class="thumb">
                                    <span>$80</span>
                                </div> --}}
                                    </div>
                                    <div class="wpo-popular-content">
                                        <div style="display: flex; justify-content: center;" class="wpo-popular-text-top">
                                            <ul>
                                                <li><a style="text-align: center;"
                                                        href="{{ route('product.by-category', $category->slug) }}">{{ $category->product_category }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <h2><a href="course-single.html">Learn WordPress & Elementor for Beginners</a>
                                </h2> --}}

                                        {{-- <div class="wpo-popular-text-bottom">
                                    <ul>
                                        <li><i class="fi flaticon-reading-book"></i> 245 Students</li>
                                        <li><i class="fi flaticon-agenda"></i> 25 Lesson</li>
                                    </ul>
                                </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="more-btn text-center">
            <a href="course.html" class="theme-btn-s2">View All Courses</a>
        </div> --}}
        </div>
    </div>
    <!-- wpo-popular-area end -->

    <!-- start of features -->
    <section class="wpo-features-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title-s2">
                        <h2>Why Real Human Connections Matter</h2>
                    </div>
                </div>
            </div>
            <div class="features-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="feature-item-wrap">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="fi flaticon-user"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Personalized Support</a></h2>
                                    <p>Engaging with industry experts, alumni, and peers offers tailored guidance specific to your needs, helping you make informed decisions about your career and studies.</p>
                                </div>
                            </div>
                            <div class="feature-item-hidden">
                                <div class="icon">
                                    
                                    <i class="fi flaticon-user"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Personalized Support</a></h2>
                                    <p>Engaging with industry experts, alumni, and peers offers tailored guidance specific to your needs, helping you make informed decisions about your career and studies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="feature-item-wrap active">
                            <div class="feature-item">
                                <div class="icon">
                                <i class="fi flaticon-e-learning"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Relevant Information</a></h2>
                                    <p>Human connections provide insider knowledge and practical advice that goes beyond generic data, helping you navigate competitive job markets and academic programs.</p>
                                </div>
                            </div>
                            <div class="feature-item-hidden">
                                <div class="icon">
                                <i class="fi flaticon-e-learning"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Relevant Information</a></h2>
                                    <p>Human connections provide insider knowledge and practical advice that goes beyond generic data, helping you navigate competitive job markets and academic programs. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="feature-item-wrap">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="fi flaticon-team"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Networking Opportunities</a></h2>
                                    <p>Building a network is crucial for career advancement, especially in competitive fields where information is scarce. </p>
                                </div>
                            </div>
                            <div class="feature-item-hidden">
                                <div class="icon">
                                    <i class="fi flaticon-team"></i>
                                </div>
                                <div class="feature-text">
                                    <h2><a href="course.html">Networking Opportunities</a></h2>
                                    <p>Building a network is crucial for career advancement, especially in competitive fields where information is scarce. Effective networking opens doors to new opportunities, mentorship, and professional growth. For students, connecting with current students and alumni of prestigious programs, such as MBA programs, is key to understanding what it takes to succeed and gain admission.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of features slider -->

     <!-- start wpo-choose-section -->
     @if($video)
     <section class="wpo-choose-section-s2">
        <div class="container">
            <div class="right-img">
                {{-- Use dynamic image from Video model, fallback to default --}}
                @if($video->gambar)
                    <img src="{{ asset('storage/' . $video->gambar) }}" alt="Video Thumbnail">
                @else
                    <img src="{{ asset('assets/images/ilustration/ilustration-letskonek-13.jpg') }}" alt="Default Video Thumbnail">
                @endif
                
                {{-- Use dynamic video URL from Video model --}}
                {{-- WARNING: Assumes $video->video contains the URL, not a title --}}
                @if($video->video)
                    <a href="{{ $video->video }}" class="video-btn" data-type="iframe">
                        <i class="fi flaticon-play-1"></i>
                    </a>
                @endif
            </div>
        </div>
    </section>
    @endif
    <!-- end wpo-choose-section -->

    <!-- start wpo-faq-section -->
    <section class="wpo-popular-area-s2 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="wpo-section-title">
                            <h2>Why Choose Us?</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2">
                        <div class="wpo-faq-section">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="wpo-benefits-item">
                                        @if($faqs->isNotEmpty())
                                            <div class="accordion" id="accordionExample">
                                                @foreach($faqs as $index => $faq)
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header" id="heading{{ $faq->id_faq }}">
                                                            <button class="accordion-button fw-bold {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id_faq }}"
                                                                aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id_faq }}">
                                                                {{ $faq->urutan ?? ($index + 1) }}. {{ $faq->title }}
                                                            </button>
                                                        </h3>
                                                        <div id="collapse{{ $faq->id_faq }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                            aria-labelledby="heading{{ $faq->id_faq }}" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                {!! $faq->description !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <p class="text-center">No FAQs found.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end faq-section -->

    <!-- start wpo-blog-section -->
    <section class="wpo-blog-section section-padding" id="blog">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <small>Blog</small>
                    <h2>Let's KONEK together!</h2>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        @forelse ($articles as $article)
                            <div class="col col-lg-4 col-md-6 col-12">
                                <div class="wpo-blog-item">
                                    <div class="wpo-blog-img">
                                        @if($article->gambar)
                                            <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->title }}">
                                        @else
                                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Default Blog Image"> {{-- Default image --}}
                                        @endif
                                    </div>
                                    <div class="wpo-blog-content">
                                        <ul>
                                            {{-- Format the date --}}
                                            <li>{{ $article->created ? \Carbon\Carbon::parse($article->created)->format('d F Y') : 'Date N/A' }}</li>
                                        </ul>
                                        <h2>
                                            @if($article->slug)
                                                <a >{{ $article->title }}</a>
                                            @else
                                                {{ $article->title }}
                                            @endif
                                        </h2>
                                        @if($article->slug)
                                            <a  class="more">See More</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>No recent blog posts found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-section -->
    <!-- end subscribe-section -->
@endsection
