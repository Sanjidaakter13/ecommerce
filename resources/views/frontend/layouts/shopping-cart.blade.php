@extends('frontend.template.master')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 30px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">

                    @php
                    $cartdata=session()->get('cart');
                    $total=0;
                    @endphp

                    @if(session()->has('cart'))

                    @foreach($cartdata as $data)
                    <tr>
                        <td class="align-middle"><img src="{{url('uploads/products/' . $data['image'])}}" alt=""
                                style="width: 50px;">
                            {{$data['name']}}</td>
                        <td  class="align-middle">{{$data['price']}}</td>
                        <form action="{{route('update.cart', $data['id'])}}" method="get">
                            <td  class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 120px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="number" name="pro_quantity"  class="form-control form-control-sm bg-secondary text-center"
                                        value="{{$data['quantity']}}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </form>
                        <td class="align-middle"> {{$data['price']}}x{{$data['quantity']}}={{$data['total']}}</td>
                        <td class="align-middle"> <a href="{{route('delete.cart',$data['id'])}}"> <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                    </tr>

                    @php
                    $total=$total+$data['total'];
                    @endphp

                    @endforeach

                    @else
                    <p> No cart product is available </p>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">{{$total}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">$160</h5>
                    </div>
                    <a href="{{route('clear.cart')}}"> <button class="btn btn-block btn-primary my-3 py-3">Clear Cart</button> </a>
                    <a href="{{route('checkout.view')}}"> <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection
