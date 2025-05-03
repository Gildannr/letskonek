@extends('layouts.master')

@section('title', 'Order Detail')

@section('content')
    <section class="wpo-breadcumb-area section-padding">
    <div class="container my-5">
        <div class="alert alert-success text-center mb-4">
            <h4 class="alert-heading">Order Successfully Placed!</h4>
            <p>Thank you for your order. Our admin will contact you via WhatsApp shortly.</p>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Order Details</h2>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Order Code:</strong> {{ $order->orders_code }}</p>
                        <p><strong>Order Date:</strong> {{ $order->tgl_order }}</p>
                    </div>
                    <div class="col-md-6">
                        {{-- <p><strong>Quantity:</strong> {{ $order->quantity }}</p> --}}
                        <p><strong>Product:</strong> {{ $order->product->product_name }}</p>
                        <p><strong>Total Payment:</strong> Rp {{ number_format($order->total_payment, 0, ',', '.') }}</p>
                    </div>
                </div>

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
