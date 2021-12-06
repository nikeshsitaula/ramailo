@extends('frontend.layouts.app')

@section('content')
    <!--/.navbar -->
    <div class="offset"></div>

    <div class="light-wrapper">
        <div class="container inner">

            <div class="row">
                <div class="col-sm-8 content">
                    <div class="classic-blog single">

                        {{--@foreach($itinerary as $iti)--}}
                        <div class="post format-image">
                            <figure class="main">
                                <img src="/storage/itineraryimages/{{$iti->itineraryimage}}" alt=""
                                     style="width: 700px !important; height: 500px !important;"/></figure>
                            <div class="post-content">
                                <h1 class="post-title">{{$iti->itineraryname}}</h1>
                                <div class="meta"><span class="date">{{$iti->created_at}}</span> <span class="category"><a
                                            href="#">Travel</a>, <a href="#">Holidays</a>, <a
                                            href="#">Destinations</a></span> <span class="comments"><a
                                            href="#">{{$iti->country}}</a></span> <span class="like"><a href="#">16 <i
                                                class="icon-heart"></i></a></span></div>
                                <!-- /.meta -->
                                <p>{{$iti->description}}</p>

                                <div class="divide30"></div>
                                <h3>{{$iti->subheadingname}}</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <figure><a href="/storage/itineraryimages/{{$iti->subimageone}}"
                                                   class="fancybox-media"
                                                   data-rel="portfolio">
                                                <div class="text-overlay">
                                                    <div class="info">View Larger</div>
                                                </div>
                                                <img src="/storage/itineraryimages/{{$iti->subimageone}}" alt=""
                                                     style="width: 440px !important; "/></a></figure>
                                    </div>
                                    <div class="col-sm-6">
                                        <figure><a href="/storage/itineraryimages/{{$iti->subimagetwo}}"
                                                   class="fancybox-media"
                                                   data-rel="portfolio">
                                                <div class="text-overlay">
                                                    <div class="info">View Larger</div>
                                                </div>
                                                <img src="/storage/itineraryimages/{{$iti->subimagetwo}}" alt=""
                                                     style="width: 440px !important; "/></a></figure>
                                    </div>
                                </div>
                                <p>{{$iti->subdescription}}</p>
                                <div class="divide30"></div>
                                <h3>{{$iti->sliderheadingname}}</h3>
                                <p></p>
                                <div class="owl-carousel image-slider custom-controls">
                                    <div class="item"><img src="/storage/itineraryimages/{{$iti->sliderimageone}}"
                                                           width="770"
                                                           height="650" alt=""/></div>
                                    <div class="item"><img src="/storage/itineraryimages/{{$iti->sliderimagetwo}}"
                                                           width="770"
                                                           height="650" alt=""/></div>
                                    <div class="item"><img src="/storage/itineraryimages/{{$iti->sliderimagethree}}"
                                                           width="770"
                                                           height="650" alt=""/></div>
                                </div>
                                <p>{{$iti->sliderdescription}}</p>
                                <div class="meta tags"><a href="#">Dare to Dream!</a> , <a
                                        href="#">Visit {{$iti->country}}</a>, <a
                                        href="#">Custom Itineraries</a>, <a href="#">Travel, Live Life</a></div>
                                <div class="share-links">
                                    <ul>
                                        <li><a class="btn share-facebook" href="#">Like</a></li>
                                        <li><a class="btn share-twitter" href="#">Tweet</a></li>
                                        <li><a class="btn share-pinterest" href="#">Pin it</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    {{--@endforeach--}}
                    <!--/.post -->
                    </div>
                    <!--/.grid-blog -->
                </div>
                <!-- /.content -->
                <aside class="col-sm-4 sidebar lp30">
                    <div class="sidebox widget">
                        <h5 class="widget-title">Elsewhere</h5>
                        <p>Follow us on our social media platform to stay up to date and know about the latest and
                            greatest from ramailoholidays.</p>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/ramailoholiday"><i class="icon-s-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/ramailoholidays"><i class="icon-s-instagram"></i></a>
                            </li>
                            <li><a href="https://www.twitter.com/HolidaysRamailo"><i class="icon-s-twitter"></i></a>
                            </li>
                            <li><a href="https://www.vimeo.com/user104102599"><i class="icon-s-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h5 class="widget-title">Popular Posts</h5>
                        <ul class="post-list">
                            <li>
                                <div class="icon-overlay"><a href="blog-post.html"><img
                                            src="{{asset('img/frontend/art/a1.jpg')}}"
                                            alt="" style="height: 70px; width: 70px;"/> </a></div>
                                <div class="meta">
                                    <h6><a href="/itineraries">Adventure Trip to Illam</a></h6>
                                    <em>3th Oct 2019</em></div>
                            </li>
                            <li>
                                <div class="icon-overlay"><a href="blog-post.html"><img
                                            src="{{asset('img/frontend/art/a2.jpg')}}"
                                            alt="" style="height: 70px; width: 70px;"/> </a></div>
                                <div class="meta">
                                    <h6><a href="/itineraries">Epic Adventure trek to Solukhumbu</a></h6>
                                    <em>28th Sep 2019</em></div>
                            </li>
                            <li>
                                <div class="icon-overlay"><a href="blog-post.html"><img
                                            src="{{asset('img/frontend/art/a3.jpg')}}"
                                            alt="" style="height: 70px; width: 70px;"/> </a></div>
                                <div class="meta">
                                    <h6><a href="/itineraries">Trip to India</a></h6>
                                    <em>15th Aug 2019</em></div>
                            </li>
                        </ul>
                        <!-- /.post-list -->
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h5 class="widget-title">Search</h5>
                        <form class="searchform" method="get">
                            <input type="text" id="s2" name="s" value="type and hit enter" onfocus="this.value=''"
                                   onblur="this.value='type and hit enter'"/>
                        </form>
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h5 class="widget-title">Need Assistance?</h5>
                        <p>feel free to drop us a line.</p>
                        <p>Our team of travel experts is here to answer any questions you may have. </p>
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="circled">
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Wildlife Safari</a></li>
                            <li><a href="#">Epic Treks</a></li>
                            <li><a href="#">Family Holidays</a></li>
                            <li><a href="#">Honeymoon</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h5 class="widget-title">Tags</h5>
                        <ul class="tag-list">
                            <li><a href="#">Holidays</a></li>
                            <li><a href="#">Itineraries</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Luxury</a></li>
                            <li><a href="#">Bucketlist</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Best Deals</a></li>
                            <li><a href="#">Treks</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /.col-sm-4 .sidebar -->

            </div>
            <!-- /.row -->
        </div>
        <!--/.container -->
    </div>
    <!--/.dark-wrapper -->

    <div class="dark-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <h3 class="section-title">You May Also Like</h3>
                    <div class="lead bm25">our latest itineraries</div>
                    <p>Get the most out of your Ramailo Holidays trip without breaking the bank. Stay in modern, classy
                        hotels with like-minded explorers – with plenty of bonus hotel upgrades to book. Our latest
                        offering is perfect for fun-seeking travellers looking for a taste of
                        World. </p>
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
@endsection
