@extends('welcome')
@section('content')
    <table id="dataTable" class="table  table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        $('#dataTable').DataTable({
            serverSide: true,
            processing: true,
            stateSave: true,
            ajax: {
                url: '{{route('ajaxTeacherLists')}}',
                method: 'GET',
            },
            column: [
                {data: 'name'},
                {data: 'email'},
                {data: 'contact'},
                {data: 'address'},
                {data: 'action'},
                {data: 'sex'},
            ]
        });
    </script>
@endsection
