@extends('layouts.master')

@section('title', 'Detail Produk')

@section('content')
    <!-- start wpo-page-title -->
    {{-- <section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>{{ $getProduct->product_name }}</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">{{ $getProductCategoryName }}</a></li>
                        <li>{{ $getProduct->product_name }}</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
    <div class="shape-1"><img src="assets/images/shape/1.svg" alt=""></div>
    <div class="shape-2"><img src="assets/images/shape/2.svg" alt=""></div>
    <div class="shape-3"><img src="assets/images/shape/3.svg" alt=""></div>
    <div class="shape-4"><img src="assets/images/shape/4.svg" alt=""></div>
</section> --}}
    <!-- end page-title -->

    <!-- start wpo-shop-single-section -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="wpo-shop-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="shop-single-slider">
                        <div class="slider-for">
                            <div><img src="{{ asset('assets/images/shop/shop-single/1.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/2.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/5.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/4.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/6.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/2.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/3.jpg') }}" alt></div>
                        </div>
                        <div class="slider-nav">
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-1.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-2.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-3.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-4.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-6.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-2.jpg') }}" alt></div>
                            <div><img src="{{ asset('assets/images/shop/shop-single/thumb/img-3.jpg') }}" alt></div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>{{ $getProduct->product_name }}</h2>
                        {{-- <div class="product-rt">
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span>(25 customer reviews)</span>
                    </div> --}}
                        <div class="price">
                            <span class="current">Rp {{ number_format($getProduct->price, 0, ',', '.') }}</span>
                        </div>
                        <p>{!! $getProduct->description !!}</p>
                        {{-- <ul>
                        <li>Going through the cites of the word in classical.</li>
                        <li>There are many variations of passages.</li>
                        <li>Making it look like readable and spoken English.</li>
                    </ul> --}}
                        <div class="product-option">
                            <form class="form" action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <button type="button" class="btn btn-outline-dark" id="btnOrderNow">Order Now</button>
                                {{-- <div class="product-row"> --}}
                                {{-- <div>
                                        <input id="product-count" type="text" value="1" name="quantity" required>
                                    </div> --}}
                                {{-- <div>
                                    </div> --}}
                        </div>
                        </form>
                    </div> <!-- end option -->
                    <div class="tg-btm">
                        <p><span>Categories:</span> {{ $getProductCategoryName }}</p>
                        {{-- <p><span>Tags:</span> Education, Online, Course</p> --}}
                    </div>
                </div> <!-- end product details -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        {{-- <div class="row">
                <div class="col col-xs-12">
                    <div class="product-info">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description"
                                    role="tab" aria-controls="Description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="Review-tab" data-bs-toggle="tab" href="#Review" role="tab"
                                    aria-controls="Review" aria-selected="false">Review</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Description">
                                <p>Samsa woke from troubled dreams, he found himself transformed in his bed into a
                                    horrible vermin. He lay on his armour-like back, and if he lifted his head a
                                    little he could see his brown belly, slightly domed and divided by arches into
                                    stiff sections. The bedding was hardly able to cover it and seemed ready to
                                    slide off any moment. His many legs, pitifully thin compared with the size of
                                    the rest of him.</p>
                                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                    His many legs, pitifully thin compared with the size of the rest of himSamsa
                                    woke from troubled dreams, he found himself transformed in his bed into a
                                    horrible vermin.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Review">
                                <div class="row">
                                    <div class="col col-lg-10 col-12">
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="assets/images/shop/shop-single/review/img-1.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Jenefar Willium</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>25 Sep 2021</span>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some
                                                        form, by injected humour, or randomised words which don't
                                                        look.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="assets/images/shop/shop-single/review/img-2.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Maria Bannet</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>28 Sep 2021</span>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>There are many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some
                                                        form, by injected humour, or randomised words which don't
                                                        look.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col col-lg-12 col-12 review-form-wrapper">
                                        <div class="review-form">
                                            <h4>Add a review</h4>
                                            <p>Your email address will not be published. Required fields are marked
                                                *</p>
                                            <form>
                                                <div class="give-rat-sec">
                                                    <p>Your rating *</p>
                                                    <div class="give-rating">
                                                        <label>
                                                            <input type="radio" name="stars" value="1">
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="2">
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="3">
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="4">
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="5">
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Name *"
                                                        required>
                                                </div>
                                                <div>
                                                    <input type="email" class="form-control" placeholder="Email *"
                                                        required>
                                                </div>
                                                <div>
                                                    <textarea class="form-control" placeholder="Review *"></textarea>
                                                </div>
                                                <div class="rating-wrapper">
                                                    <div class="submit">
                                                        <button type="submit" class="theme-btn-s2">Post
                                                            review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row --> --}}
        </div> <!-- end of container -->
    </section>
    <!-- end of wpo-shop-single-section -->

    <!-- start wpo-subscribe-section -->
    {{-- <section class="wpo-subscribe-section section-padding pt-0">
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
    </section> --}}
    <!-- end subscribe-section -->

    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="orderForm" action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Order Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Answer the following questions before placing your order:</p>
                        <input type="hidden" value="{{ $getProduct->product_id }}" name="product_id">
                        <input type="hidden" value="1" id="quantity" name="quantity">

                        {{-- Debug information --}}
                        @if(isset($questionsByCategory) && $questionsByCategory->count() > 0)
                            {{-- Looping questions --}}
                            @foreach ($questionsByCategory as $question)
                                <div class="mb-3">
                                    <label class="form-label">{{ $question->question }}</label>
                                    <div>
                                        <input type="radio" name="answers[{{ $question->id }}]" value="Yes"
                                            id="question_{{ $question->id }}_yes" required>
                                        <label for="question_{{ $question->id }}_yes">Yes</label>
                                        &nbsp;&nbsp;
                                        <input type="radio" name="answers[{{ $question->id }}]" value="No"
                                            id="question_{{ $question->id }}_no" required>
                                        <label for="question_{{ $question->id }}_no">No</label>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-info">No questions available for this product category.</div>
                        @endif

                        <input type="hidden" id="product_id" name="product_id" value="{{ $getProduct->product_id }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle "Order Now" button click
            document.getElementById('btnOrderNow').addEventListener('click', function() {
                // Show the modal
                var orderModal = new bootstrap.Modal(document.getElementById('orderModal'));
                orderModal.show();
            });
        });
    </script>
@endsection
