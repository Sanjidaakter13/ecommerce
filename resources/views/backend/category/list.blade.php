@extends('backend.template.master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$data)
    <tr>
    
      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->description}}</td>
    </tr>
 
    @endforeach
  </tbody>
</table>

<a class="btn btn-primary" href="{{route('category.create')}}"> Create Category</a>

@endsection