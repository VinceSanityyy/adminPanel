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

                    {{-- <a id="{{$comment->id}}" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModalCenter_delete"><span class="glyphicon glyphicon-trash"></span></a> --}}

                    <button id="{{$comment->id}}" type="button" class="btn btn-xs btn-danger delete-data" data-toggle="modal" data-target="#exampleModalCenter_delete"><span class="glyphicon glyphicon-trash"></span></button>

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





    <!-- delete modal -->
    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
              <form action="{{route('comments.destroy', $comment->id)}}">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                </form>
            </div>
            <div class="modal-body">
          <p style="font-weight: bold; text-align: center;"> Do you want to delete the selected Comment? </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
              <button type="button" class="btn btn-danger" id="delete-button">Delete</button>
            </div>
          </div>
        </div>
      </div>


  @endsection

@section('scripts')
      <script>
        $(document).ready(function(){

    });
      </script>


@endsection
