@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                       
                        @foreach($series as $seris)
                        <div>
                        <table>
                            <td>{{$series->id}}</td>  
                            <td>{{$series->title}}</td>
                        </table>
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
@endsection