@extends('backend.template.master')
@section('content')
<h2 style="text-align:center;background-color:LightGray">Role</h2>

<form action="{{route('role.update',$roles->id)}}" method="post">
    @csrf
<div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input name="role_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="{{$roles->name}}">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="role_status" class="custom-select custom-select-sm"  placeholder="{{$roles->status}}">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection