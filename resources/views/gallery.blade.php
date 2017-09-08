@extends('layouts.mother')
@section ('content')

        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Our Gallery</h1>
                    </div>
                </div>
            </div>
        </section>

<br>
        <div class="clearfix"></div>

        <div id="content">
            <div class="container">
                <div class="row">
                    
                        <div class="blog-list" >
                        @foreach($thisgallery as $gal)
                        <div class="col-md-3">
                            <div class="preview item"><a href="img/gallery/{{$gal->image}}" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/{{$gal->image}}" alt="" />
                            </div>

                            @if (Auth::guest())
                            @elseif (Auth::user()->email=="inioluwahh@gmail.com")
                            <div class="meta-info"><a href="/picdelete{{$gal->id}}">Delete Picture</a></div>
                            @endif
                        </div>
                        @endforeach
                        </div>
                    
                </div>
            </div>
        </div>
            <div class="clearfix"></div>

@endsection