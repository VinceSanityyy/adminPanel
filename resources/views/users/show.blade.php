@extends('layouts.admin')

@section('content')
<div class="col-lg-12" >
        <div class="pull-center">
          <h3 >News Details </h3>
        </div>
      </div>
    </div>

<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $user->name }}</textarea>
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $user->email }}</textarea>
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $user->password }}</textarea>
          </div>
      {{-- <div class="form-group">
            <label for="exampleInputPassword1">Image Displayed</label>
            ​<br>
                        <img src="{{ asset('img/' . $news->image) }}" class="img-fluid img-thumbnail"  />

          </div> --}}
      <a class="btn btn-success" href="{{ route('users.index') }}">Return</a>
  </form>
  @endsection
