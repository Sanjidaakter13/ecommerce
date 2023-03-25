@extends('backend.template.master')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
 @endif
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input name="user_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Role</label>
        <select  class="form-control" name="role_id" id="">
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Mobile</label>
        <input name="user_mobile" type="number" class="form-control" id="formGroupExampleInput" placeholder="Mobile">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Email</label>
        <input name="user_email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Password</label>
        <input name="user_password" type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="user_image" type="file" class="form-control" id="exampleInputPassword1" 
    placeholder="">
  </div>
    <button type="submit" class="btn btn-success"> Submit</button>
</form>

@endsection