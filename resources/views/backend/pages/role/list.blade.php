@extends('backend.template.master')
@section('content')
<h2 style="text-align:center; background-color:lightgray;">Role</h2>

<a class="btn btn-primary" href="{{route('role.create')}}">Add Role</a>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($roles as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
        <a href="{{route('role.view',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-view.png')}}" alt=""></a>
        <a href="{{route('role.edit',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/edit-icons.png')}}" alt=""></a>
        <a href="{{route('role.assign',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/assign-icon.png')}}" alt=""></a>
        <a href="{{route('role.delete',$data->id)}}"><img style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-delete.png')}}" alt=""></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$roles->links()}}
@endsection