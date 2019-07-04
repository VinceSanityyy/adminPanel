@extends('layouts.admin')

@section('content')

<div class="col-lg-12" >
        <div class="pull-center">
          <h3 >Details </h3>
        </div>
      </div>
    </div>

<form>

    <div class="form-group">
      <label for="exampleInputEmail1">Year Covered</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $roadmap->year }}</textarea>
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $roadmap->body }}</textarea>
      <br>
    </div>
      <a class="btn btn-success" href="{{ route('roadmap.index') }}">Return to index</a>
  </form>
  @endsection
