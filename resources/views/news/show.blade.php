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
                <label for="exampleInputPassword1">Image Displayed</label>
                ​<br>
                    <img src="{{ asset('img/' . $news->image) }}" class="img-fluid img-thumbnail"  />

          </div>
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
        <textarea type="textarea" rows="5" disabled="true" class="form-control" > {{ $news->body }}</textarea>
      </div>

  </form>

  <div class="backend-comments">
        <table id="tables" class="table table-hover">
            <h3>Comments <small>{{$news->comments()->count()}}
            </small></h3>
                <thead>
                  <tr>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Comment</th>
                    <th >Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($news->comments as $comment)
                  <tr>
                  <th scope="row">{{$comment->name}}</th>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>
                    <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>



                    {{-- <button id="{{$comment->id}}" type="button" class="btn btn-xs btn-danger delete-data" data-toggle="modal" data-target="#exampleModalCenter_delete"><span class="glyphicon glyphicon-trash"></span></button> --}}
                    {!! Form::open(['method' => 'DELETE', 'route'=>['comments.destroy', $comment->id], 'style'=> 'display:inline', 'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit', 'class'=> 'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}</td>

                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>


  <script>
        $(document).ready(function() {
          $('#tables').DataTable();

      } );
       </script>

    </div>

    <a class="btn btn-success" href="{{ route('news.index') }}">Return</a>






  @endsection
