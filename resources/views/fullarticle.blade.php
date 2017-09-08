@extends('layouts.articlemother')
@section('content')


        <section id="subheader" data-speed="2" data-type="background" >
        <input type="hidden" id="bg" value="{{$arti->image}}">
        <script type="text/javascript">
        window.onload=changeHeader
            function changeHeader(argument) {
                var subh = document.getElementById("subheader");
                var im = document.getElementById("bg").value;
                subh.style.backgroundImage="url(../img/blog/"+im+")"
            }
        </script>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>{{$arti->title}}</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="blog-read">
                            <div>
                                <div class="info">
                                    <div class="date-box">
                                        <span class="date">{{$arti->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <div class="preview">
                                        <h3 class="blog-title">Written by: <i>{{$arti->owner}}</i></h3>
                                    <p>
                                        
                                        {{$arti->content}}
                                    </p>
                                </div>
                                <!--<div class="meta-info"><a href="#">Promotion</a><span>|</span></div>-->
                            </div>
                        </div>

                        <div id="blog-comment">
                        <h3><span>Comments</span></h3>
                        @foreach ($comment as $c)
                            
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar.jpg" alt="" />
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">{{$c->name}}</span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="comment">{{$c->comment}}  <span>|</span>
                                        <span class="c_date"><i>{{$c->created_at->diffForHumans()}}</i></span>
                                    </div>
                                </li>
                            </ol>
                            @endforeach

                            <div id="comment-form-wrapper">
                                <h3>Leave a Comment</h3>
                                <div class="comment_form_holder">
                                    <form action="/articlecomment" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                        <label>Name <span class="req">*</span></label>
                                        <input type="text" name="name" required class='form-control'><br>

                                        <label>Comment</label>
                                        <textarea cols="10" rows="10" name="comment" class="form-control"></textarea>
                                        <br>
                                        <input type="hidden" name="article_id" value="{{$aid}}">

                                        <p id="btnsubmit">
                                            <input type="submit" value="Comment" class="btn btn-custom" />
                                        </p>



                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4"></div>

                        
                        
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                            
                            
                            <h3>Our Address</h3>
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe>

                            <address>
                                <span>OSR, Mellamby Hall, University of Ibadan, Ibadan</span>
                                <span><strong>Phone:</strong>(200) 333 8890</span>
                                <span><strong>Email:</strong><a href="mailto:wordheraldassembly@yahoo.com">wordheraldassembly@yahoo.com</a></span>
                                <span><strong>Web:</strong><a href="http://www.wordheraldassembly.com/">www.wordheraldassembly.com</a></span>
                            </address>
                           

                            
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2"></div>


                        </div>
                        

                    </div>
                </div>


            </div>
        </div>
        

@endsection