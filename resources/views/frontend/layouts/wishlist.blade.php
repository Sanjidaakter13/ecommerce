@extends('frontend.template.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>wishlist</title>
    <style>
        .cart-wrap {
            padding: 40px 0;
            font-family: 'Open Sans', sans-serif;
        }

        .main-heading {
            font-size: 19px;
            margin-bottom: 20px;
        }

        .table-wishlist table {
            width: 100%;
        }

        .table-wishlist thead {
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 5px;
        }

        .table-wishlist thead tr th {
            padding: 8px 0 18px;
            color: #484848;
            font-size: 15px;
            font-weight: 400;
        }

        .table-wishlist tr td {
            padding: 25px 0;
            vertical-align: middle;
        }

        .table-wishlist tr td .img-product {
            width: 72px;
            float: left;
            margin-left: 8px;
            margin-right: 31px;
            line-height: 63px;
        }

        .table-wishlist tr td .img-product img {
            width: 100%;
        }

        .table-wishlist tr td .name-product {
            font-size: 15px;
            color: #484848;
            padding-top: 8px;
            line-height: 24px;
            width: 50%;
        }

        .table-wishlist tr td.price {
            font-weight: 600;
        }

        .table-wishlist tr td .quanlity {
            position: relative;
        }

        .total {
            font-size: 24px;
            font-weight: 600;
            color: #8660e9;
        }

        .display-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .round-black-btn {
            border-radius: 25px;
            background: #212529;
            color: #fff;
            padding: 5px 20px;
            display: inline-block;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
            cursor: pointer;
            font-size: 14px;
        }

        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        .d-block {
            display: block;
        }

        .custom-form label {
            font-size: 14px;
            line-height: 14px;
        }

        .pretty.p-default {
            margin-bottom: 15px;
        }

        .pretty input:checked~.state.p-primary-o label:before,
        .pretty.p-toggle .state.p-primary-o label:before {
            border-color: #8660e9;
        }

        .pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
            background-color: #8660e9 !important;
        }

        .main-heading.border-b {
            border-bottom: solid 1px #ededed;
            padding-bottom: 15px;
            margin-bottom: 20px !important;
        }

        .custom-form .pretty .state label {
            padding-left: 6px;
        }

        .custom-form .pretty .state label:before {
            top: 1px;
        }

        .custom-form .pretty .state label:after {
            top: 1px;
        }

        .custom-form .form-control {
            font-size: 14px;
            height: 38px;
        }

        .custom-form .form-control:focus {
            box-shadow: none;
        }

        .custom-form textarea.form-control {
            height: auto;
        }

        .mt-40 {
            margin-top: 40px !important;
        }

        .in-stock-box {
            background: #ff0000;
            font-size: 12px;
            text-align: center;
            border-radius: 25px;
            padding: 4px 15px;
            display: inline-block;
            color: #fff;
        }

        .trash-icon {
            font-size: 20px;
            color: #212529;
        }

    </style>
</head>

<body>



    <div class="cart-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;background-color: #D19C97;font-family: Poppins, sans-serif;padding:15px"
                        class="main-heading mb-10">
                        <h1>My wishlist</h1>
                    </div>
                    <div class="table-wishlist">
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="45%"><b>Product Name</b></th>
                                    <th width="15%"><b>Unit Price</b></th>
                                    <th width="15%"><b>Stock Status</b></th>
                                    <th width="15%"></th>
                                    <th width="10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $wishdata=session()->get('list');
                                $total=0;
                                @endphp
                                @foreach($wishdata as $data)
                                <tr>
                                    <td width="45%">
                                        <div class="display-flex align-center">
                                            <div class="img-product">
                                                <img src="{{url('uploads/products/'.$data['image'])}}" alt=""
                                                    class="mCS_img_loaded">
                                            </div>
                                            <div class="name-product">
                                                {{$data['name']}}
                                            </div>
                                        </div>
                                    </td>
                                    <td width="15%" class="price">{{$data['price']}}.BDT</td>
                                    <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                    <td width="15%"> <a href="{{route('add.to.cart',$data['id'])}}"> <button
                                                class="round-black-btn small-btn">Add to Cart</button></a></td>
                                    <td width="10%" class="text-center">
                                        <a href="{{route('delete.wishlist',$data['id'])}}" class="trash-icon"><i
                                                class="far fa-trash-alt"></i></a></td>
                                </tr>
                                @php
                                $total=$total+$data['price'];
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <h5><b>Subtotal:{{$total}}.BDT</b></h5>
                            <a  href="{{route('wishlist.clear')}}"> <button style="width:200px" class="btn btn-block btn-primary my-3 py-3">Clear
                                    List</button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
@endsection
