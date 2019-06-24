@extends('layouts.admin')
@section('content')


<div class="title_left">
                     Dashboard
</div>
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Users Count</span>

    <div class="count">{{$count}}</div>

    </div>




</div>

<div class="container">
       Statistics
</div>

<div>
    {!! $chart->render() !!}
</div>

<div class="container">
    News Statistics
</div>

<div>
 {!! $news->render() !!}
</div>

@endsection
