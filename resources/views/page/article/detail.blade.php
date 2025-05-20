@extends('layouts.detail')

@section('title', $article->title ?? 'News and Insights')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $article->title ?? 'News and Insights' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">News and Insights</a></li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
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
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($article->gambar) }}" alt="{{ $article->title }}">
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
                    <div class="tag-share-s2 clearfix">
                        <div class="tag">
                            <span>Share: </span>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">Whatsapp</a></li>
                            </ul>
                        </div>
                    </div> <!-- end tag-share -->
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        

                        @if($recentPosts->isNotEmpty())
                            <div class="widget recent-post-widget">
                                <h3>Recent Posts</h3>
                                <div class="posts">
                                    @foreach($recentPosts as $post)
                                        <div class="post">
                                            @if($post->gambar)
                                                <div class="img-holder">
                                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($post->gambar) }}" alt="{{ $post->title }}">
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

    <!-- end subscribe-section -->
@endsection