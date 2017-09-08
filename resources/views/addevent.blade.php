@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="text-info text-center">Add an event</h4></div>
                    <div class="panel-body">
                    <div class="col-md-2"> </div>
                    <div class="col-md-8">              
                                    
                        <form action="/addevents" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" name="meetingname" placeholder="Name of meeting" required class='form-control'><br>
                        <input type="date" name="date" placeholder="Date of meeting" min="2017-09-09" required class='form-control'><br>
                        <input type="text" name="about" placeholder="About" required class='form-control'><br>
                        <input type="file" name="image" required class='form-control'><br>
                    <div class="col-md-2"> </div>
                        
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success" >Add</button>
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
@endsection
