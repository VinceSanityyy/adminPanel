
@section('graph')


@foreach ($graphdetails as $item)

<div class="card" border="primary" style="max-width: 50rem; height: 35rem;">
        <div class="card-header">Available ICO/STO Stage</div>
        <div class="card-body ">
          <h5 class="card-title">{{$item->name}} <span class="badge badge-success">{{$item->status}}</span></h5>
                    {{-- <div class="chart-container" style="position: right; height:25vh; width:25vw; ">
                            <canvas id="myChart" min-width="200px" width="10" height="7px"></canvas>
                        </div>
<br><br><br><br><br> --}}
{{-- <div id="chartContainer" style="height: 300px; width: 100%;"></div> --}}
<div id="chartdiv"  style="height: 320px; width: 100%;"></div>
<br>
          <div class="stage-info">
                <div class="row">
                    <div class="col-6">
                        <div class="stage-info-txt">
                            <h6>Base Price</h6>
                            <div class="h5 stage-number">{{$item->base_price}}<small> USD</small></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stage-info-txt">
                            <h6>Base Bonus</h6>
                            <div class="h5 stage-number">10<small>%</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stage-date">
                    <div class="row">
                        <div class="col-6">
                            <h6>Start Date</h6>
                            <h5>{{ Carbon\Carbon::parse($item->start_date)->format('Y-m-d') }}<small></small></h5>
                        </div>
                        <div class="col-6">
                            <h6>End Date</h6>
                            <h5>{{ Carbon\Carbon::parse($item->end_date)->format('Y-m-d') }}<small></small></h5>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        @endforeach

{{-- <script>
    window.onload = function () {
        CanvasJS.addColorSet("x",
                [
                '#1CB7D7',
                '#3382FF'

                ]);
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title:{
            text: "asd",
            fontSize: 30,
            horizontalAlign: "left",
            fontFamily: "tahoma"
        },
        colorSet: "x",
        data: [
             {
       type: "doughnut",
       dataPoints: [
       {  y:   {{$item->total_tokens}} - {{$item->sales_token}}, indexLabel: "Remaining Tokens" },
       {  y:  {{$item->sales_token}} , indexLabel: "Sold Tokens"},
       ]
         }
     ]
   });
    chart.render();

    }
    </script> --}}

    <!-- Styles -->
<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }

    </style>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Chart code -->
    <script>
    am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart);

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "values";
    pieSeries.dataFields.category = "tokens";

    // Let's cut a hole in our Pie chart the size of 30% the radius
    chart.innerRadius = am4core.percent(45);

    // Put a thick white border around each Slice
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;
    pieSeries.slices.template
      // change the cursor on hover to make it apparent the object can be interacted with
      .cursorOverStyle = [
        {
          "property": "cursor",
          "value": "pointer"
        }
      ];

    pieSeries.alignLabels = false;
    pieSeries.labels.template.bent = true;
    pieSeries.labels.template.radius = 3;
    pieSeries.labels.template.padding(0,0,0,0);

    // pieSeries.ticks.template.disabled = true;

    // Create a base filter effect (as if it's not there) for the hover to return to
    var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
    shadow.opacity = 0;

    // Create hover state
    var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

    // Slightly shift the shadow and make it more prominent on hover
    var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
    hoverShadow.opacity = 0.7;
    hoverShadow.blur = 5;

    // Add a legend
    chart.legend = new am4charts.Legend();

    chart.data = [{
      "tokens": "Sold Tokens",
      "values": {{$item->total_tokens}} - {{$item->sales_token}}
    },{
      "tokens": "Unsold Tokens",
      "values": {{$item->sales_token}}
    }];

    }); // end am4core.ready()
    </script>

    <!-- HTML -->



@endsection


{{-- old chart --}}
{{--
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',

        data: {
            labels: ['Unsold Tokens','Sold'],
            datasets: [{
                data: [
                  {{$item->total_tokens}} - {{$item->sales_token}},
                  {{$item->sales_token}}
                ],
                backgroundColor: [
                    '#1CB7D7',
                    '#3382FF'

                ]
            }]
        },
        options: {
            responsive: true
        }

    });


    </script> --}}
