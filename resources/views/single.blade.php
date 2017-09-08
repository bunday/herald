@extends('layouts.mother')

@section('content')

<section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>SINGLE MESSAGES</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-col-2">
                                
                                <div class="left-col">
                                       <h3>{{$message->original_filename}}</h3>
                                    
                                </div>
                                <div class="right-col">
                                    <audio src="storage/{{$message->filename}}" id="{{$message->id}}" controls></audio>
                                </div>
                                
                                </div>
                            </div>
                                

                    <div class="col-md-6">
                        <div id="blog-comment">
                            <h3><span>Comments</span></h3>
                                @foreach ($comments as $c)
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
                                    <form action="/commentsingle" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <label>Name <span class="req">*</span></label>
                                    <input type="text" name="name" required class='form-control'><br>

                                    <label>Comment</label>
                                    <textarea cols="10" rows="10" name="comment" class="form-control"></textarea>
                                   
                                    <input type="hidden" name="sing_id" value="{{$sing_id}}">

                                    <p id="btnsubmit">
                                    <input type="submit" value="Comment" class="btn btn-custom" />
                                    </p>



                                    </form>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection