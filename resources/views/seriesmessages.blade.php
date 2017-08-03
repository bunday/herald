@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li class="active">{{$s}}</li>
                    </ol>
                </div>
            </div>
                <div class="col-md-5">
                       
                    @foreach($messages as $message)
                       <div>
                        <h5><label class="text-info">{{$message->original_filename}}</label></h5><audio src="storage/{{$message->filename}}" id="{{$message->id}}" controls ></audio>  
                        </div>
                        @endforeach
                </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <h5 class="text-center">Comment</h5>
                            @foreach($comments as $c)
                            <p class="box__text">{{$c->comment}}</p> - <small><i>{{$c->name}}</i>  {{$c->created_at->diffForHumans()}}</small>
                            @endforeach

                            <form action="/comment" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group col-md-12">
                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                            <input type="hidden" name="sid" value="{{$sid}}">
                            <textarea name="comment" placeholder="Enter Comment Here" class="form-control" required></textarea><br>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-sm">Add Comment</button>
                            </div>
                            <div class="col-md-3"></div>
                        </form>
                    </div>
                </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
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
</script>
@endsection