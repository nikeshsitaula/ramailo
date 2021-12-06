@extends('frontend.layouts.app')

@section('content')

    <div class="offset"></div>

    <div class="parallax" style=" background-image: url('img/frontend/art/parallax2.jpg');">
        <div class="container inner text-center">
            <h3 class="section-title large text-center">Tour Destinations</h3>
            <div class="lead large text-center">the world is in your hands</div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.parallax -->

    <div class="light-wrapper">
        <div class="container inner">

            <div class="portfolio fix-portfolio grid-portfolio">
                <ul class="filter">
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".asia">Asia</a></li>
                    <li><a href="#" data-filter=".europe">Europe</a></li>
                    <li><a href="#" data-filter=".northamerica">North America</a></li>
                    <li><a href="#" data-filter=".australia">Australia & New Zealand</a></li>
                    <li><a href="#" data-filter=".africa">Africa</a></li>
                    <li><a href="#" data-filter=".middleeast">Middle East & North Africa</a></li>
                </ul>
                <!-- /.filter -->

                <ul class="items col3">

                    @foreach($data as $d)
                        <li class="item thumb {{$d->continent}}">
                            <figure><a href="/storage/countryimages/{{$d->countryimage}}" class="fancybox-media"
                                       data-rel="grid-portfolio">
                                    <div class="text-overlay">
                                        <div class="info">View Larger</div>
                                    </div>
                                    <img src="/storage/countryimages/{{$d->countryimage}}" alt=""
                                         style="width: 440px !important; height:330px !important;"/> </a></figure>
                            <div class="box">
                                <h3 class="post-title"><a
                                        href="/itineraries/?country={{$d->country}}">{{$d->country}}</a></h3>
                                <p>{{str_limit(strip_tags($d->speciality),150,'...')}}</p>
                            </div>
                        </li>
                    @endforeach

                </ul>
                <!-- /.items -->
            </div>
            <!-- /.portfolio -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->
@endsection
