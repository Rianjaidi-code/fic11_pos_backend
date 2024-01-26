@extends('layouts.app')

@section('title', 'Order Detail')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Order</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Order</a></div>
                    <div class="breadcrumb-item">Order Detail</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Order Detail</h2>
                <p class="section-lead">
                <div>Total Price: {{ $order->total_price }}</div>
                <div>Transaction Time: {{ $order->transaction_time }}</div>
                <div>Total Item: {{ $order->total_item }}</div>
                <div>Payment Method: {{ $order->payment_method }}</div>
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Photo</th>

                                        </tr>
                                        @foreach ($orderItems as $item)
                                            <tr>

                                                <td>{{ $item->product->name }}
                                                </td>
                                                <td>
                                                    {{ $item->product->price }}
                                                </td>

                                                <td>
                                                    {{ $item->quantity }}
                                                </td>

                                                <td>
                                                    {{ $item->total_price }}
                                                </td>

                                                <td>
                                                    @if ($item->product->image)
                                                        <img src="{{ asset('/storage/products/' . $item->product->image) }}"
                                                            alt="" width="100px">
                                                    @else
                                                        <span class="badge badge-danger">No Image</span>
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
