@extends('backend.template.master')
@section('content')
<a class="btn btn-primary" href="{{route('user.create')}}">Create user</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Mobile</th>
      <th scope="col">email</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection