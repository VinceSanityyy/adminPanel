
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>News Title : </strong>
        {!! Form::text('title', null, ['placeholder'=>'Title','class'=>'form-control', 'required' =>'']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Subtitle : </strong>
        {!! Form::text('subtitle', null, ['placeholder'=>'Subtitle','class'=>'form-control','required' =>'']) !!}
      </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
          <strong>Content : </strong>
          {!! Form::textarea('body', null, ['placeholder'=>'Content','class'=>'form-control','required' =>'']) !!}
        </div>
      </div>
    <div class="col-xs-12">
        <div class="form-group">
          <strong>Image : </strong>
          <br>
          {!! Form::file('image', null, ['class'=>'form-control','required' =>'','files' => true ]) !!}
        </div>
      </div>

    <div class="col-xs-12">
      <a class="btn btn-success" href="{{ route('news.index') }}">Back</a>
      <button type="submit" class="btn  btn-primary" name="button">Submit</button>
    </div>
  </div>


