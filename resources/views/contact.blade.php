@extends('layouts.mother')
@section('content')

        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>



        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" name="form1" method="post" action="/contactus">



                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                    </p>



                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <div class="contact-info">

                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>

                            <div class="divider-line"></div>

                            <span class="title">Telephone:</span>
                            08
						
						<div class="divider-line"></div>

                            <span class="title">Church Time:</span>
                            <b>Sunday meeting:</b> 12:30pm<br>
                            <b>Tuesday meeting:</b> 07:00pm<br>
                            <b>Friday meeting:</b>  07:00pm<br>

                            <div class="divider-line"></div>

                            <span class="title">Address:</span>
                            <b>Sundays & Tuesdays:</b> Mellamby OSR, University of Ibadan.<br> 
                            <b>Fridays:</b> Chapel ground, University of Ibadan.
						
                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection