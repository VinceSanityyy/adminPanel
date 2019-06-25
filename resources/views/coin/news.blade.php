@extends('coin.app')
@extends('coin.graph')

@section('content')
{{-- SLIDER --}}


<div class="blog-section p-tb white-bg" id="press">
        <div class="container">
             <div class="sec-title text-center"><h3>We are in the Media</h3></div>

             <div class="row blogmain">
                <div class="blog-slider style-2 owl-carousel" >
                        @foreach ($news->take(5) as $data)
                    <div class="item">
                            <div class="blog-list">
                        <div class="title">


                        <div class="blog-list-img"> <a href="/mainshow/{{$data->id}}"> <img src="{{asset('img')}}/{{$data->image}}" height="350" alt=""></a></div>
                        {{-- <img src="{{ asset('img/' . $data->image) }}" class="img-fluid img-thumbnail" height="350"  /> --}}
                        <div class="blog-date"> {{ $data->created_at->format('M') }} <span> {{ $data->created_at->format('d') }}</span>  {{ $data->created_at->format('Y') }}</div>
                        <div class="blog-list-desc">
                        <a href="/mainshow/{{$data->id}}"> <h4 style="text-align: center;">{{$data->title}}</h4 > </a>
                        <p>{{$data->subtitle}}</p>
                       </div>
                    </div>
                    </div>
                    </div>
                    @endforeach
                </div>

             </div>
         </div>
    </div>
</div>



@endsection
