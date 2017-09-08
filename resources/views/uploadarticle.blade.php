@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="text-info text-center">Upload Article</h4></div>

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-2"> </div>
                    <div class="col-md-8">
                                            
                            <div class="panel-body">
                            <form action="/articlesupload" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="text" name="title" placeholder="Title" required class='form-control'><br>
                            <input type="text" name="owner" placeholder="Written By" required class='form-control'><br>
                            <input type="file" name="image" required class='form-control'><br>
                            <textarea name="content" required class="form-control"></textarea><br>
                    <div class="col-md-2"> </div>
                        
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary" >Upload</button>
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

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h4 class="text-info text-center">Upload Picture</h4></div>
                            <div class="panel-body">
                                <div class="col-md-2"> </div>
                                <div class="col-md-8">              
                                    
                                    <form action="/gallery" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="file" name="image" required class='form-control'><br>
                            <div class="col-md-2"> </div>
                        
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" >Upload</button>
                                </div>
                                <div class="col-md-3"></div>
                   
                                </form>
                                </div>
                            </div>
                        </div>
                </div>
                
</div>
@endsection
