@extends('layouts.detail')

{{-- Use dynamic page title if provided (e.g., for category view) --}}
@section('title', $pageTitle ?? 'News and Insights') 

@section('content')

    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $pageTitle ?? 'News and Insights' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            {{-- Add category breadcrumb if viewing by category --}}
                            @if(isset($category))
                                <li><a href="{{ route('blog.index') }}">News and Insights</a></li>
                                <li>{{ $category->article_category_name }}</li>
                            @else
                                <li>News and Insights</li>
                            @endif
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="wpo-blog-content">
                        @forelse ($articles as $article)
                            <div class="post format-standard-image"> {{-- Adjust format class based on article type if needed --}}
                                @if($article->gambar)
                                    <div class="entry-media">
                                        <img src="https://letskonek.satuvisitech.com/images/post/{{ ($article->gambar) }}" alt="{{ $article->title }}">
                                    </div>
                                @endif
                                <div class="entry-meta">
                                    <ul>
                                        {{-- Update meta info if available (e.g., Author relation) --}}
                                        {{-- <li><i class="fi flaticon-user"></i> By <a href="#">{{ $article->author->name ?? 'Admin' }}</a> </li> --}}
                                        {{-- <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li> --}}
                                        <li><i class="fi flaticon-calendar"></i> {{ $article->created ? \Carbon\Carbon::parse($article->created)->format('d M Y') : '' }}</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="{{ route('blog.detail', $article->slug) }}">{{ $article->title }}</a></h3>
                                    {{-- Display excerpt or limited content --}}
                                    <p>{{ Str::limit(strip_tags($article->content), 200) }}</p> 
                                    <a href="{{ route('blog.detail', $article->slug) }}" class="read-more">READ MORE...</a>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info">No articles found.</div>
                        @endforelse
                        
                        {{-- Pagination --}}
                        <div class="pagination-wrapper pagination-wrapper-left">
                            {{ $articles->links('vendor.pagination.custom') }} 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="blog-sidebar">
                        {{-- Removed static About Widget --}}
                        
                        {{-- Search Widget (can be implemented later) --}}
                        {{-- <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div> --}}

                        {{-- Removed Recent Posts Widget --}}
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

                        {{-- Removed static Instagram Widget --}}
                        
                        {{-- Tag Widget (can be implemented later) --}}
                        {{-- @if(!empty($tags))
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
@endsection
