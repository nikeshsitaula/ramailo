@extends('frontend.layouts.app')

@section('content')
    <!--/.navbar -->
    <div class="offset"></div>

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
                    <a href="#" class="btn">View All News</a></div>
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
                                            class="like pull-right"><a href="#"><i
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


    <div class="light-wrapper">
        <div class="container inner">

            <div class="row">
                <div class="col-sm-8 content">
                    <div class="grid-blog col2">

                        @foreach($itinerary as $d)
                            <div class="post">
                                <figure><a href="/">
                                        <div class="text-overlay">
                                            <div class="info">Read More</div>
                                        </div>
                                        <img src="/storage/itineraryimages/{{$d->subimageone}}" alt="" style="height: 300px; width: 440px;"/> </a></figure>
                                <div class="post-content">
                                    <h3 class="post-title"><a href="/itineraries/show/{{$d->id}}">{{$d->itineraryname}}</a></h3>
                                    <p>{{str_limit(strip_tags($d->description),200,'...')}}</p>
                                    <div class="footer-meta"><span class="date pull-left">{{$d->created_at}}</span>
                                        <span
                                            class="like pull-right"><a href="#"><i class="icon-heart"></i> 23</a></span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                    <!--/.grid-blog -->

                    {{--pagination--}}
                    <?php echo $itinerary->links(); ?>


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

@endsection
