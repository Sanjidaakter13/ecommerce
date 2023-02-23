@extends('backend.template.master')
@section('content')
<h2 style="text-align:center;background-color:LightGray">Role</h2>

<form >
   
<div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="{{$roles->name}}" readonly>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="{{$roles->status}}" readonly>
    </div>
    <a class="btn btn-secondary" href="{{route('role.list')}}">Back</a>
</form>
@endsection