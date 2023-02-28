@extends('backend.template.master')
@section('content')
<h2 style="text-align:center; font-weight:bold;color:#007bff;">Create new permissions</h2>
<h4 style="background-color:DarkGrey;font-weight:bold;color:HoneyDew">Role:{{$role->name}}</h4>
@foreach($permissions as $permission)
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    {{$permission->name}}
  </label>
</div>
@endforeach
@endsection