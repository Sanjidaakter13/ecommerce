@extends('backend.template.master')

@section('content')
<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{$category->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status:</label>
        <input name="status" type="text" class="form-control" id="exampleFormControlInput1" placeholder="status"
            value="{{$category->status}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$category->description}}</textarea>
    </div>

    <button type="submit" style="border-radius:20px;" class="btn btn-primary">Update <img style="height:30px; width:30px;"
            src="{{url('backend/assets/icon/update-icon.png')}}" alt=""></button>

</form>
@endsection
