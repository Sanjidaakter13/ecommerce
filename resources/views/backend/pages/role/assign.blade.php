@extends('backend.template.master')
@section('content')

<h2 style="text-align:center; font-weight:bold;color:#007bff;">Create new permissions</h2>

<form action="{{route('permissions.assign',$role->id )}}" method="post">
 @csrf
<h4 style="background-color:DarkGrey;font-weight:bold;color:HoneyDew">Role:{{$role->name}}</h4>
<?php
     $permission_ids=$role->permissions->pluck('permission_id')->toArray();
?>

@foreach($permissions as $permission)
<div class="form-check">
  <input @if(in_array($permission->id, $permission_ids)) checked @endif name="permission[]" value="{{$permission->id}}" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    {{$permission->name}}
  </label>
</div>
@endforeach
<button class="btn btn-success" type="submit">Assign</button>
</form>

@endsection