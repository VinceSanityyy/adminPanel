
@extends('coindeoro.app')

@section('content')
<div class="blog-section p-tb white-bg" id="press">
        <div class="container">
             <div class="sec-title text-center"><h3>We are in the Media</h3></div>
             <div class="row blogmain">
                <div class="blog-slider style-2 owl-carousel">
                    <div class="item">
                        <div class="blog-list">
                            <div class="blog-list-img"><a href="{{ url('/newsmain') }}"><img src="{{asset('landing/images/blog-large1.jpg')}}"height="350" alt=""></a></div>
                            <div class="blog-date">Mar  <span>21</span> 2018</div>
                            <div class="blog-list-desc">
                                <h4><a href="cp-gold-single-post-with-right-sidebar.html">First Long-Term Bitcoin Option Price of $10,000 Launched by STMX</a></h4>
                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-list">
                            <div class="blog-list-img"><a href="cp-gold-single-post-with-no-sidebar.html"><img src="images/blog-large2.jpg"height="350" alt=""></a></div>
                            <div class="blog-date">Feb  <span>18</span> 2018</div>
                            <div class="blog-list-desc">
                                <h4><a href="cp-gold-single-post-with-no-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
                            </div>
                        </div>
                    </div>

                    {{-- {!! $chart->render() !!} --}}

                    <div class="item">
                        <div class="blog-list">
                            <div class="blog-list-img"><a href="cp-gold-single-post-with-left-sidebar.html"><img src="images/coindeorolayout.png"height="350" alt=""></a></div>
                            <div class="blog-date">June  <span>11</span> 2019</div>
                            <div class="blog-list-desc">
                                <h4><a href="cp-gold-single-post-with-left-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-list">
                            <div class="blog-list-img"><a href="cp-gold-single-post-with-left-sidebar.html"><img src="images/blog-large4.jpg"height="350" alt=""></a></div>
                            <div class="blog-date">Jan <span>12</span> 2018</div>
                            <div class="blog-list-desc">
                                <h4><a href="cp-gold-single-post-with-left-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>



@endsection
