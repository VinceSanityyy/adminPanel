
@section('road')




<div class="roadmap-sec p-tb white-sec" id="roadmap">
    <div class="container">
        <div class="sec-title text-center"><h3>The Roadmap</h3></div>
        <div class="sub-txt text-center">
            <p>We are building the future of capital markets and money.</p>
        </div>

        <div class="roadmap-slider owl-carousel">
                @foreach ($allroad->slice(0) as $data)
            <div class="item">
            <span>{{$data->year}}</span>
            <p> {{$data->body}}</p>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>




@endsection
