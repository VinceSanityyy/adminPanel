@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-lg-12" >
      <div class="pull-center">
        <h3 >News Details </h3>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xlg-12">
      <div class="form-group">
        <h3>Title </h3>
       <h1> {{ $news->title }}</h1>
      </div>
    </div>

    <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <h3>Content</h3>
        {{ $news->body }}
      </div>
    </div>


    {{-- <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <h2>Image</h2>
            {{ $news->image }}
          </div>
        </div>
    </div> --}}
    </div>
  </div>
</div>
<a class="btn btn-success" href="{{ route('news.index') }}">Return</a>
@endsection
