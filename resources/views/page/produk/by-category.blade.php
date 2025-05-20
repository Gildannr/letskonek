@extends('layouts.detail')

@section('title', 'Produk')

@section('content')

<style>
    @media only screen (max-width: 600px){
        .wpo-course-details-tab .nav li a{
        margin: 0;
        }
        .wpo-course-details-tab{
            padding: 10px;
            border: none;
        }
        .wpo-course-details-tab ul.nav-tabs {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;/* smooth scroll for iOS */
        padding-left: 190px;
        }
        
        .wpo-course-details-tab ul.nav-tabs li.nav-item {
            padding: 10px;
            flex: 0 0 auto; /* supaya tidak shrink atau wrap */
        }
        
        .wpo-course-details-tab ul.nav-tabs {
            scrollbar-width: none; /* hide scrollbar in Firefox */
        }
        .wpo-course-details-tab ul.nav-tabs::-webkit-scrollbar {
            display: none; /* hide scrollbar in Webkit */
        }
    }

</style>
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
    </section>
    <!-- end page-title -->
    
        <div class="wpo-course-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12">
                        <div class="wpo-course-details-wrap">
                            <div class="wpo-course-details-img">
                                <img src="https://letskonek.satuvisitech.com/images/post/{{ ($getProductCategory->thumbnail) }}" alt="{{ $getProductCategory->product_category }}" width="100%">
                            </div>
                            <div class="wpo-course-details-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                            href="#Overview" role="tab" aria-controls="Overview"
                                            aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Curriculum-tab" data-bs-toggle="tab" href="#Curriculum"
                                            role="tab" aria-controls="Curriculum" aria-selected="false">Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Instructor-tab" data-bs-toggle="tab" href="#Instructor"
                                            role="tab" aria-controls="Instructor" aria-selected="false">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpo-course-details-text">
                                <div class="tab-content">
                                    <div id="Overview" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-course-content">
                                                    <div class="wpo-course-text-top">
                                                        <h2>Description</h2>
                                                        <div class="course-b-text">
                                                            <p>{!! $getProductCategory->description !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Curriculum" class="tab-pane">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-course-content">
                                                    <div class="wpo-course-text-top">
                                                        <h2>Information</h2>
                                                        <div class="course-b-text mt-1">
                                                            <p>{!! $getProductCategory->information !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Instructor" class="tab-pane">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-course-content">
                                                    <div class="wpo-course-text-top">
                                                        <h2>FAQ</h2>
                                                        <div class="course-b-text">
                                                            <p>{!! $getProductCategory->faq !!}
                                                            </p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title-s2">
                        <h2>Product By {{ $getProductCategory->product_category }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-grids clearfix">
                            @foreach ($getProducts as $product)
                                <div class="grid">
                                    <div class="img-holder">
                                        <!--@if($product->image)-->
                                            <img src="https://letskonek.satuvisitech.com/images/post/{{ ($product->image) }}" alt="{{ $product->product_name }}">
                                        <!--@else-->
                                        <!--    <img src="{{ asset('assets/images/shop/1.jpg') }}" alt="{{ $product->product_name }}">-->
                                        <!--@endif-->
                                    </div>
                                    <div class="details">
                                        <h3><a href="{{ route('product.detail', ['category_slug' => $getProductCategory->slug, 'product_slug' => $product->slug]) }}">
                                                {{ $product->product_name }}</a></h3>
                                        <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                        <div class="add-to-cart">
                                            <a href="{{ route('product.detail', ['category_slug' => $getProductCategory->slug, 'product_slug' => $product->slug]) }}">Register Now <i class="ti-shopping-cart"></i></a>
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
@endsection
