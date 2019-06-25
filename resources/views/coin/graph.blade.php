


@section('graph')

<div class="card border-success mb-3" style="max-width: 50rem; height: 29rem;">
        <div class="card-header">Available ICO/STO Stage</div>
        <div class="card-body ">
          <h5 class="card-title">Stage 1 <span class="badge badge-success">Running</span></h5>
          {!! $graph->render() !!}
          <br><br><br>
          <div class="stage-info">
                <div class="row">
                    <div class="col-6">
                        <div class="stage-info-txt">
                            <h6>Base Price</h6>
                            <div class="h4 stage-number">2<small>USD</small></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stage-info-txt">
                            <h6>Base Bonus</h6>
                            <div class="h4 stage-number">10<small>%</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stage-date">
                    <div class="row">
                        <div class="col-6">
                            <h6>Start Date</h6>
                            <h5>11 May, 2019 <small>09:29 PM</small></h5>
                        </div>
                        <div class="col-6">
                            <h6>End Date</h6>
                            <h5>30 Nov, 2019 <small>09:29 PM</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>






@endsection
