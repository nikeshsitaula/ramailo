@extends('frontend.layouts.app')

@section('content')
    <div class="offset"></div>
    <div class="light-wrapper">
        <div class="container inner">
            <h3 class="section-title text-center">About the Company</h3>
            <div class="lead text-center">Who we are</div>
            <div class="row">
                <div class="col-sm-4">
                    <figure><img src="{{asset('img/frontend/logo.svg')}}" alt=""
                                 style="max-width:440px; max-height: 440px;"/></figure>
                </div>
                <div class="col-sm-8">
                    <h4>Our Working Place</h4>
                    <p>We are Ramailo Holidays. A fully licenced and registered travel company in nepal providing epic
                        Adventures in Nepal, Euro trips, big game safaris, American road trips, sailing
                        voyages,mountain treks, outback explorations and loads of other global adventures for travellers
                        and more. All the itineries that we provide are carefully planned and designed based on the
                        knowledge and experience of
                        our team members in the related field throughout the years. </p>
                    <p>We pride ourselves in being a creative luxury travel company who take a thoughtful approach to
                        creating tailor-made
                        holidays. Looking forward to welcome you and your friends to an adventure with ramailo
                        holidays.</p>
                </div>
            </div>
            <div class="divide50"></div>
            <div class="row">
                <div class="col-sm-4">
                    <h4>Catalogue definition</h4>
                    <p>input all your products (accommodation, flights, activities, transfers, rent-a-car, vessels,
                        cruises…) and create complex travel packages or groups</p>
                    <div class="divide5"></div>
                    <ul>
                        <li>
                            Accomodation
                        </li>
                        <li>
                            Flights
                        </li>
                        <li>
                            Reservations
                        </li>
                        <li>Holidays
                        </li>
                    </ul>
                    <!-- /.progress-list -->
                </div>
                <!-- /.col -->

                <div class="col-sm-4">
                    <h4>Why Choose Us?</h4>
                    <p>Here are some of the many reasons why you should consider RamailoHolidays.</p>
                    <ol class="color">
                        <li>International and Domestic air tickets.</li>
                        <li>Professional and world class service.</li>
                        <li>Worldwide hotel solutions.</li>
                        <li>Leisure and business trips.</li>
                    </ol>
                </div>
                <!-- /.col -->

                <div class="col-sm-4">
                    <h4>Our Services</h4>
                    <div class="divide10"></div>
                    <div class="services-2">
                    {{--<div class="icon"><img src="img/frontend/icons/icon-web.png"--}}
                    {{--data-src="style/images/icons/icon-web.png"--}}
                    {{--data-ret="style/images/icons/icon-web@2x.png" class="retina" alt=""/>--}}
                    {{--</div>--}}
                    <!-- /.icon -->
                        <div class="text">
                            <h5>Tours and Travel</h5>
                            <p>We provide tours and travel services. </p>
                        </div>
                        <!-- /.text -->
                        <div class="divide20"></div>
                    {{--<div class="icon"><img src="style/images/icons/icon-heart.png"--}}
                    {{--data-src="style/images/icons/icon-heart.png"--}}
                    {{--data-ret="style/images/icons/icon-heart@2x.png" class="retina" alt=""/>--}}
                    {{--</div>--}}
                    <!-- /.icon -->
                        <div class="text">
                            <h5>Bus Ticketing</h5>
                            <p>We provide tickets for bus services.</p>
                        </div>
                        <!-- /.text -->
                        <div class="divide20"></div>
                    {{--<div class="icon"><img src="style/images/icons/icon-print.png"--}}
                    {{--data-src="style/images/icons/icon-print.png"--}}
                    {{--data-ret="style/images/icons/icon-print@2x.png" class="retina" alt=""/>--}}
                    {{--</div>--}}
                    <!-- /.icon -->
                        <div class="text">
                            <h5>Flights</h5>
                            <p>We provide flight tickets.</p>
                        </div>
                        <!-- /.text -->

                    </div>
                    <!-- /.services-2 -->

                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

    <div class="parallax parallax1 customers">
        <div class="container inner text-center">
            <div class="testimonials owl-carousel thin">
                <div class="item">
                    <blockquote>
                        <p>And then there is the most dangerous risk of all —
                            the risk of spending your life not doing what you want on the bet you can buy yourself the
                            freedom to do it later.
                            <small>- Randy Komisa -</small>
                        </p>
                    </blockquote>
                </div>
                <!-- /.item -->
                <div class="item">
                    <blockquote>
                        <p>Travel is fatal to prejudice, bigotry, and narrow mindedness., and many of our people need it
                            sorely on these accounts.
                            <small>- Mark Twain -</small>
                        </p>
                    </blockquote>
                </div>
                <!-- /.item -->
                <div class="item">
                    <blockquote>
                        <p>The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.
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
                    <h3 class="section-title">Our Team</h3>
                    <div class="lead bm25">meet the talents behind</div>
                    <p>Get to know about the persons who made this all happen.</p>
                </div>
                <!-- /.col -->
                <div class="col-md-9 col-sm-12">
                    <div class="owl-posts team">
                        <div class="item post">
                            <figure><img src="{{asset('img/frontend/manoj.jpg')}}" alt=""
                                         style="max-height: 295px; max-width: 440px"/></figure>
                            <div class="post-content">
                                <h3 class="post-title">Manoj Dahal</h3>
                                <div class="biz-title">Chairman</div>
                                <p></p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/jhadka"><i class="icon-s-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/manoj_dahal.leo10/"><i
                                                class="icon-s-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.item -->
                        <div class="item post">
                            <figure><img src="{{asset('img/frontend/yograj.jpg')}}" alt=""
                                         style="max-height: 295px; max-width: 440px"/></figure>
                            <div class="post-content">
                                <h3 class="post-title">Yograj Sapkota</h3>
                                <div class="biz-title">Managing Director</div>
                                <p></p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/yograj.sapkota.5"><i
                                                class="icon-s-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/yograj_sapkota/"><i
                                                class="icon-s-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.item -->
                        <div class="item post">
                            <figure><img src="{{asset('img/frontend/sudip.jpg')}}" alt=""
                                         style="max-height: 295px !important; max-width: 440px !important;"/></figure>
                            <div class="post-content">
                                <h3 class="post-title">Sudip Poudel</h3>
                                <div class="biz-title">Director</div>
                                <p></p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/sudip.poudel.12177"><i
                                                class="icon-s-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-s-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.item -->
                        <div class="item post">
                            <figure><img src="{{asset('img/frontend/pratik.jpg')}}" alt=""
                                         style="max-height: 295px; max-width: 440px"/></figure>
                            <div class="post-content">
                                <h3 class="post-title">Pratik Adhikari</h3>
                                <div class="biz-title">Director</div>
                                <p></p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/pratik.adhikari.921025"><i
                                                class="icon-s-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/pratik_ad/"><i class="icon-s-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.item -->
                        <div class="item post">
                            <figure><img src="{{asset('img/frontend/ashok.jpg')}}" alt=""
                                         style="max-height: 295px; max-width: 440px"/></figure>
                            <div class="post-content">
                                <h3 class="post-title">Ashok Wagle</h3>
                                <div class="biz-title">Director</div>
                                <p></p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/ashok.wagle.5"><i class="icon-s-facebook"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/awe_showk/"><i class="icon-s-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.team -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.dark-wrapper -->
@endsection
