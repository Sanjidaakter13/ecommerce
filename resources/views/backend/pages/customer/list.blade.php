@extends('backend.template.master')
@section('content')
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($customers as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->mobile}}</td>
      <td>{{$data->email}}</td>
      <td>
        <a href="{{route('customer.delete',$data->id)}}"><img style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-delete.png')}}" alt=""></a>
        <a href="{{route('customer.view',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/icons-view.png')}}" alt=""></a>
        <a href="{{route('customer.edit',$data->id)}}"><img  style="height:30px; width:30px;" src="{{url('backend/assets/icon/edit-icons.png')}}" alt=""></a>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection