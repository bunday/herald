@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>WHA</h3></div>

                
                <div class="panel-body">
                    <h4>{{$arti->title}}</h4> <br> {{$arti->content}} <br>uploaded  {{$arti->created_at->diffForHumans()}} <br><br> 
                     <h5 class="text-center">Comment</h5>
                        @foreach($comment as $c)
                            <p class="box__text">{{$c->comment}}</p> - <small><i>{{$c->name}}</i>  {{$c->created_at->diffForHumans()}}</small>
                        @endforeach 

                            <div class="panel-body">
                            <form action="/articlecomment" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="text" name="name" placeholder="Name" required class='form-control'><br>
                            <textarea name="comment" placeholder="Enter your comment here" required class="form-control"></textarea><br>
                            <input type="hidden" name="article_id" value="{{$aid}}">

                        <div class="col-md-2"> </div>
                        
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary" >Comment</button>
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