@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="text-info text-center">Message</h4></div>

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-7">
                        <h5 class="text-center">Upload a Message</h5>
                        <form action="/upload" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                    <select class="form-control" name="series_title">
                        @foreach($series as $s)
                        <option value="{{$s->id}}">{{$s->title}}</option>
                        @endforeach
                    </select><br>
                    
                    <input type="file" name="message" required class="form-control"><br>
                    <button class="btn btn-primary">Upload</button>
                    </form>
                    </div>
                    <div class="col-md-5">
                    <h5 class="text-center">Add A Series</h5>
                    <form action="/addseries" method="POST">
                    {{csrf_field()}}
                        <div class="form-group col-md-12">
                            <input type="text" name="newseries" class="form-control" required>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-sm">Add A Series</button>
                        </div>
                        <div class="col-md-3"></div>
                    </form>
                        
                    </div>
                </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
@endsection
