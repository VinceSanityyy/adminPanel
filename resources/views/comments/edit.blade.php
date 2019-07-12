@extends('layouts.admin')


@section('content')

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

            <h1>Edit Comment</h1>

            {!! Form::model($comment, ['route'=>['comments.update', $comment->id], 'method'=>'put']) !!}

                 {!! Form::label('name', 'Name:')  !!}
                 {!! Form::text('name',null, ['class'=>'form-control', 'disabled'=> 'disabled']) !!}

                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::text('email',null, ['class'=>'form-control', 'disabled'=> 'disabled']) !!}

                 {!! Form::label('comment', 'Comment:') !!}
                 {!! Form::textarea('comment',null, ['class'=>'form-control' ,'required']) !!}
                <br>

                <a class="btn btn-success" href="{{ URL::previous() }}">Return</a>

                 {!! Form::submit('Update Comment', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}

@endsection
