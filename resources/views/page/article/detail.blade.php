@extends('layouts.master')

@section('title', $article->title ?? 'Blog Detail')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $article->title ?? 'Blog Detail' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li>{{ $article->title ?? 'Detail' }}</li>
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

    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            @if($article->gambar)
                                <div class="entry-media">
                                    <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->title }}">
                                </div>
                            @endif
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-calendar"></i> {{ $article->created ? \Carbon\Carbon::parse($article->created)->format('d M Y') : '' }}</li>
                                </ul>
                            </div>
                            <h2>{{ $article->title }}</h2>
                            <div>{!! $article->content !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        @if($categories->isNotEmpty())
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    @foreach ($categories as $cat)
                                        <li><a href="{{ route('blog.category', $cat->slug) }}">{{ $cat->article_category_name }}<span>{{ $cat->articles_count }}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($recentPosts->isNotEmpty())
                            <div class="widget recent-post-widget">
                                <h3>Recent Posts</h3>
                                <div class="posts">
                                    @foreach($recentPosts as $post)
                                        <div class="post">
                                            @if($post->gambar)
                                                <div class="img-holder">
                                                    <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->title }}">
                                                </div>
                                            @endif
                                            <div class="details">
                                                <h4><a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                                                </h4>
                                                <span class="date">{{ $post->created ? \Carbon\Carbon::parse($post->created)->format('d M Y') : '' }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->

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