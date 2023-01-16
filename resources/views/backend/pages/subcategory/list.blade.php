@extends('backend.template.master')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subcat as $sub)
        <tr>
            <td>{{$sub->name}}</td>
            <td>{{$sub->status}}</td>
            <td>{{$sub->description}}</td>
            <td><img style="height:40px; width:40" src="{{url('uploads\subcategories'.'/'.$sub->image)}}" alt=""></td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('subcategory.create')}}">Create Subcategory</a>

@endsection
