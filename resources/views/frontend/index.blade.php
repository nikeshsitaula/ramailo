@extends('frontend.layouts.app')

@section('content')
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="body-wrapper">

        <div class="offset"></div>
        <div class="light-wrapper">
            <div class="tp-banner-container revolution">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade"><img src="{{asset('img/frontend/art/slider-bg1.jpg')}}" alt=""
                                                        data-bgfit="cover" data-bgposition="left top"
                                                        data-bgrepeat="no-repeat"
                                                        style="z-index:1;background:rgba(0,0,0,5);"/>
                            <div class="tp-caption title sfb" data-x="center" data-y="255" data-speed="900"
                                 data-start="500" data-endspeed="100" data-easing="Sine.easeOut">A Travel & Tours
                                Company
                            </div>
                            <div class="tp-caption lead tp-fade fadeout tp-resizeme" data-x="center" data-y="329"
                                 data-speed="100"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.03"
                                 data-endelementdelay="0"
                                 data-endspeed="100"
                                 data-endeasing="Power1.easeOut"
                                 style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                specializing in tailormade holidays, group tours, luxury travels
                            </div>
                            <div class="tp-caption sfb" data-x="center" data-y="392" data-speed="900" data-start="2500"
                                 data-easing="Sine.easeOut" data-endspeed="100"><a
                                    href="/destinations"
                                    class="btn btn-white">view our Destinations</a></div>
                        </li>
                        <li data-transition="fade"><img src="{{asset('img/frontend/art/slider-bg2.jpg')}}" alt=""
                                                        data-bgfit="cover" data-bgposition="left top"
                                                        data-bgrepeat="no-repeat"/>

                            <div class="tp-caption title sfb" data-x="center" data-y="255" data-speed="900"
                                 data-start="500" data-endspeed="100" data-easing="Sine.easeOut">Book Your Holidays Today
                            </div>
                            <div class="tp-caption lead tp-fade fadeout tp-resizeme" data-x="center" data-y="329"
                                 data-speed="100"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.03"
                                 data-endelementdelay="0"
                                 data-endspeed="100"
                                 data-endeasing="Power1.easeOut"
                                 style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                Go Ramailo this season with us!
                            </div>
                            <div class="tp-caption title small sfb dark-layer" data-x="680" data-y="415"
                                 data-speed="900" data-start="800" data-easing="Sine.easeOut">Your Time is Limited
                            </div>
                            <div class="tp-caption lead sfb light-layer" data-x="680" data-y="480" data-speed="900"
                                 data-start="1500" data-easing="Sine.easeOut">Dare to Dream!
                            </div>
                        </li>
                        <li data-transition="fade"><img src="{{asset('img/frontend/art/slider-bg3.jpg')}}" alt=""
                                                        data-bgfit="cover" data-bgposition="left top"
                                                        data-bgrepeat="no-repeat"/>
                            <div class="tp-caption title sfb" data-x="center" data-y="255" data-speed="900"
                                 data-start="500" data-endspeed="100" data-easing="Sine.easeOut">Millions of
                                happy travellers all around the globe
                            </div>
                            <div class="tp-caption lead tp-fade fadeout tp-resizeme" data-x="center" data-y="329"
                                 data-speed="100"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.02"
                                 data-endelementdelay="0"
                                 data-endspeed="100"
                                 data-endeasing="Power1.easeOut"
                                 style="z-index: 3; width: auto; height: auto; white-space: nowrap;">a
                                An uncharted beauty awaits you
                            </div>
                            <div class="tp-caption sfb" data-x="center" data-y="392" data-speed="900" data-start="3000"
                                 data-endspeed="100" data-easing="Sine.easeOut"><a href="/contact"
                                                                                   class="btn btn-white">Contact Us</a>
                            </div>
                        </li>
                        <li data-transition="fade"><img src="{{asset('img/frontend/art/slider-bg4.jpg')}}" alt=""/>
                            <div class="tp-caption lft boxshadow" data-x="30" data-y="150" data-speed="900"
                                 data-start="1000" data-easing="easeOutExpo">
                                <iframe
                                    src="https://player.vimeo.com/video/367176338?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"
                                    width="712" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen
                                    allowFullScreen></iframe>

                            </div>
                            <div class="tp-caption basic large light-layer sft" data-x="800" data-y="205"
                                 data-speed="900" data-start="1500" data-easing="Sine.easeOut">Ramailo Holidays
                            </div>
                            <div class="tp-caption basic dark-layer sfr" data-x="800" data-y="283" data-speed="900"
                                 data-start="2000" data-easing="Sine.easeOut">Tours
                            </div>
                            <div class="tp-caption basic dark-layer sfr" data-x="800" data-y="323" data-speed="900"
                                 data-start="2500" data-easing="Sine.easeOut">Holidays
                            </div>
                            <div class="tp-caption basic dark-layer sfr" data-x="800" data-y="363" data-speed="900"
                                 data-start="3000" data-easing="Sine.easeOut">Itineraries
                            </div>
                            <div class="tp-caption basic dark-layer sfr" data-x="800" data-y="403" data-speed="900"
                                 data-start="3500" data-easing="Sine.easeOut">Luxury
                            </div>
                            <div class="tp-caption basic dark-layer sfr" data-x="800" data-y="443" data-speed="900"
                                 data-start="4000" data-easing="Sine.easeOut">Affordability
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
                <!-- /.tp-banner -->
            </div>
            <!-- /.tp-banner-container -->
        </div>

        <div class="dark-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3 class="section-title">LATEST TRIPS</h3>
                        <div class="lead bm25">our latest itineraries</div>
                        <p>Do you find it difficult to search for different packages for some specific destination on a
                            whole continent? We have compiled a list of our latest packages to allow for quick and easy
                            searching. These include individual and group tour packages. We also provide specific
                            packages made specifically for you.</p>
                        <div class="divide20"></div>
                        <a href="/itineraries" class="btn">View All News</a></div>
                    <div class="col-md-9 col-sm-12">
                        <div class="owl-posts">
                            @foreach($everydata as $iti)
                                <div class="item post">
                                    <figure><a href="/itineraries/show/{{$iti->id}}">
                                            <div class="text-overlay">
                                                <div class="info">Read More</div>
                                            </div>
                                            <img src="/storage/itineraryimages/{{$iti->itineraryimage}}" alt=""
                                                 style="width: 580px !important; height: 280px !important;"/>
                                        </a></figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="/itineraries/show/{{$iti->id}}">{{$iti->itineraryname}}</a></h3>
                                        <p>{{str_limit(strip_tags($iti->description),100,'...')}}</p>
                                        <div class="footer-meta"><span
                                                class="date pull-left">{{$iti->created_at}}</span> <span
                                                class="like pull-right"><a href="/itineraries"><i
                                                        class="icon-heart"></i> 23</a></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dark-wrapper -->


        <div class="black-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3 class="section-title">Trending Destinations</h3>
                        <div class="lead bm25">check out our latest and greatest destinations</div>
                        <p>We’ve combined our experience throughout the years to create trips that’ll give you a taste
                            of some of the most exciting
                            destinations this world has to offer. where do you want to travel? pack your bags and GO!
                            view more to find out. </p>
                        <div class="divide20"></div>
                        <a href="/destinations" class="btn">View More Destinations</a></div>
                    <div class="col-md-9 col-sm-12">
                        <ul class="photoset">
                            <li>
                                <figure><a href="/itineraries/?country=Nepal">
                                        <div class="text-overlay">
                                            <div class="info">Nepal</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/nepal.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                            <li>
                                <figure><a href="/itineraries/?country=India">
                                        <div class="text-overlay">
                                            <div class="info">India</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/india.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                            <li>
                                <figure><a href="/itineraries/?country=Usa">
                                        <div class="text-overlay">
                                            <div class="info">USA</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/usa.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                            <li>
                                <figure><a href="/itineraries/?country=France">
                                        <div class="text-overlay">
                                            <div class="info">France</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/france.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                            <li>
                                <figure><a href="/itineraries/?country=Thailand">
                                        <div class="text-overlay">
                                            <div class="info">Thailand</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/thailand.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                            <li>
                                <figure><a href="/itineraries/?country=Singapore">
                                        <div class="text-overlay">
                                            <div class="info">Singapore</div>
                                        </div>
                                        <img src="{{asset('img/frontend/art/singapore.jpg')}}" alt=""
                                             /> </a>
                                </figure>
                            </li>
                        </ul>
                        <!-- /.photoset -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.black-wrapper -->


        <div class="light-wrapper">
            <div class="container inner">
                <h3 class="section-title text-center">About Us</h3>
                <div class="lead text-center">who we are</div>
                {{--<div class="text-center">--}}
                {{--<figure><img src="{{asset('img/frontend/art/product-image.png')}}" alt=""/></figure>--}}
                {{--</div>--}}
                <div class="thin text-center">
                    <p>We are Ramailo Holidays. We do epic Euro trips, big game safaris, American road trips, sailing
                        voyages,mountain treks, outback explorations and loads of other global adventures for travellers
                        and more.
                    </p>
                    <p>
                        We are a creative luxury travel company who take a thoughtful approach to creating tailor-made
                        holidays.
                    </p>
                    <div class="divide10"></div>
                    <a href="/about" class="btn btn-gray fixed-width">Learn More</a></div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dark-wrapper -->

        <div class="parallax parallax1 customers">
            <div class="container inner text-center">
                <div class="testimonials owl-carousel thin">
                    <div class="item">
                        <blockquote>
                            <p>And then there is the most dangerous risk of all —
                                the risk of spending your life not doing what you want on the bet you can buy yourself
                                the freedom to do it later.
                                <small>- Randy Komisa -</small>
                            </p>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <blockquote>
                            <p>Travel is fatal to prejudice, bigotry, and narrow mindedness., and many of our people
                                need it sorely on these accounts.
                                <small>- Mark Twain -</small>
                            </p>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <blockquote>
                            <p>The real voyage of discovery consists not in seeking new landscapes, but in having new
                                eyes.
                                <small>- Marcel Proust -</small>
                            </p>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <blockquote>
                            <p>Travel doesn't become adventure until you leave yourself behind.
                                <small>- Martin Rubin -</small>
                            </p>
                        </blockquote>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.testimonials -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.parallax -->

        <div class="dark-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3 class="section-title">From the Blog</h3>
                        <div class="lead bm25">our posts that got most attention</div>
                        <p>The travel blog of Ramailo Holidays features tips and advice on how you can travel better,
                            cheaper, and smarter so you can explore the world on a budget.</p>
                        <div class="divide20"></div>
                        <a href="/blog" class="btn">View All News</a></div>
                    <div class="col-md-9 col-sm-12">
                        <div class="owl-posts">
                            @foreach($blogdata as $bg)
                                <div class="item post">
                                    <figure><a href="/blog/show/{{$bg->id}}">
                                            <div class="text-overlay">
                                                <div class="info">Read More</div>
                                            </div>
                                            <img src="/storage/coverimages/{{$bg->coverimageone}}" alt=""
                                                 style="width: 580px !important; height: 280px !important;"/>
                                        </a></figure>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="/blog/show/{{$bg->id}}">{{$bg->title}}</a></h3>
                                        <p>{{str_limit(strip_tags($bg->description),100,'...')}}</p>
                                        <div class="footer-meta"><span
                                                class="date pull-left">{{$bg->created_at}}</span> <span
                                                class="like pull-right"><a href="/blog"><i
                                                        class="icon-heart"></i> 23</a></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dark-wrapper -->
    </div>
    <!-- /.body-wrapper -->
@endsection

