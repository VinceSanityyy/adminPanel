{!! csrf_field() !!}
<div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name : </strong>
        {!! Form::text('name', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Email : </strong>
        {!! Form::text('email', null, ['placeholder'=>'Email','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
          <strong>Password : </strong>
          <br>
          {!! Form::password('password', null, ['placeholder'=>'Password','class'=>'form-control']) !!}
        </div>
      </div>

    <div class="col-xs-12">
      <a class="btn btn-success" href="{{ route('users.index') }}">Back</a>
      <button type="submit" class="btn  btn-primary" name="button">Submit</button>
    </div>
  </div>

