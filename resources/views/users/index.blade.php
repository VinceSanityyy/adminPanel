@extends('layouts.admin')




@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- DATA TABLES -->
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">



{{-- <div><a class="btn btn-success" style="float:right" href="{{ route('users.create') }}">Create New User</a></div> --}}

<table id="myTable" class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>

        <th width="280px">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
           <td>{{ $user->id }}</td>
           <td>{{ $user->name }}</td>
           <td>{{ $user->email }}</td>

        <td>

        <a href="/users/{{$user->id}}/edit" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></a>
        <a href="/users/{{$user->id}}" class="btn btn-primary"><span class="glyphicon glyphicon-search"></a>

        {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id], 'style'=> 'display:inline', 'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
        {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit', 'class'=> 'btn btn-danger']) !!}
        {!! Form::close() !!}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>

            <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}



  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();

  } );
   </script>




@endsection
