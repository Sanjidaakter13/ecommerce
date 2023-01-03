<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #D19C97
        }

        .card {
            border: none
        }

        .product {
            background-color: #eee
        }

        .brand {
            font-size: 13px
        }

        .act-price {
            color: #D19C97;
            font-weight: 700
        }

        .dis-price {
            text-decoration: line-through
        }

        .about {
            font-size: 14px
        }

        .color {
            margin-bottom: 10px
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            padding: 2px 9px;
            border: 2px solid #D19C97;
            display: inline-block;
            color: #D19C97;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio input:checked+span {
            border-color: #D19C97;
            background-color: #D19C97;
            color: #fff
        }

        .btn-danger {
            background-color: #D19C97 !important;
            border-color: #D19C97 !important
        }

        .btn-danger:hover {
            background-color: #20B2AA !important;
            border-color: #20B2AA!important
        }

        .btn-danger:focus {
            box-shadow: none
        }

        .cart i {
            margin-right: 10px
        }

        .back{
            text-decoration: none;
            color: black;
        }

    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="{{url('/uploads/products/'.$product->image)}}" width="250" /> </div>
                                <div class="thumbnail text-center"> <img onclick="change_image(this)"
                                        src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img
                                        onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                <a class="back" href="{{route('shop.view')}}"><div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span
                                            class="ml-1">Back</span> </div> </a> 
                                            <a href="{{route('shoppingcart.view')}}"> <i class="fa fa-shopping-cart text-muted"></i> </a>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase">{{$product->name}}</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span
                                            class="act-price">{{$product->price}}.BDT</span>
                                        <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="about">{{$product->description}}
                                </p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                            name="size" value="S" checked> <span>S</span> </label> <label class="radio">
                                        <input type="radio" name="size" value="M"> <span>M</span> </label> <label
                                        class="radio"> <input type="radio" name="size" value="L"> <span>L</span>
                                    </label> <label class="radio"> <input type="radio" name="size" value="XL">
                                        <span>XL</span> </label> <label class="radio"> <input type="radio" name="size"
                                            value="XXL"> <span>XXL</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-danger text-uppercase mr-2 px-4"><a style="text-decoration:none;color:white" href="{{route('add.to.cart',$product->id)}}">ADD TO CART</a></button> 
                                    <a href="{{route('wishlist',$product->id)}}"> <i class="fa fa-heart text-muted"></i></a>
                                    <i class="fa fa-share-alt text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {







});
    </script>
</body>

</html>
