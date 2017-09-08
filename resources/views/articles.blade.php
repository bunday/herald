@extends('layouts.mother')

@section('content')

        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Articles</h1>
                    </div>
                </div>
            </div>
        </section>


        <div class="clearfix"></div>
       
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="blog-list">

                        @foreach ($art as $article)
                            <li>
                                <div class="info">
                                    <div class="date-box">
                                        <time class="post__date sans-serif uppercase" datetime="{{$article->created_at->diffForHumans()}}">{{$article->created_at->diffForHumans()}}</time>
                                    </div>
                                </div>
                                <div class="preview">
                                    <img src="img/blog/{{$article->image}}" alt="" />
                                    <a href="/viewarticle{{$article->id}}">
                                        <h3 class="blog-title">{{$article->title}}</h3>
                                    </a>
                                </div>

                                @if (Auth::guest())
                                    <div class="meta-info">By: {{$article->owner}} <span>|</span><a href="#">2 Comments</a></div>
                                @elseif (Auth::user()->email=="inioluwahh@gmail.com")
                                    <div class="meta-info">By: {{$article->owner}} <span>|</span><a href="#">2 Comments</a><span>|</span><a href="/delete{{$article->id}}">Delete Article</a></div>
                                @endif
                            </li>
                        @endforeach
                        </ul>
                      

                        <div class="clearfix"></div>

                        <div class="text-center ">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    
                        <div class="widget widget-text">
                            <h3>Our Address</h3>
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe>


                            <address>
                                <span>OSR, Mellamby Hall, University of Ibadan, Ibadan</span>
                                <span><strong>Phone:</strong>(200) 333 8890</span>
                                <span><strong>Email:</strong><a href="mailto:wordheraldassembly@yahoo.com">wordheraldassembly@yahoo.com</a></span>
                                <span><strong>Web:</strong><a href="http://www.wordheraldassembly.com/">www.wordheraldassembly.com</a></span>
                            </address>

                        </div>

                        <div class="widget widget-text">
                            <h3>About WHA</h3>
                            WHA is a family brought together by His love. A family that proclaims God's mercy and stand in His grace.

                        
                        </div>

                    </div>
                </div>

            </div>
        </div>

@endsection
        