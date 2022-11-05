@extends('backend.template.master')

@section('content')
<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input name="cat_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="cat_status" class="custom-select custom-select-sm">
            <option selected>Open this select menu</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input name="cat_description" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Description">
    </div>
    <button type="submit" class="btn btn-success"> Submit</button>
</form>
@endsection
