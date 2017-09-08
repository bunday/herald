@extends('layouts.mother')
@section('content')

        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Meetings</h1>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="clearfix"></div>

        <div id="content">

            <div class="container">
                <div class="row">
                 
                    <div class="col-md-4 event-item">
                        <div class="inner">
                            <div class="left-col">
                                <img src="img/events/bible1.jpg" alt="">
                            </div>
                            <div class="right-col">
                                
                                <span class="month">TUESDAYS</span>
                                <span class="time">07:00pm</span>
                                <span class="time">Mellamby OSR</span>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="#">
                                <h2>Bible Study</h2>
                            </a>
                            <span class="text">The teaching of God's word in an atmosphere of love, getting edified and also edifying others.
                            </span>
                        </div>
                    </div>
                    
                    <div class="col-md-4 event-item">
                        <div class="inner">
                            <div class="left-col">
                                <img src="img/events/prayer1.jpg" alt="">
                            </div>
                            <div class="right-col">
                                
                                <span class="month">FRIDAYS</span>
                                <span class="time">7:00pm</span>
                                <span class="time">Chapel Ground</span>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="#">
                                <h2>Prayer Meeting</h2>
                            </a>
                            <span class="text">Pray, so that you will pray. A time to come together and spend some time communing with our father. Indeed prayer works. 
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4 event-item">
                        <div class="inner">
                            <div class="left-col">
                                <img src="img/events/bible2.jpg" alt="">
                            </div>
                            <div class="right-col">
                               
                                <span class="month">SUNDAYS</span>
                                <span class="time">12:30pm</span>
                                <span class="time">Mellamby OSR</span>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="#">
                                <h2>Bible Study</h2>
                            </a>
                            <span class="text">The teaching of God's word in an atmosphere of love, getting edified and also edifying others.
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

@endsection