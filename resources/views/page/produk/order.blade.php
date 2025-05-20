@extends('layouts.detail')

@section('title', 'Order Detail')

@section('content')
    <section class="wpo-breadcumb-area section-padding">
    <div class="container my-5">
        @if(session('success'))
            <div class="alert alert-success text-center mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger text-center mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="alert alert-success text-center mb-4">
            <h4 class="alert-heading">Order Successfully Placed!</h4>
            <p>Thank you for your order. Our admin will contact you via WhatsApp shortly.</p>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Order Details</h2>
                <div>
                    @php 
                        $statusBadge = '';
                        if($order->status == 0) {
                            $statusBadge = '<span class="badge bg-danger">Cancelled</span>';
                        } elseif($order->status == 1) {
                            $statusBadge = '<span class="badge bg-warning">Pending</span>';
                        } elseif($order->status == 2) {
                            $statusBadge = '<span class="badge bg-success">Completed</span>';
                        }
                    @endphp
                    <h5>Status: {!! $statusBadge !!}</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Order Code:</strong> {{ $order->orders_code }}</p>
                        <p><strong>Order Date:</strong> {{ $order->tgl_order }}</p>
                    </div>
                    <div class="col-md-6">
                        {{-- <p><strong>Quantity:</strong> {{ $order->quantity }}</p> --}}
                        <p><strong>Product:</strong> {{ $order->product->product_name . " (Rp ". number_format($order->product_price, 0, ',', '.') . ")" }}</p>
                        <p><strong>Product Tambahan:</strong></p>
                        <ul>
                            @if (isset($orderAddOns))
                                @foreach ($orderAddOns as $addon)
                                    <li>{{ $addon->product_addon->product_addon }} (Rp {{ number_format($addon->payment, 0, ',', '.') }})</li>
                                @endforeach
                            @endif
                        </ul>
                        <p><strong>Total Payment:</strong> Rp {{ number_format($order->total_payment, 0, ',', '.') }}</p>
                    </div>
                </div>

                @if(auth()->check() && auth()->user()->tipe == 'admin')
                <div class="mt-4">
                    <h5>Admin Actions</h5>
                    <div class="btn-group" role="group">
                        @if($order->status != 2)
                        <a href="{{ route('order.complete', $order->orders_code) }}" class="btn btn-success">
                            Mark as Completed
                        </a>
                        @endif
                        
                        @if($order->status != 0)
                        <a href="{{ route('order.cancel', $order->orders_code) }}" class="btn btn-danger ms-2">
                            Cancel Order
                        </a>
                        @endif
                    </div>
                </div>
                @endif

                {{-- <h3>Registration Questions</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($answers as $answer)
                                <tr>
                                    <td>{{ $answer->product_category_regis_id }}</td>
                                    <td>{{ $answer->answer == 1 ? 'Yes' : 'No' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
    </section>
@endsection
