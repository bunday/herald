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

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                       
                        @foreach($messages as $message)
                        <div>
                          <h5><label class="text-info">{{$message->original_filename}}</label></h5><audio src="storage/{{$message->filename}}" id="{{$message->id}}" controls ></audio>
                        </div>
                        @endforeach
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