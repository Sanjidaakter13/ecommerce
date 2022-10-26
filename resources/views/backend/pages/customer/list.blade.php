@extends('backend.template.master')
@section('content')
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($customers as $data)
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->mobile}}</td>
      <td>{{$data->email}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
@endsection