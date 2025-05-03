@extends('layouts.master')

@section('title', 'Produk')

@section('content')
    <!-- start wpo-page-title -->
    <section class="wpo-page-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $getProductCategory->product_category }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>{{ $getProductCategory->product_category }}</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="shape-1"><img src="assets/images/shape/1.svg" alt=""></div>
        <div class="shape-2"><img src="assets/images/shape/2.svg" alt=""></div>
        <div class="shape-3"><img src="assets/images/shape/3.svg" alt=""></div>
        <div class="shape-4"><img src="assets/images/shape/4.svg" alt=""></div>
    </section>
    <!-- end page-title -->

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-grids clearfix">
                            @foreach ($getProducts as $product)
                                <div class="grid">
                                    <div class="img-holder">
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}">
                                        @else
                                            <img src="{{ asset('assets/images/shop/1.jpg') }}" alt="{{ $product->product_name }}">
                                        @endif
                                    </div>
                                    <div class="details">
                                        <h3><a href="{{ route('product.detail', ['category_slug' => $getProductCategory->slug, 'product_slug' => $product->slug]) }}">
                                                {{ $product->product_name }}</a></h3>
                                        <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                        <div class="add-to-cart">
                                            <a href="{{ route('product.detail', ['category_slug' => $getProductCategory->slug, 'product_slug' => $product->slug]) }}">Order Now <i class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-center">
                            {{ $getProducts->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-shop-section -->

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
