@extends('coindeoro.newsapp')

@section('content')
<div class="midd-container">
        <!-- Page title Section Start -->
        <div id="page-title" class="page-title-block" style="background-image:url{{asset('landing/images/our-mission.jpg')}};">
          <div class="container">
            <h1 class="post-title">First Long-Term Bitcoin Option Price of $10,000 Launched by STMX</h1>
            <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="current">First Long-Term Bitcoin Option Price of $10,000 Launched by STMX</li>
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
                      <span class="post-meta-date">February 19, 2018</span>
                      <span class="post-meta-author">
                        <span>By</span>
                        <span class="post-meta-author-link"><a href="#">admin</a></span>
                      </span>
                    </div>
                    <div class="img-wrapper">
                      {{-- <img src="{{asset('landing/images/blog-img1.jpg')}}" alt="" /> --}}
                    </div>
                    <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 			elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisai. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    <blockquote>…Lorem Ipsum proin gravida nibh vel velit auctor aliquet Aenean sollicitudin lorem quis bibendum auctor elit.</blockquote>
                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisai. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.</p>
                    <p>Mauris in erat justo. eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisai. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                  </div>
                  <div class="post-tags-list">
                        <a href="#" class="tag-cloud-link">Bitcoin</a>
                        <a href="#" class="tag-cloud-link">Blockchain</a>
                        <a href="#" class="tag-cloud-link">Cryptocurrency</a>
                        <a href="#" class="tag-cloud-link">Ethereum</a>
                        <a href="#" class="tag-cloud-link">ICO</a>
                        <a href="#" class="tag-cloud-link">Investment</a>
                        <a href="#" class="tag-cloud-link">Marketing</a>
                  </div>
                  <div id="comments" class="comments-area">
                    <div id="respond" class="comment-respond">
                      <h3 id="reply-title" class="comment-reply-title">
                        <div class="leave-a-comment-title">Leave a <span>comment </span></div>
                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
                      </h3>
                      <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                        <div class="row">
                          <div class="col-md-4 col-12 form-group">
                            <input type="text" name="author" id="comment-author" value="" size="22" tabindex="1" aria-required="true" placeholder="Name *">
                          </div>
                          <div class="col-md-4 col-12 form-group">
                            <input type="text" name="email" id="comment-email" value="" size="22" tabindex="2" aria-required="true" placeholder="Mail *">
                          </div>
                          <div class="col-md-4 col-12 form-group">
                            <input type="text" name="url" id="comment-url" value="" size="22" tabindex="3" placeholder="Website">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 form-group">
                            <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" placeholder="Comment *"></textarea>
                          </div>
                        </div>
                        <div class="form-submit">
                          <button name="submit" type="submit" id="submit" class="btn" value="Send Comment">Send Comment</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3 sidebar">
                <div class="widget-area">
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
                  </aside>
                  <aside id="recent_posts-1" class="widget Recent_Posts">
                      <h4 class="widget-title">Recent posts</h4>
                        <ul class="posts  styled">
                            <li>
                                <div class="cp-rp-posts-image">
                                    <a href="#">
                                        <img src="{{asset('landing/images/blog-small.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="cp-rp-posts-text">
                                    <div class="cp-rp-posts-item">
                                        <a href="#">
                                            Pay for Purchases Directly with Your Cryptocurrency
                                        </a>
                                    </div>
                                    <div class="cp-rp-posts-date">January 20, 2018</div>
                                </div>
                            </li>
                            <li>
                                <div class="cp-rp-posts-image">
                                    <a href="#">
                                        <img src="{{asset('landing/images/blog-small.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="cp-rp-posts-text">
                                    <div class="cp-rp-posts-item">
                                        <a href="#">Pay for Purchases Directly with Your Cryptocurrency</a>
                                    </div>
                                    <div class="cp-rp-posts-date">April 3, 2018</div>
                                </div>
                            </li>
                            <li>
                                <div class="cp-rp-posts-image">
                                    <a href="#">
                                        <img src="{{asset('landing/images/blog-small.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="cp-rp-posts-text">
                                    <div class="cp-rp-posts-item">
                                        <a href="#">Pay for Purchases Directly with Your Cryptocurrency</a>
                                    </div>
                                    <div class="cp-rp-posts-date">April 3, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                  <aside id="tag_cloud-1" class="widget widget_tag_cloud">
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
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection






