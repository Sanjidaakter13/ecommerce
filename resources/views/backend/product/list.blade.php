@extends('backend.template.master')

@section('content')

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
    
    </tr>
  </thead>
  <tbody>
    @foreach($products as $key=>$product)
    <tr>
      
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->weight}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->image}}</td>
    </tr>
 
    @endforeach
    
  </tbody>
</table>

{{$products->links()}}


<a href="{{route('product.create')}}" class="btn btn-primary">Create Product</a>


@endsection