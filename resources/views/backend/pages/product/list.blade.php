@extends('backend.template.master')

@section('content')

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
<p class="alert alert-error" > {{session()->get('error')}} </p>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Weight</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $key=>$product)
        <tr>

            <td>{{$key+1}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->description}}</td>
            <td> <img style="height:40px; width:40" src="{{url('uploads/products' .'/'.$product->image)}}" alt=""></td>
            <td><a href="{{route('product.delete',$product->id)}}"><img style="height:30px; width:30px;"
                        src="{{url('backend/assets/icon/icons-delete.png')}}" alt=""></a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

{{$products->links()}}


<a href="{{route('product.create')}}" class="btn btn-primary">Create Product</a>


@endsection
