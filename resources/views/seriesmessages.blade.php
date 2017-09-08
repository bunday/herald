@extends('layouts.mother')

@section('content')

<section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Sermons</h1>
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
                            <div class="col-md-7">
                                @foreach($messages as $msg)
                                <div class="custom-col-3">
                                    <div class="left-col">
                                    <a href="#">
                                       <h3>{{$msg->original_filename}}</h3>
                                    </a>
                                    <!--<div class="details"><span>By <a href="#">John Rook</a>, October 12, 2014.</div>-->
                                    </div>
                                 <div class="mid-col">
                                    <audio src="storage/{{$msg->filename}}" id="{{$msg->id}}" controls></audio>
                                </div>
                                <div class="right-col">
                                    
                                </div>
                                </div>
                        @endforeach
                            </div>
                            
                            <div class="col-md-5">
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
                                    <form action="/comment" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                        <label>Name <span class="req">*</span></label>
                                        <input type="text" name="name" required class='form-control'><br>

                                        <label>Comment</label>
                                        <textarea cols="5" rows="5" name="comment" class="form-control"></textarea>
                                        <br>
                                        <input type="hidden" name="sid" value="{{$sid}}">

                                        <p id="btnsubmit">
                                            <input type="submit" value="Comment" class="btn btn-info" />
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


@endsection

<!--<script type="text/javascript">
    function playsong(id){
        alert("here")
        this.showall();
        var track = document.getElementById(myword);
        track.play();
        //alert(track);
        
    }
    function stopsong(myword){
        var track = document.getElementById(myword);
        track.pause();
        track.currentTime = 0;
        //alert(track);
        
    }
    function showall(){
        var tracks = document.getElementsByTagName('audio');
        for (var i = tracks.length - 1; i >= 0; i--) {
            track[i].pause();
        }
    }
</script>-->
