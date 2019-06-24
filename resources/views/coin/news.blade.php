@extends('coin.app')
@extends('coin.graph')

@section('content')
{{-- SLIDER --}}


<div class="blog-section p-tb white-bg" id="press">
        <div class="container">
             <div class="sec-title text-center"><h3>We are in the Media</h3></div>

             <div class="row blogmain">
                <div class="blog-slider style-2 owl-carousel" >
                        @foreach ($news as $data)
                    <div class="item">
                        <div class="title">
                        <h2>{{$data->title}}</h2 >
                        <h6>{{$data->image}}</h6>
                        <h5>{{$data->body}}</h5>
                        <a href="/news/{{$data->id}}" class="btn btn-xs btn-warning">Read more</a>
                       </div>
                    </div>


                    @endforeach

                </div>

             </div>
         </div>
    </div>
</div>



@endsection
