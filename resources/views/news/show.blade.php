@extends('layouts.admin')

@section('content')
  {{-- <div class="row">
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
        <div class="col-xlg-12">
          <div class="form-group">
            <h3>Subtitle </h3>
           <h4> {{ $news->subtitle }}</h4>
          </div>
        </div>
    </div>
  </div>

    <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <h3>Content</h3>
        {{ $news->body }}
      </div>
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
    {{-- </div>
  </div>
</div> --}}



<div class="col-lg-12" >
        <div class="pull-center">
          <h3 >News Details </h3>
        </div>
      </div>
    </div>

<form>
    <div class="form-group">
      <label for="exampleInputEmail1">News title</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $news->title }}</textarea>
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Subtitle</label>
      <textarea type="text" class="form-control" rows="1" disabled="true" id="exampleInputPassword1" placeholder=""> {{ $news->subtitle }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea type="textarea" rows="10" disabled="true" class="form-control" > {{ $news->body }}</textarea>
      </div>

      <div class="form-group">
            <label for="exampleInputPassword1">Image Displayed</label>
            ​<br>
                        <img src="{{ asset('img/' . $news->image) }}" class="img-fluid img-thumbnail"  />
                        {{-- <img src="{{asset('img')}}/{{$news->image}}" height="350" alt=""> --}}
                        {{-- <img src="{{asset($news->image)}}" alt="..."> --}}

          </div>
      <a class="btn btn-success" href="{{ route('news.index') }}">Return</a>
  </form>
  @endsection
