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
                                <a href="about" class="theme-btn-s2">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- end of wpo-about-section -->


    <!-- wpo-popular-area start -->
    <div class="wpo-popular-area-s2 section-padding">
        <div class="container">
            <div class="wpo-section-title-s2">
                <small>Creating Impact Together</small>
                <h2>What connections are you looking for?</h2>
            </div>
            <div class="wpo-popular-wrap">
                <div class="row">
                 @foreach ($getProductCategories as $category)
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-popular-single">
                            <div class="wpo-popular-item">
                                <div class="wpo-popular-img">
                                    @if($category->image)
                                        <img src="https://letskonek.satuvisitech.com/images/post/{{ ($category->thumbnail) }}" alt="{{ $category->product_category }}">
                                    @else
                                        <img src="https://letskonek.satuvisitech.com/images/post/{{ ($category->thumbnail) }}" alt="{{ $category->product_category }}">
                                    @endif
                                    <div class="thumb">
                                        <span><img src="https://letskonek.satuvisitech.com/images/post/{{ ($category->icon) }}" alt=""></span>
                                    </div>
                                </div>
                                <div class="wpo-popular-content">
                                    <h2 class="wpo-popular-text-top"><a href="{{ route('product.by-category', $category->slug) }}">{{ $category->product_category }}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
        

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
                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($video->gambar) }}" alt="Video Thumbnail">
                @else
                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($video->gambar) }}" alt="Default Video Thumbnail">
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
                    <h2>News and Insights</h2>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        @forelse ($articles as $article)
                            <div class="col col-lg-4 col-md-6 col-12">
                                <div class="wpo-blog-item">
                                    <div class="wpo-blog-img">
                                        @if($article->gambar)
                                            <img src="https://letskonek.satuvisitech.com/images/post/{{ ($article->gambar)}}" alt="{{ $article->title }}">
                                        @else
                                            <img src="https://letskonek.satuvisitech.com/images/post/{{ ($article->gambar)}}" alt="letskonek"> 
                                        @endif
                                    </div>
                                    <div class="wpo-blog-content">
                                        <ul>
                                            {{-- Format the date --}}
                                            <li>{{ $article->created ? \Carbon\Carbon::parse($article->created)->format('d F Y') : 'Date N/A' }}</li>
                                        </ul>
                                        <h2>
                                            @if($article->slug)
                                                <a href="{{ route('blog.detail', $article->slug) }}">{{ $article->title }}</a>
                                            @else
                                                {{ $article->title }}
                                            @endif
                                        </h2>
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
