@extends('layouts.mother')

@section('content')
        <div id="slider">
         
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            
                            <img src="img-rev-slider/bg-3.jpg" alt="">
                            <div class="tp-caption border-v lft"
                                data-x="540"
                                data-y="center"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption custom-font-1 lft"
                                data-x="600"
                                data-y="140"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                In the name of
                            </div>

                            <div class="tp-caption lft custom-font-2"
                                data-x="600"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Jesus 
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="600"
                                data-y="240"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                Salvation is found in no one else, for there is no other name under heaven given to mankind<br>
                                by which we must be saved. <br>Acts 4:12
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                           
                            <img src="img-rev-slider/bg-1.jpg" alt="">
                            <div class="tp-caption border-v lft"
                                data-x="540"
                                data-y="center"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption custom-font-1 lft"
                                data-x="600"
                                data-y="140"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                Transforming Live
                            </div>

                            <div class="tp-caption lft custom-font-2"
                                data-x="600"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Restoring Hope 
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="600"
                                data-y="240"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                Transforming lives and societies through the gospel, and bringing all to the light.<br>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            <img src="img-rev-slider/bg-2.jpg" alt="">
                            <div class="tp-caption custom-font-1 lft"
                                data-x="left"
                                data-y="140"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                Put Your Faith 
                            </div>

                            <div class="tp-caption sfr custom-font-2"
                                data-x="left"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Into Action 
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="left"
                                data-y="240"
                                data-speed="800"
                                data-start="1200"
                                data-easing="easeInOutCubic">
                                Put your faith into action today and let your actions be fueled by your faith.<br>
                            </div>
                        </li>

                        
                    </ul>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
        <div id="content" class="no-padding">
            <section id="page-events" class="no-padding">
                <div class="fullwidth">
                    <div class="one-fourth text-center">
                        <div class="title-area wow slideInLeft">
                            <span>UPCOMING</span>
                            <h1>EVENTS</h1>
                        </div>
                    </div>

                    <div class="three-fourth">
                        <div class="fx custom-carousel-1">
                        @foreach($event as $e)
                            <div class="item">
                                <div class="overlay">
                                    <span class="time"><b>{{$e->date}}</b></span>
                                    <a href="events-calendar.html">
                                        <h3><b>{{$e->meetingname}}</b></h3>
                                    </a>
                                    <span class="desc">{{$e->about}}
                                    </span>
                                </div>
                                <img src="img/events/{{$e->image}}" alt=" ">
                            </div>
                        @endforeach

                </div>
                <div class="clearfix"></div>

            </section>

            <section id="countdown-container" data-speed="5" data-type="background">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 wow fadeInLeft">
                            <h3>{{$thisevent->meetingname}}</h3>
                            <span class="time">{{ Carbon\Carbon::parse($thisevent->date)->toFormattedDateString()  }}</span>
                            <span style="display:none;" id="holder" class="time">{{$thisevent->date}}</span>
                        </div>

                        <div  class="col-md-9 wow fadeInRight" data-wow-delay=".1200s">
                            <div class="countdown" id="defaultCountdown"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="latest-sermons">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                            <h2>Latest Sermons</h2>
                            <div class="divider-double"></div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                        @foreach($entry as $e)
                            <div class="custom-col-3 wow flipInX">
                                <div class="left-col">
                                    <img src="img/sermons/pic%20(1).jpg" alt="" class="img-responsive">
                                </div>
                                <div class="mid-col">
                                    <a href="#">
                                        <h3>{{$e->original_filename}}</h3>
                                    </a>
                                    <div class="details"><span> By: <a href="#">XX</a></span><span> | </span><span><a href="#">{{$e->created_at->diffForHumans()}}</a></span></div>
                                </div>
                                <div class="right-col">
                                    <audio src="storage/{{$e->filename}}" id="{{$e->id}}" controls></audio>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section id="page-blog" class="no-padding">

                <div class="fullwidth">
                    <div class="one-fourth text-center">
                        <div class="title-area wow slideInLeft">
                            <span>Latest</span>
                            <h1>Article</h1>
                        </div>
                    </div>

                    <div class="three-fourth">
                        <div class="custom-carousel-2">
                        @foreach($article as $a)
                            <div class="item-blog">
                                <div class="inner">
                                    <span class="date">{{$a->created_at->diffForHumans()}}</span>
                                    <a href="/viewarticle{{$a->id}}">
                                        <h3>{{$a->title}}</h3>
                                    </a><br>
                                    <span>Written By:<i>{{$a->owner}}</i></span>
                                    <a class="btn btn-slider btn-outline-primary"  href="#">Read More</a>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                    
                </div>
                <div class="clearfix"></div>
            </section>


            <section id="section-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                            <h2>The Church</h2>
                            <div class="divider-double"></div>
                        </div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".5s">
                            <img src="img/misc/pic-1.jpg" class="img-responsive" alt="">
                            <h3>Our Community</h3>
                            The Community is in need of the gospel.
                            <br>
                            <br>

                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".75s">
                            <img src="img/misc/pic-2.jpg" class="img-responsive" alt="">
                            <h3>Church Mission</h3>
                            The Mission is to propagate the gospel to the unbelievers and engage in the teaching of God's word to the understandng of the people.
                            <br>
                            <br>
                            <!--<a href="#" class="st-btn">Read More</a>-->
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="1s">
                            <img src="img/misc/pic-3.jpg" class="img-responsive" alt="">
                            <h3>Participate With Us</h3>
                            For we are all members of one body which is Christ. Come and enjoy the word of God!
                            <br>
                            <br>
                             <!--<a href="#" class="st-btn">Read More</a>-->
                        </div>
                    </div>
                </div>
            </section>


         <!--   <section id="section-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>From Gallery</h2>
                            <div class="divider-double"></div>
                        </div>

                        <div id="gallery-isotope" class="col-md-12 wow fadeInUp" data-wow-delay=".25s">
                            <div class="item long-pic">
                                <a href="img/gallery/wh6.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/wh6.jpg" alt="">
                            </div>

                            <div class="item small-pic">
                                <a href="img/gallery/wh4.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/wh4.jpg" alt="">
                            </div>

                            <div class="item wide-pic">
                                <a href="img/gallery/wh7.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/wh7.jpg" alt="">
                            </div>

                            <div class="item wide-pic">
                                <a href="img/gallery/wh5.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/wh5.jpg" alt="">
                            </div>

                            <div class="item small-pic">
                                <a href="img/gallery/pic%20(2).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/pic%20(2).jpg" alt="">
                            </div>


                        </div>
                    </div>
                </div>
            </section>-->

            <section id="section-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testi-carousel" class="testi-slider text-center wow fadeInUp">
                                <div class="item">
                                    <img src="img/testi/drama1.png" alt="" class="img-circle">
                                    <blockquote>...gathering in an atmosphere of love</blockquote>
                                    <span class="testi-by">WORD HERALD FAMILY</span>
                                </div>
                                <div class="item">
                                    <img src="img/testi/drama3.png" alt="" class="img-circle">
                                    <blockquote>...the word works </blockquote>
                                    <span class="testi-by">WORD HERALD FAMILY</span>
                                </div>
                                <div class="item">
                                    <img src="img/testi/drama2.png" alt="" class="img-circle">
                                    <blockquote>
                                        Done! Finished!! Accomplished!!!

                                    </blockquote>
                                    <span class="testi-by">WORD HERALD ASSEMBLY</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
       

        </div>

@endsection

