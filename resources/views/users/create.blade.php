@extends('layouts.admin')




@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Add New User</h3>
      </div>
    </div>
  </div>

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whooops!! </strong> There were some problems with your input.<br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {!! Form::open(['route' => 'users.store', 'data-parsley-validate'=>'', 'method' => 'POST']) !!}
    @include('users.form')
  {!! Form::close() !!}

@endsection

