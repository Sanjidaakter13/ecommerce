@extends('backend.template.master')
@section('content')
<h2 style="text-align:center;background-color:LightGray">Role</h2>

<form action="{{route('role.store')}}" method="post">
    @csrf
<div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input name="role_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="role_status" class="custom-select custom-select-sm">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection