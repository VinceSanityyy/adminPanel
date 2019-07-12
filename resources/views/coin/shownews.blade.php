@extends('coin.appnews')

@section('content')
<div class="midd-container">
        <!-- Page title Section Start -->
        <div id="page-title" class="page-title-block" style="background-image:url({{asset('landing/images/our-mission.jpg')}});">
          <div class="container">
          <h1 class="post-title">{{$news->title}}</h1>
            <ul class="breadcrumb">
              <li><a href="/">Home</a></li>
            <li class="current">{{$news->subtitle}}</li>
            </ul>
          </div>
        </div>
        <!-- Page title Section End -->
        <!-- Benefits Start -->
        <div id="page-content">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <article class="post">
                  <div class="entry-content">
                    <div class="post-meta">
                      <span class="post-meta-date">{{$news->created_at->format('M d, Y')}}</span>
                      <span class="post-meta-author">
                        <span>By</span>
                        <span class="post-meta-author-link"><a href="#">Admin</a></span>

                      </span>


                    </div>
                    <div class="img-wrapper">
                            <span class="badge badge-success">Published</span>
                      <img src="{{asset('landing/images/blog-img1.jpg')}}" alt="" />
                    </div>
                <p>{{$news->body}}</p>
                  </div>

                  <a href="{{ url('/') }}"></span>Back to home</a>
                  <br><br><br>

                  <h4 class="comments-title" > <span class="fas fa-comment-alt"></span>
                    {{$news->comments()->count()}}
                    Comments</h4>
                  <div class="row" >
                      <div class="col-md-12 col-md-offset-2" style="overflow-y: scroll; height: 400px;
                      width: 400px; " id="commentarea" >
                        @include('coin.comments')
                      </div>
                  </div>



                  {{-- COMMENTS --}}
                  <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                      <h3 id="reply-title" class="comment-reply-title">
                        <div class="leave-a-comment-title">Leave a <span>comment </span></div>
                        {{-- <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small> --}}
                      </h3>
                      @if(count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whooops!! </strong> There were some problems with your input.<br>
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    {!! Form::open(['route'=>['comments.store', $news->id], 'method'=>'POST']) !!}
                      {{-- <form action="#" method="post" id="commentform" class="comment-form" novalidate=""> --}}
                        <div class="row">
                          <div class="col-md-4 col-12 form-group">
                           {!! Form::label('name', 'Name:') !!}
                           {!! Form::text('name', null, ['class'=>'form-control','required'])!!}
                          </div>
                          <div class="col-md-4 col-12 form-group">
                            {{Form::label('email', 'Email:') }}
                            {!!Form::text('email', null, ['class'=>'form-control','required'])!!}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 form-group">
                            {!! Form::label('comment', 'Comment:') !!}
                            {!! Form::textarea('comment', null, ['class'=>'form-control','required'])!!}


                          </div>
                        </div>
                        <div class="form-submit">
                          {!!Form::submit ('Add Comment', ['class'=>'btn btn-warning'], ['id' => 'ajaxSubmit'])!!}
                        </div>
                      {{-- </form> --}}
                      {!!Form::close()!!}
                    </div>
                  </div>
                </article>

              </div>
              <div class="col-md-3 sidebar">
                  <aside id="recent_posts-1" class="widget Recent_Posts"  >
                      <h4 class="widget-title">Recent news</h4>
                        <ul class="posts  styled" style="overflow-y: scroll; height: 400px;
                        width: 400px; ">
                            @foreach($all->slice(2) as $news)
                            <li>
                                <div class="cp-rp-posts-image">
                                        <a href="/article/{{$news->id}}">
                                            <img src="{{asset('img')}}/{{$news->image}}" height="70">
                                            {{-- <a href="/mainshow/{{$data->id}}"> <img src="{{asset('img')}}/{{$data->image}}"> --}}
                                        </a>
                                    </div>
                                    <div class="cp-rp-posts-text">
                                        <div class="cp-rp-posts-item">
                                        <a href="/article/{{$news->id}}">{{$news->title}}</a>
                                        </div>
                                        <div class="cp-rp-posts-date">{{ Carbon\Carbon::parse($news->created_at)->format('Y-m-d') }}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Benefits End -->
        <!-- Token Sale start -->

        <!-- Token Sale end -->
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script>
        $(document).ready(function() {
         setInterval(function() {
            var page = window.location.href;

           $.ajax({
           url: page+'/comment',
           success:function(data)
           {
            $('#commentarea').html(data);
           }
           });
         }, 5000);
       });
</script>









@endsection
