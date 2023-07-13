@extends('backend.template.master')

@section('content')

<table class="table table-striped category_list">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>

<a class="btn btn-primary" href="{{route('category.create')}}"> Create Category</a>

@endsection

@push('js')

    <script type="text/javascript">
        $(function () {
            var table = $('.category_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('category.list') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'date', name: 'date',searchable: true},
                    {data: 'status', name: 'status'},
                    {data: 'image', name: 'image'},
                    {data: 'description', name: 'description'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });
    </script>
@endpush