@extends('frontend.layouts.app')

@section('content')
    <!--/.navbar -->
    <div class="offset"></div>




    <div class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-sm-8 content">
                    <div class="classic-blog">
                        <div class="post format-gallery">
                            @foreach($blogview as $d)
                            <div class="owl-carousel image-slider custom-controls">
                                <div class="item"><img src="/storage/coverimages/{{$d->coverimageone}}" width="1170" height="650"
                                                       alt=""/></div>
                                <div class="item"><img src="/storage/coverimages/{{$d->coverimagetwo}}" width="1170" height="650"
                                                       alt=""/></div>
                                <div class="item"><img src="/storage/coverimages/{{$d->coverimagethree}}" width="1170" height="650"
                                                       alt=""/></div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title"><a href="/blog/show/{{$d->id}}">{{$d->title}}</a></h2>
                                <div class="meta"><span class="date">{{$d->created_at}}</span> <span class="category"><a
                                            href="#">ramailoadventures</a>, <a href="#">holidays</a></span> <span
                                        class="comments"><a href="#">3 Comments</a></span> <span class="like"><a
                                            href="#">21 <i class="icon-heart"></i></a></span></div>
                                <!-- /.meta -->
                                <p>{{str_limit(strip_tags($d->description),300,'...')}}</p>
                                <a href="/blog/show/{{$d->id}}" class="more">Continue reading →</a>
                            </div>
                            @endforeach
                        </div>
                        <!--/.post -->
                    </div>
                    <!--/.grid-blog -->
                    <!-- /.pagination -->
                    <?php echo $blogview->links(); ?>
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
