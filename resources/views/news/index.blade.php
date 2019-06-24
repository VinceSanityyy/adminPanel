@extends('layouts.admin')




@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- DATA TABLES -->
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


<div><a class="btn btn-success" style="float:right" href="{{ route('news.create') }}">Publish News</a></div>

<table id="myTable" class="table table-hover">
    <thead>
      <tr>
        <th scope="col">News ID</th>
        <th scope="col">News Title</th>
        <th scope="col">Date Posted</th>



        <th width="280px">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($news as $data)
        <tr>
           <td>{{ $data->id }}</td>
           <td>{{ $data->title }}</td>
           <td>{{ $data->created_at }}</td>


        <td>

        <a href="/news/{{$data->id}}/edit" class="btn btn-warning">Edit</a>

        <a href="/news/{{$data->id}}" class="btn btn-primary">Show</a>

        {!! Form::open(['method' => 'DELETE', 'route'=>['news.destroy', $data->id], 'style'=> 'display:inline', 'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
        {!! Form::submit('Delete',['class'=> 'btn btn-danger', ]) !!}
        {!! Form::close() !!}</td>


        </tr>
        @endforeach
    </tbody>
  </table>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
  } );
   </script>




@endsection
