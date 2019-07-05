@extends('layouts.admin')


@section('content')

            <h1>Edit Comment</h1>

            {!! Form::model($comment, ['route'=>['comments.update', $comment->id], 'method'=>'put']) !!}

                 {!! Form::label('name', 'Name:')  !!}
                 {!! Form::text('name',null, ['class'=>'form-control', 'disabled'=> 'disabled']) !!}

                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::text('email',null, ['class'=>'form-control', 'disabled'=> 'disabled']) !!}

                 {!! Form::label('comment', 'Comment:') !!}
                 {!! Form::textarea('comment',null, ['class'=>'form-control']) !!}
                <br>

                <a class="btn btn-success" href="{{ URL::previous() }}">Return</a>

                 {!! Form::submit('Update Comment', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}

@endsection
