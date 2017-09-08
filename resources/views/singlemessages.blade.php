@extends('layouts.mother')
@section('content')

<section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>SINGLE MESSAGES</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @foreach($messages as $msg)
                        <div class="custom-col-3">
                            <div class="left-col"></div>
                            <div class="mid-col">
                                <a href="#">
                                    <h3>{{$msg->original_filename}}</h3>
                                </a>
                                    
                            </div>
                            <div class="right-col">
                                <div class="details"><span>By: XX</span> <span>|</span><span><a href="/singlemessages{{$msg->id}}"> View comment</a></span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


@endsection

