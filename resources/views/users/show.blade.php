@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>User Details </h3> <a class="btn btn-xs btn-primary" href="{{ route('users.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name </strong>
        {{ $user->name }}
      </div>
    </div>

    <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Email</strong>
        {{ $user->email }}
      </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <strong>Password</strong>
            {{ $user->email }}
          </div>
        </div>

@endsection
