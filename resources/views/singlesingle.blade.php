@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="/singles">Singles</a></li>
                        <li class="active">{{$message->filename}}</li>
                    </ol>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                           
                            
                             <h5><label class="text-info">{{$message->original_filename}}</label></h5><audio src="storage/{{$message->filename}}" id="{{$message->id}}" controls ></audio>
                            

                        </div>
                    </div>   
                     <hr>
                    <div class="row">
                        <div class="col-md-4">
                        <h5 class="text-left">Comment</h5><hr>
                        @foreach($comments as $c)
                            <p class="box__text">{{$c->comment}}</p> - <small><i>{{$c->name}}</i>  {{$c->created_at->diffForHumans()}}</small>
                            @endforeach
                        <form action="/commentsingle" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                             <input type="hidden" name="sid" value="{{$message->id}}">
                            <textarea name="comment" placeholder="Enter Comment Here" class="form-control" required></textarea><br>
                            <button class="btn btn-primary btn-sm">Comment</button><br><br>
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