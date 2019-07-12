
@foreach($news->comments as $comment)
<div class="comment" style="background-color: #f6efef;" >
<div class="author-info">
  <img src={{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=retro" }} class="author-image" id="image">

  <div class="author-name">
       <h4>{{$comment->name}} </h4>
       <p class="author-time"> {{  date('jS F, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
  </div>
</div>
<div class="comment-content">
        {{$comment->comment}}
</div>
</div>
@endforeach


