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
                      <img src="{{asset('landing/images/blog-img1.jpg')}}" alt="" />
                    </div>
                <p>{{$news->body}}</p>
                  </div>

                  <a href="{{ url('/') }}"></span>Back to home</a>
                  <br><br><br>


                  <h4 class="comments-title" > <span class="fas fa-comment-alt"></span>
                    {{$news->comments()->count()}}
                    Comments</h4>
                  {{-- <div class="post-tags-list">
                        <a href="#" class="tag-cloud-link">Bitcoin</a>
                        <a href="#" class="tag-cloud-link">Blockchain</a>
                        <a href="#" class="tag-cloud-link">Cryptocurrency</a>
                        <a href="#" class="tag-cloud-link">Ethereum</a>
                        <a href="#" class="tag-cloud-link">ICO</a>
                        <a href="#" class="tag-cloud-link">Investment</a>
                        <a href="#" class="tag-cloud-link">Marketing</a>
                  </div> --}}
                  <div class="row" >
                      <div class="col-md-12 col-md-offset-2" style="overflow-y: scroll; height: 400px;
                      width: 400px; "  >

                          @foreach($news->comments as $comment)
                            <div class="comment" style="background-color: #f6efef;" >
                          <div class="author-info">
                              <img src={{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=retro" }} class="author-image" id="image">

                              <div class="author-name">
                                   <h4>{{$comment->name}} </h4>
                                   <p class="author-time"> {{  date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                              </div>
                          </div>
                            <div class="comment-content">
                                    {{$comment->comment}}
                            </div>
                            </div>
                          @endforeach
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
                           {!! Form::text('name', null, ['class'=>'form-control'])!!}
                          </div>
                          <div class="col-md-4 col-12 form-group">
                            {{Form::label('email', 'Email:') }}
                            {!!Form::text('email', null, ['class'=>'form-control'])!!}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 form-group">
                            {!! Form::label('comment', 'Comment:') !!}
                            {!! Form::textarea('comment', null, ['class'=>'form-control'])!!}


                          </div>
                        </div>
                        <div class="form-submit">
                          {!!Form::submit ('Add Comment', ['class'=>'btn btn-warning'])!!}
                        </div>
                      {{-- </form> --}}
                      {!!Form::close()!!}
                    </div>
                  </div>
                </article>

              </div>
              <div class="col-md-3 sidebar">
                    {{-- <img src="{{asset('img')}}/{{$news->image}}" height="300" alt=""> --}}
                {{-- <div class="widget-area">
                  <aside id="categories-1" class="widget widget_categories">
                    <h4 class="widget-title">Categories</h4>
                    <ul>
                      <li><a href="#" title="View all posts filed under BitCoin">BitCoin</a></li>
                      <li><a href="#" title="View all posts filed under ICO &amp; Cryptocurrency">ICO &amp; Cryptocurrency</a></li>
                      <li><a href="#" title="View all posts filed under Investment">Investment</a></li>
                      <li><a href="#" title="View all posts filed under Marketing">Marketing</a></li>
                      <li><a href="#" title="View all posts filed under Tokens">Tokens</a></li>
                      <li><a href="#" title="View all posts filed under Uncategorized">Uncategorized</a></li>
                    </ul>
                  </aside> --}}
                  <aside id="recent_posts-1" class="widget Recent_Posts">
                      <h4 class="widget-title">Recent news</h4>
                        <ul class="posts  styled">
                            @foreach($all->slice(3) as $news)
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
                  {{-- <aside id="tag_cloud-1" class="widget widget_tag_cloud">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tagcloud">
                          <a href="#" class="tag-cloud-link">Bitcoin</a>
                        <a href="#" class="tag-cloud-link">Blockchain</a>
                        <a href="#" class="tag-cloud-link">Cryptocurrency</a>
                        <a href="#" class="tag-cloud-link">Ethereum</a>
                        <a href="#" class="tag-cloud-link">ICO</a>
                        <a href="#" class="tag-cloud-link">Investment</a>
                        <a href="#" class="tag-cloud-link">Marketing</a>
                    </div>
                  </aside> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Benefits End -->
        <!-- Token Sale start -->

        <!-- Token Sale end -->
      </div>

@endsection
