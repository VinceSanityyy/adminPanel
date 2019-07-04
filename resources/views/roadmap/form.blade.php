{!! csrf_field() !!}
<div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Year Covered : </strong>
        {!! Form::text('year', null, ['placeholder'=>'Year Covered','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Description : </strong>
        {!! Form::text('body', null, ['placeholder'=>'Roadmap Description','class'=>'form-control']) !!}
      </div>
    </div>


    <div class="col-xs-12">
      <a class="btn btn-success" href="{{ route('roadmap.index') }}">Back</a>
      <button type="submit" class="btn  btn-primary" name="button">Submit</button>
    </div>
  </div>

