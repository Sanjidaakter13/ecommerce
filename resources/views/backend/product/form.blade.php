@extends('backend.template.master')

@section('content')
<form action="{{route('product.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="pro_name" type="text" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input name="pro_quantity" type="number" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input name="pro_price" type="number" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Weight</label>
    <input name="pro_weight" type="number" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input name="pro_description" type="text" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="pro_image" type="file" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection