@extends('backend.template.master')

@section('content')
<form action="{{route('customer.update',$users->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{$users->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email:</label>
        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder=""
            value="{{$users->email}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Number:</label>
        <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder=""
            value="{{$users->mobile}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password:</label>
        <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder=""
            value="{{$users->password}}">
    </div>
    

    <button type="submit" style="border-radius:20px;" class="btn btn-primary">Update <img style="height:30px; width:30px;"
            src="{{url('backend/assets/icon/update-icon.png')}}" alt=""></button>

</form>
@endsection
