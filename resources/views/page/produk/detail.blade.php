@extends('layouts.detail')

@section('title', 'Detail Produk')

@section('content')
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>{{ $getProduct->product_name }}</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="">Home</a></li>
                        <li><a href="">{{ $getProductCategoryName }}</a></li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> 
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
                            <div><img src="https://letskonek.satuvisitech.com/images/post/{{ ($getProduct->image) }}" alt="{{ $getProduct->product_name }}"></div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>{{ $getProduct->product_name }}</h2>
                        
                        <div class="price">
                            <span class="current">Rp {{ number_format($getProduct->price, 0, ',', '.') }}</span>
                        </div>
                        <p>{!! $getProduct->description !!}</p>
                        <div class="product-option">
                            <form class="form" action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <button type="button" class="btn theme-btn-s3" id="btnOrderNow">Register Now</button>
                       
                        </form>
                         </div>
                    </div> <!-- end option -->
                </div> <!-- end product details -->
            </div> <!-- end row -->

            <div class="row">
                    <div class="col col-xs-12">
                        <div class="product-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description" role="tab" aria-controls="Description"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="Review-tab" data-bs-toggle="tab" href="#Review" role="tab"
                                        aria-controls="Review" aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="Faq-tab" data-bs-toggle="tab" href="#Faq" role="tab"
                                        aria-controls="Faq" aria-selected="false">FAQ</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="Description">
                                    {!! $getProduct->description !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Review">
                                    {!! $getProduct->information !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Faq">
                                   {!! $getProduct->faq !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
        </div> <!-- end of container -->
    </section>


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
                        
                        {{-- Add-ons --}}
                        @if(isset($getProductAddOns) && $getProductAddOns->count() > 0)
                            <h5>Add On</h5>
                            @foreach ($getProductAddOns as $addOn)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input addon-checkbox"
                                           id="addon_{{ $addOn->product_addon_id }}"
                                           name="addons[]"
                                           value="{{ $addOn->product_addon_id }}"
                                           data-price="{{ $addOn->price }}">
                                    <label class="form-check-label" for="addon_{{ $addOn->id }}">
                                        {{ $addOn->product_addon }} (+Rp {{ number_format($addOn->price, 0, ',', '.') }})
                                    </label>
                                </div>
                            @endforeach
                        @endif
    
                        {{-- Total Price --}}
                        <hr>
                        <div class="mb-3">
                            <label for="display_total_price" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="display_total_price" readonly>
                            <input type="hidden" name="total_price" id="total_price">
                        </div>
                        
                        <p>Answer the following questions before placing your order:</p>
                        <input type="hidden" value="{{ $getProduct->product_id }}" name="product_id">
                        <input type="hidden" value="1" id="quantity" name="quantity">
    
                        {{-- Questions --}}
                        @if(isset($questionsByCategory) && $questionsByCategory->count() > 0)
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
        document.addEventListener('DOMContentLoaded', function () {
            const basePrice = {{ $getProduct->price }};
            const checkboxes = document.querySelectorAll('.addon-checkbox');
            const displayTotal = document.getElementById('display_total_price');
            const hiddenTotal = document.getElementById('total_price');
    
            function formatRupiah(angka) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(angka);
            }
    
            function calculateTotal() {
                let total = basePrice;
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        total += parseFloat(checkbox.dataset.price);
                    }
                });
                displayTotal.value = formatRupiah(total);
                hiddenTotal.value = total;
            }
    
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', calculateTotal);
            });
    
            calculateTotal(); // inisialisasi awal
        });
    </script>

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
