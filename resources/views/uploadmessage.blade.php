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
                        <h4>Upload a Message</h4>
                        <form action="/upload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type='text' name='title' placeholder='Title of Series'><br>
                    <input type="file" name="message" required><br>
                    <input type="submit" value="Upload">
                    </form>
                    </div>
                </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
