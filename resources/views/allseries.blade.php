@extends('layouts.mother')

@section('content')

        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Sermons</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                            @foreach ($entry as $e)
                            @if($e->id ==1)
                            @else
                            <div class="custom-col-3">
                                <div class="left col"></div>
                                <div class="mid-col">
                                <a role="button" class="btn-link" href="/seriesmessages{{$e->id}}">
                                    <h3>{{$e->title}}</h3>
                                </a>
                                </div>
                                <div class="right-col"></div>
                                <!--<div class="details"><span>By <a href="#">John Rook</a>, October 12, 2014.</div>
                                </div>
                                <div class="right-col">
                                <a href="#"><i class="fa fa-video-camera"></i></a>
                                <a href="#"><i class="fa fa-volume-up"></i></a>
                                <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                                </div>-->
                            </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection


